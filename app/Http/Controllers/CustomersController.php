<?php

namespace App\Http\Controllers;

use App\Models\Customers\Customers;
use Illuminate\Http\Request;
use App\Http\Requests\storeImportedCustomerRequest;
use Excel;

class CustomersController extends Controller
{

    public function index()
    {
        $customers = Customers::orderBy('id', 'DESC')->get();
        //$customers = Customer::paginate(10);
        return view('customers.allCustomers',compact('customers'));
       // return view('customers.customer_form',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('customers.customerform');
        return view('customers.customer_form');
    }

    public function importCustomersForm()
    {
        return view('customers.customers_importation_form');
    }
       
    public function store(StoreCustomerRequest $request)
    {
        $customer = new Customers($request->all());
                    
        if(!$customer->save()){
           
            session()->flash('message','Customer NOT Registered');
            return redirect()->back();
        }
        
        session()->flash('message','Customer Registered Succcessfully');
        return redirect('/customers');
    }

    
    public function show(Customers $customer)
    {
        return view('customers.customershow', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customers::find($id);
        return view('customers.customereditform',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCustomerRequest $request, Customer $customer)
    {

        $customer = Customer($request->except('company'));
       // dd($customer);
     /*   $customer->first_name     = $request->first_name;
        $customer->middle_name    = $request->middle_name;
        $customer->last_name      = $request->last_name;
        $customer->address        = $request->address;
        $customer->city           = $request->city;
        $customer->state          = $request->state;
        $customer->zip            = $request->zip;
        $customer->title     
             = $request->title;
        $customer->phone_number   = $request->phone_number;
        $customer->email_address  = $request->email_address;
        $customer->website        = $request->website;*/
                
        if(!$customer->save()){

            session()->flash('message','Customer Details NOT Updated');
            return back();
        }
        
        session()->flash('message','Customer Details Updated Succcessfully');
        return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customers::destroy($id);
        session()->flash('message','Customer Deleted Succcessfully');
        return redirect('/customers');
    }

    public function import(storeImportedCustomerRequest $request)
    {
        //$customer = new Customers($request->all());
        $request->customer_import_file->store('uploads/customers');
        if($request->hasFile('customer_import_file')){
            $path = $request->file('customer_import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();

            if(!empty($data) && $data->count())
            {
                $data = $data->toArray();
                for($i=0;$i<count($data);$i++)
                { 
                  $customer = new Customers($data[$i]);
                    if(!$customer->save()){
                        session()->flash('message','Customers NOT Registered');
                        return redirect()->back();
                    }
                }
                session()->flash('message','Customers Registered Succcessfully');
                return redirect('/customers/importation');
          }
        }
    }
}
