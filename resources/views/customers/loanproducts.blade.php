@extends('layouts.master')
@section ('header')    

    <div class="blog-header">
        <h1 class="blog-title">Customers</h1>
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
            <p>Register Loan Product Details Uing The Form Below</p>
            <hr>
        </div>
            
    @include('layouts.errors')
        <form method="POST" action="/customers">
            {{ csrf_field() }}
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4 form-group">
                    <label for="firstName">Product Name</label>
                    <input type="text" name="first_name" placeholder="Enter First Name Here.." class="form-control">
                    </div>
            <div class="col-sm-4 form-group">
                <label for="middleName">Interest Method</label>
                <input type="text" name="middle_name" placeholder="Enter Middle Name Here.." class="form-control">
            </div>
            <div class="col-sm-4 form-group">
                <label for="lastName">Interest Rate</label>
                <input type="text" name="last_name" placeholder="Enter Last Name Here.." class="form-control">
            </div>
            </div>    
            <div class="form-group">
                <label for="address">Penalty Rate</label>
                <textarea name="address" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
            </div>  
            <div class="row">
                <div class="col-sm-4 form-group">
                <label for="city">City</label>
                <input type="text" name="city" placeholder="Enter City Name Here.." class="form-control">
            </div>  
            <div class="col-sm-4 form-group">
                <label for="state">State</label>
                <input type="text" name="state" placeholder="Enter State Name Here.." class="form-control">
            </div>  
            <div class="col-sm-4 form-group">
                <label for="zip">Zip</label>
                <input type="text" name="zip" placeholder="Enter Zip Code Here.." class="form-control">
            </div>    
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Enter Designation Here.." class="form-control">
            </div>    
                <div class="col-sm-6 form-group">
                <label for="company">Company</label>
                <input type="text" name="company" placeholder="Enter Company Name Here.." class="form-control">
            </div>  
            </div>       
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" name="phone_number" placeholder="Enter Phone Number Here.." class="form-control">
            </div>    
            <div class="form-group">
                <label for="emailAddress">Email Address</label>
                <input type="text" name="email_address" placeholder="Enter Email Address Here.." class="form-control">
            </div>  
            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" name="website" placeholder="Enter Website Name Here.." class="form-control">
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