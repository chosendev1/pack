<?php

namespace App\Http\Controllers;

use App\Models\Loans\LoanApplications;
use App\Models\Loans\LoanProducts;
use App\Models\Loans\Schedule;
use App\Models\Customers\Customers;
use Illuminate\Loans\Http\Request;
use App\Http\Requests\StoreLoanApplicationRequest;
use Carbon\Carbon;

class LoansApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function index()
    {
        $loan_applications = LoanApplication::with('customer')
            ->with('loan_products')
            ->get();
        return view('loans.loan_application_form',compact('loan_applications'));
    }*/

     public function index()
    {
        //$loan_applications = LoanApplications::all();
        $loan_applications = LoanApplications::with('loan_products')
            ->with('customers')
            ->orderBy('id', 'DESC')
            ->get();
            
        return view('loans.allLoanapplications',compact('loan_applications'));
        //return view('loans.loan_application_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Customers $customerId)
    {   
        $loan_products = LoanProducts::all();
        $customer    = $customerId;
        return view('loans.loan_form',compact(['loan_products','customer']));
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
        $loan_application = new LoanApplications($request->all());
        
        if(!$loan_application->save()){
      
            session()->flash('message','Loan application Failed');
            return redirect('/loan-applications');
        }
        session()->flash('message','Loan application was succcessful');
        return redirect('/loan-applications');
    }

    //loan schedule

    public function schedule(LoanApplications $loan, LoanProducts $product)
    {   
        $schedule = new Schedule($loan,$product);
        //$interest_method = $product->interest_method;
        $schedule = $schedule->schedule();
        return view('loans.payment_schedule',compact('schedule'));
       
        /*session()->flash('message','Loan Disbursed Succcessfully');
        return redirect('/loan-applications');*/
        //printf("Right now is %s", Carbon::now()->setTimezone('Africa/Kampala'));
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
        return LoanApplications::destroy($loan_application);
    }

    public function loan_approval($id)
    {
        $loan=LoanApplications::find($id);
        $loan->approved=1;
         if(!$loan->save()){  
            session()->flash('message','Loan Application NOT Approved');
            return redirect('/loan-applications');
        }
        session()->flash('message','Loan Approved Succcessfully');
        return redirect('/loan-applications');
    }

    public function loan_disbursement($id)
    {   
        //$loan=LoanApplications::find($id)->with('loan_products');
        //dd($id);
        //use the above whenu resolve the foreign keys issue

        $loan=LoanApplications::find($id);
        $schedule = new Schedule($loan);
        $schedule = $schedule->flat();
     
        return view('loans.payment_schedule',compact('schedule'));
       

        /*$loan=LoanApplication::find($id);
        $loan->disbursed=1;
         if(!$loan->save()){
            
            session()->flash('message','Loan Application NOT Disburseded');
            return redirect('/loan-applications');
        }
        session()->flash('message','Loan Disbursed Succcessfully');
        return redirect('/loan-applications');*/
        //printf("Right now is %s", Carbon::now()->setTimezone('Africa/Kampala'));
    }

    public function reject_loan_application($id)
    {
        $loan=LoanApplications::find($id);
        $loan->disbursed=1;
         if(!$loan->save()){
            
            session()->flash('message','Loan Application NOT Disburseded');
            return redirect('/loan-applications');
        }
        session()->flash('message','Loan Disbursed Succcessfully');
        return redirect('/loan-applications');
    }
}
