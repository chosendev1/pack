@extends('layouts.master')
@section ('header')    

    <div class="blog-header">
        <h1 class="blog-title">Loan Products</h1>
        <p class="lead blog-description">This is the loan products registration page</p>
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
            <h2 class="blog-post-title">Loan Products Form</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
            <p>Register Loan Product Details Using The Form Below</p>
            <hr>
        </div>
            
    @include('layouts.errors')
        <form method="POST" action="/loan-products">
            {{ csrf_field() }}
             
            <div class="col-sm-12">
            <div class="form-group">             
                <label for="firstName">Product Name</label>
                <input type="text" name="product_name" class="form-control">
            </div>
            <div class="row">     
            <div class="col-sm-4 form-group">
                <label for="interestMethod">Interest Method</label>
                  <select class="form-control" name="interest_method" id="interestMethod">
                    <option>Flat</option>
                    <option>Amortised</option>
                  </select>
            </div>
            <div class="col-sm-4 form-group">
                <label for="interestRate">Interest Rate</label>
                <input type="text" name="interest_rate"  class="form-control">
            </div>
            <div class="col-sm-4 form-group">
                <label for="address">Penalty Rate</label>
                <input type="text" name="penalty_rate" rows="3" class="form-control">
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
            <h4>About</h4>
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