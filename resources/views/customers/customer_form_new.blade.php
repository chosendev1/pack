@extends('layouts.master')     
  @section ('content')
    <div class="col-12">
      <div class="page-header">
      <h1 class="page-title">
        Customers
      </h1>
    </div>
    @include('layouts.errors')
    <form class="card" method="POST" action="/customers">
      {{ csrf_field() }}
      <div class="card-header">
        <h3 class="card-title">Registration</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            @if ($flash=session('message'))
              <div class="alert alert-success" role="alert">
                {{ $flash }}
              </div>
            @endif 
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label class="form-label">Name of Applicant</label>
              <input type="text" class="form-control" name="name_of_applicant">
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">Gender</label>
              <div class="selectgroup w-100">
                <label class="selectgroup-item">
                  <input type="radio" name="gender" value="Male" class="selectgroup-input" >
                  <span class="selectgroup-button">Male</span>
                </label>
                <label class="selectgroup-item">
                  <input type="radio" name="gender" value="Female" class="selectgroup-input">
                  <span class="selectgroup-button">Female</span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Account Number</label>
              <input type="text" class="form-control" name="member_number">
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">Father`s Name</label>
              <input type="text" class="form-control" name="fathers_name">
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">Mother`s Name</label>
              <input type="text" class="form-control" name="mothers_name" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label">Spouse`s Name</label>
              <input type="text" class="form-control" name="spouses_name">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Marital Status</label>
              <input type="text" class="form-control" name="maritual_status" required>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Nationality</label>
              <input type="text" name="nationality" class="form-control" value="Ugandan">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Association Id No.</label>
              <input type="text" class="form-control" name="association_id_number" required>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Stage of Operation</label>
              <input type="text" class="form-control" name="stage_of_operation" required>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Number Plate</label>
              <input type="text" class="form-control" name="motor_cycle_no_plate" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label class="form-label">Permanent Address</label>
              <input type="text" class="form-control" id="email1" name="permanent_address" required>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Closest Land Mark</label>
              <input type="text" class="form-control" id="username1" name="closet_land_mark" required>
            </div>
          </div>
          <div class="col-sm-8 col-md-4">
            <div class="form-group">
              <label class="form-label">Mobile No.1</label>
              <input type="text" class="form-control" id="email1" name="mobile_no1" required>
            </div>
          </div>
          <div class="col-sm-8 col-md-4">
            <div class="form-group">
              <label class="form-label">Mobile No.2</label>
              <input type="text" class="form-control" id="email1" name="mobile_no2">
            </div>
          </div>
          <div class="col-sm-8 col-md-4">
            <div class="form-group">
              <label class="form-label">Email Address</label>
              <input type="text" class="form-control" name="email_address">
            </div>
          </div>                  
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-label">Has proof of address been submitted for permanent address</label>
              <div class="custom-controls-stacked">
                <label class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" name="has_proof_of_address" value=0>
                  <span class="custom-control-label">No</span>
                </label>
                <label class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" name="has_proof_of_address" value=1>
                  <span class="custom-control-label">Yes</span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label">Gross Weekly Income</label>
              <div class="custom-controls-stacked">
                <label class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" 
                  name="gross_weekly_income" value="below_50000">
                  <div class="custom-control-label">Below UGX 50,000</div>
                </label>
                <label class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" 
                  name="gross_weekly_income" value="btn_50000_and_100000">
              <div class="custom-control-label">Btn UGX 50,000-UGX 100,000</div>
                </label>
                <label class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" 
                  name="gross_weekly_income" value="btn_100000_and_150000">
                  <div class="custom-control-label">Btn UGX 100,000-150,000</div>
                </label>
                <label class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" 
                  name="gross_weekly_income" value="above_150000">
                  <div class="custom-control-label">Above UGX 150,0000</div>
                </label>
              </div>
            </div>
          </div>                   
          <div class="col-md-8">
              <div class="form-group">
              <label class="form-label">Any Other Income</label>
              <textarea rows="4" class="form-control" name="other_sources_of_income" placeholder="Describe other income sources" value=""></textarea>
              </div>
          </div>                    
        </div>
      </div>
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Save Customer</button>
      </div>
    </form>
    </div>         		
  @endsection
