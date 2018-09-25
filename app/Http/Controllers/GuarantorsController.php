<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers\Guarantor;

class GuarantorsController extends Controller
{
    
    public function index()
    {
        $guarantors = Guarantor::all();
        return view('guarantors.allGuarantors',compact('guarantors'));
    }

    public function create()
    {
        return view('guarantors.guarantor_form_new');
    }

    public function store(StoreGuarantorRequest $request)
    {
        $guarantor = new Guarantor($request->all());
                    
        if(!$guarantor->save()){
           
            session()->flash('message','Guarantor NOT Registered');
            return redirect()->back();
        }
        
        session()->flash('message','Guarantor Registered Succcessfully');
        return redirect('/guarantors');
    }


    public function show(Guarantor $guarantor)
    {
        return view('guarantors.guarantorshow', compact('guarantor'));
    }

    public function edit($id)
    {
        $customer = Guarantor::find($id);
        return view('guarantors.guarantoreditform',compact('guarantor'));
    }



}
