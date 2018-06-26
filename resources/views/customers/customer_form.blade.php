@extends('layouts.master')
      
    @section ('content')

<div class="panel-heading">Customer Registration</div>
<div class="col-sm-8">
        @if ($flash=session('message'))
            <div class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
        @endif 
        </div>
					<div class="panel-body">
             @include('layouts.errors')
		<div class="col-md-6">
          <form method="POST" action="/customers">
               {{ csrf_field() }}
              <div class="form-group">
                  <label for="name_of_applicant">Name of Applicant</label>
                  <input type="text" class="form-control" name="name_of_applicant" required>
                </div>
                <div class="form-group">
                    <label for="fathers_name">Father`s Name</label>
                    <input type="text" class="form-control" name="fathers_name" required>
                  </div>
                <div class="form-group">
                    <label for="validationDefault03">Spouse`s Name</label>
                    <input type="text" class="form-control" name="spouses_name" required>
                  </div>
                <div class="form-group">
                  <label for="validationDefault04">Gender</label>
                  <input type="text" class="form-control" name="gender" required>
                </div>
               <div class="form-group">
                   <label for="validationDefault03">Nationality</label>
                   <input type="text" class="form-control" name="nationality" required>
                </div>
                <div class="form-group">
                <label for="validationDefault05">Association Identity Number</label>
                <input type="text" class="form-control" name="association_id_number" required>
                </div>
                 <div class="form-group">
                    <label for="validationDefault03">Permanent Address</label>
                    <input type="text" class="form-control" name="permanent_address" required>
                  </div>

                     <div class="form-group">
                    <label for="validationDefault04">Mobile No.1</label>
                    <input type="text" class="form-control" name="mobile_no1" required>
                  </div>                                
                  <div class="form-group">
                    <label>Checkboxes</label>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">Checkbox 1
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">Checkbox 2
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">Checkbox 3
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">Checkbox 4
                      </label>
                    </div>
                  </div>
                </div>

                


                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fathers_name">Member Number</label>
                    <input type="text" class="form-control" name="member_number" required>
                  </div>
                  <div class="form-group">
                  <label for="mothers_name">Mother`s Name</label>
                  <input type="text" class="form-control" name="mothers_name" required>
                </div>
                  <div class="form-group">
                    <label for="validationDefault05">Marital Status</label>
                    <input type="text" class="form-control" name="maritual_status" required>
                  </div>
                  <div class="form-group">
                   <label for="validationDefault04">Date of Birth</label>
                   <input type="text" class="form-control" name="date_of_birth" required>
                  </div>
                  <div class="form-group">
                    <label for="validationDefault03">Stage of Operation</label>
                    <input type="text" class="form-control" name="stage_of_operation" required>
                  </div>
                  <div class="form-group">
                  <label for="validationDefault04">Motor Cycle Number Plate</label>
                  <input type="text" class="form-control" name="motor_cycle_no_plate" required>
                 </div>
                  <div class="form-group">
                  <label for="validationDefault04">Closest Land Mark</label>
                  <input type="text" class="form-control" name="closet_land_mark" required>
                </div>
                   
                  <div class="form-group">
                  <label for="validationDefault03">Mobile No.2</label>
                  <input type="text" class="form-control" name="mobile_no2" required>
                </div>
             
                  <div class="form-group">
                    <label for="validationDefault03">Has proof of address been submitted for permanent address</label>
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
                <div class="form-group">
                  <label>Other Sources of Income</label>
                  <textarea class="form-control" rows="3" name="other_sources_of_income"></textarea>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-primary col-6 col-md-4">Save</button>
                </div>
              </form>
</div>
</div>				
  @endsection