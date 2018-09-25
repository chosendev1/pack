@extends('layouts.master')
      
    @section ('content')

       <div class="container-fluid">
              <div class="col-12">
              <div class="page-header">
              <h1 class="page-title">
                Customers
              </h1>
              </div>
          
                <div class="col-lg-12 col-xl-12 m-b-10">
                    <div class="bg-white padding-25 white-box h-100">
                        <h4 class="mt-0 box-title">Registration</h4>
                        <form class="material-form">
                            <div class="form-row">
                                <div class="form-check col-md-12">
                                    <div class="custom-control custom-radio material-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="gender" id="male1" checked>
                                        <label class="custom-control-label" for="male1">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio material-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="gender" id="female1" checked>
                                        <label class="custom-control-label" for="female1">Female</label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 floating-label">
                                    <input type="text" class="form-control" id="firstname1" name="name_of_applicant" required>
                                    <label for="firstname1">Name of Applicant</label>
                                </div>
                                <div class="form-group col-lg-6 floating-label">
                                    <input type="text" class="form-control" id="firstname1" name="customer_number" required>
                                    <label for="firstname1">Number</label>
                                </div>
                                <div class="form-group col-lg-4 floating-label">
                                    <input type="text" class="form-control" id="lastname1" name="fathers_name" required>
                                    <label for="lastname1">Father`s Name</label>
                                </div>
                                <div class="form-group col-lg-4 floating-label">
                                    <input type="text" class="form-control" id="firstname1" name="mothers_name" required>
                                    <label for="firstname1">Mother`s Name</label>
                                </div>
                                <div class="form-group col-lg-4 floating-label">
                                    <input type="text" class="form-control" id="lastname1" name="spouses_name" required>
                                    <label for="lastname1">Spouse`s Name</label>
                                </div>
                                <div class="form-group col-lg-4 floating-label">
                                    <input type="text" class="form-control" id="firstname1" name="maritual_status" required>
                                    <label for="firstname1">Marital Status</label>
                                </div>
                                <div class="form-group col-lg-4 floating-label">
                                    <input type="text" class="form-control" id="lastname1" name="fathers_name" required>
                                    <label for="lastname1">Nationality</label>
                                </div>
                                <div class="form-group col-lg-4 floating-label">
                                    <input type="text" class="form-control" id="lastname1" name="date_of_birth" required>
                                    <label for="lastname1">Date of Birth</label>
                                </div>
                                <div class="form-group col-lg-4 floating-label">
                                    <input type="text" class="form-control" id="firstname1" name="association_id_number" required>
                                    <label for="firstname1">Association Identity Number</label>
                                </div>
                                <div class="form-group col-lg-4 floating-label">
                                    <input type="text" class="form-control" id="lastname1" name="stage_of_operation" required>
                                    <label for="lastname1">Stage of Operation</label>
                                </div>
                                <div class="form-group col-lg-4 floating-label">
                                    <input type="text" class="form-control" id="username1" name="motor_cycle_no_plate" required>
                                    <label for="username1">Motor Cycle Number Plate</label>
                                </div>
                                <div class="form-group col-lg-3 floating-label">
                                    <input type="text" class="form-control" id="email1" name="permanent_address" required>
                                    <label for="email1">Permanent Address</label>
                                </div>
                                 <div class="form-group col-lg-3 floating-label">
                                    <input type="text" class="form-control" id="username1" name="closet_land_mark" required>
                                    <label for="username1">Closest Land Mark</label>
                                </div>
                                <div class="form-group col-lg-3 floating-label">
                                    <input type="text" class="form-control" id="email1" name="mobile_no1" required>
                                    <label for="email1">Mobile No.1</label>
                                </div>
                                <div class="form-group col-lg-3 floating-label">
                                    <input type="text" class="form-control" id="username1" name="mobile_no2" required>
                                    <label for="username1">Mobile No.2</label>
                                </div>
                                <div class="form-group col-lg-6 floating-label">
                                    <label>Has proof of address been submitted for permanent address</label>
                                    <div class="checkbox">
                                    <label>
                                    <input type="checkbox" value="">Yes
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                    <input type="checkbox" value="">No
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 floating-label">
                                    <label>Gross Weekly Income</label>
                                    <div class="checkbox">
                                    <label>
                                    <input type="checkbox" value="">Yes
                                    </label>
                                    </div>
                                    <div class="checkbox">
                                    <label>
                                    <input type="checkbox" value="">No
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 floating-label">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    <label for="exampleFormControlTextarea1">Any Other Income</label>
                                </div>
                                <div class="form-group col-lg-12 text-right">
                                    <button type="submit" class="btn btn-theme ripple text-uppercase btn-raised"><span>Submit</span><i class="fa fa-paper-plane right" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>		
  @endsection