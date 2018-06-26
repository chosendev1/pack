<?php

namespace App\Http\Controllers;

use App\Models\LoanProduct;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreLoanProductRequest;

class LoanProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loanproducts = LoanProduct::all();
        return view('loanproducts.loanproductslist',compact('loanproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loanproducts.loanproductsform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoanProductRequest $request)
    {
        $product = new LoanProduct($request->all());
    
        if(!$product->save()){
            session()->flash('message','Loan Product NOT Registered');
            return redirect('/loan-products/create');
        }
        session()->flash('message','Loan Product Registered Succcessfully');
        return redirect('/loan-products/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\LoanProduct $loan_product
     * @return \Illuminate\Http\Response
     */
    public function show(LoanProduct $loan_product)
    {
        return view('some.view', compact('loan_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\loan_products  $loan_products
     * @return \Illuminate\Http\Response
     */
    public function edit(loan_products $loan_products)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\loan_products  $loan_products
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLoanProductRequest $request, LoanProduct $loan_products)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\loan_products  $loan_products
     * @return \Illuminate\Http\Response
     */
    public function destroy(loan_products $loan_products)
    {
       return LoanApplication::destroy($id);
    }
}
