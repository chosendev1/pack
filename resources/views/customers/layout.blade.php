@extends('layouts.master2')

@section ('content')

<div class="container">

      
      <div class="container bg-secondary">
        <h1>Navbar example</h1>
        
          <div class="blog-post">
            <h2 class="blog-post-title">Registration Form</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>Collect and register customer details using the form below</p>
            <hr>
            
          </div><!-- /.blog-post -->
            
         @include('layouts.errors')
        <form method="POST" action="/customers">

                 {{ csrf_field() }}

          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-4 form-group">
                <label for="firstName">First Name</label>
                <input type="text" name="first_name" placeholder="Enter First Name Here.." class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label for="middleName">Middle Name</label>
                <input type="text" name="middle_name" placeholder="Enter Middle Name Here.." class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label for="lastName">Last Name</label>
                <input type="text" name="last_name" placeholder="Enter Last Name Here.." class="form-control">
              </div>
            </div>    
         

            <div class="form-group">
              <label for="address">Address</label>
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
    </div> <!-- /container -->
@endsection