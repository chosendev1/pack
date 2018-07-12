<?php

namespace App\Http\Controllers\Loans;

use App\Models\Loans\LoanApplication;
use App\Models\Loans\LoanProduct;
use App\Models\Loans\Customer;
use Illuminate\Loans\Http\Request;
use App\Http\Requests\StoreLoanApplicationRequest;

class LoanApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loan_applications = LoanApplication::with('customer')
            ->with('loan_products')
            ->get();
        return view('loans.loan_application_form',compact('loan_applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $loan_products = LoanProduct::all();
        $customers    = Customer::all();
        return view('loans.loan_application_form',compact(['loan_products','customers']));
        //_allLoanApplications();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoanApplicationRequest $request)
    {
        $loan_application = new LoanApplication($request->all());
        
        if(!$loan_application->save()){
            
            session()->flash('message','Loan Application NOT Registered');
            return redirect('/loan-applications/create');
        }
        session()->flash('message','Loan Application Succcessful');
        return redirect('/loan-applications/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\loan_application  $loan_application
     * @return \Illuminate\Http\Response
     */
    public function show(loan_application $loan_application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\loan_application  $loan_application
     * @return \Illuminate\Http\Response
     */
    public function edit(loan_application $loan_application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\loan_application  $loan_application
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLoanApplicationRequest $request, loan_application $loan_application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\loan_application  $loan_application
     * @return \Illuminate\Http\Response
     */
    public function destroy(loan_application $loan_application)
    {
        return LoanApplication::destroy($loan_application);
    }
}
