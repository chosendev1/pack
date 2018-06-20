@extends('layouts.master')
@section ('header')    

    <div class="blog-header">
        <h1 class="blog-title">Loans</h1>
        <p class="lead blog-description">This is the loan application page</p>
        <div class="col-sm-8 blog-main">
        @if ($flash=session('message'))
            <div class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
        @endif 
        </div>
    </div>
    <br>
@endsection
      
@section ('content')
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">Loan Application Form</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
            <p</p>
            <hr>
        </div>
            
    @include('layouts.errors')
  
        <form method="POST" action="/loan-application">
            {{ csrf_field() }}
            <div class="col-sm-12">
            
            <div class="form-group">
                <label for="loanProduct">Customer</label>
                <select class="form-control" name="customer_id" id="customer_id">
                        @foreach($customers as $customer)
                            <option value={{ $customer->id }}>
                            {{ $customer->first_name.' '.$customer->middle_name.' '.
                               $customer->last_name }} 
                            </option>
                        @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="loanProduct">Loan Product</label>
                <select class="form-control" name="loan_product_id" id="interestMethod">
                        @foreach($loanproducts as $product)
                            <option value={{ $product->id }}>
                            {{ $product->product_name }}
                            </option>
                        @endforeach
                </select>
            </div>
            <div class="row">
            <div class="col-sm-4 form-group">
                <label for="amount">Amount</label>
                <input type="text" name="amount" class="form-control">
            </div>
            <div class="col-sm-4 form-group">
                <label for="period">Period</label>
                <input type="text" name="period" class="form-control">
            </div>    
            <div class="col-sm-4 form-group">
                <label for="address">Date</label>
                <input type="text" name="date" class="form-control">
            </div>  
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-info">Save</button>         
            </div>
            </div>
        </form> 
    </div>

@endsection

@section('sidebar')
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
        </div>
        <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
        </div>
        </div>
@endsection