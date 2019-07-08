<?php

namespace App\Http\Controllers;

use App\Models\Loans\LoanApplications;
use App\Models\Payments\Payments;
use App\Http\Requests\StoreManualPaymentsRequest;
use App\Http\Requests\StoreAutomaticPaymentsRequest;
use App\Models\Loans\Schedule;
use App\Models\Loans\Reports\LoanReports;
use App\Http\Requests\storeImportedPaymentsRequest;
use Carbon\Carbon;
use Excel;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $payments = Payments::with('loan_application')
        ->orderBy('created_at', 'DESC')->get();
        return view('payments.all_payments',compact('payments'));
    }

    public function importPaymentsForm()
    {
        return view('payments.payments_importation_form');
    }

    public function create(LoanApplications $loan)
    {   
        $customer     = $loan->customers()->get();
        $loan_product = $loan->loan_products()->get();
        foreach($loan_product as $loanproduct)
            $product=$loanproduct;
        $payments   = $loan->payments()->get();
        $schedule = new Schedule($loan,$product);
        $loan_reports = new LoanReports($loan,$product);
        $ledger   = $loan_reports->loanLedgerReport();
        $balance   = $loan_reports->outstandingBalanceReport(Carbon::now());
        $arrears_report   = $loan_reports->arrearsReport(Carbon::now());
        $payment_schedule = $schedule->schedule();
        
        return view('payments.payments_form',compact([
            'loan','customer','loan_product','payments','ledger','balance','payment_schedule','arrears_report'
            ]));
    }

    public function manualPayments(StoreManualPaymentsRequest $request)
    {
        $payment = new Payments($request->all());
                    
        if(!$payment->save()){
           
            session()->flash('message','Payment NOT Registered');
            return redirect()->back();
        }
        session()->flash('message','Payment Registered Succcessfully');
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function importPayments(storeImportedPaymentsRequest $request)
    {
        $request->payments_import_file->store('uploads/payments');
        if($request->hasFile('payments_import_file')){
            $path = $request->file('payments_import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();

            if(!empty($data) && $data->count())
            {
                $data = $data->toArray();
                for($i=0;$i<count($data);$i++)
                { 
                  $payment = new Payments($data[$i]);
                    if(!$payment->save()){
                        session()->flash('message','Payments NOT Registered');
                        return redirect()->back();
                    }
                }
                session()->flash('message','Payments Registered Succcessfully');
                return redirect('/customers/importation');
          }
        }
    }
}
