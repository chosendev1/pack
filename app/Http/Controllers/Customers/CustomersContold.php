<?php

namespace App\Http\Controllers;

use App\Models\Customers\Customers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;

class CustomersContold extends Controller
{

    public function index()
    {
        $customers = Customers::all();
        //return view('customers.customer_form',compact('customers'));
        return view('customers.allCustomers',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.customer_form_new');
    }

    public function importCustomersForm()
    {
        return view('customers.customer_import_form');
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
    public function update(StoreCustomerRequest $request, Customers $customer)
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
}
