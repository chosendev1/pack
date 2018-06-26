@extends('layouts.master')
      
    @section ('content')

<div class="panel-heading">Register Customer</div>
					<div class="panel-body">
						
						<form>
<div class="form-row">
    <div class="col-md-12">
      <label for="name_of_applicant">Name of Applicant</label>
      <input type="text" class="form-control" name="name_of_applicant" required>
    </div>
 </div>

 <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="fathers_name">Father`s Name</label>
      <input type="text" class="form-control" name="fathers_name" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="mothers_name">Mother`s Name</label>
        <input type="text" class="form-control" name="mothers_name" required>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationDefault03">Spouse`s Name</label>
     <input type="text" class="form-control" id="spouses_name" required>
    </div>

</div>

    <div class="form-row"> 
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Gender</label>
      <input type="text" class="form-control" name="gender" required>
    </div>
    <div class="col-md-3 mb-3">
     <label for="validationDefault05">Marital Status</label>
     <input type="text" class="form-control" name="maritual_status" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Nationality</label>
     <input type="text" class="form-control" name="nationality" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Date of Birth</label>
      <input type="text" class="form-control" name="date_of_birth" required>
    </div>
  </div>

 <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Association Identity Number</label>
      <input type="text" class="form-control" name="association_id_number" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Stage of Operation</label>
     <input type="text" class="form-control" name="stage_of_operation" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Motor Cycle Number Plate</label>
      <input type="text" class="form-control" name="motor_cycle_no_plate" required>
    </div>
  </div>

 <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Permanent Address</label>
     <input type="text" class="form-control" name="permanent_address" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Closest Land Mark</label>
      <input type="text" class="form-control" name="closet_land_mark" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Mobile No.1</label>
     <input type="text" class="form-control" name="mobile_no1" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Mobile No.2</label>
      <input type="text" class="form-control" name="mobile_no2" required>
    </div>
  </div>

	
   				
    <div class="col-md-6">
    <div class="form-group">
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
	<div class="form-group">
	<label>Any Other Income</label>
	<textarea class="form-control" rows="2" name="other_income_source"></textarea>
	</div>
	</div>	
	
    							
	
	<div class="form-row">
	<div class="col-md-6 mb-3">
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
	<div class="checkbox">
	<label>
	<input type="checkbox" value="">No
	</label>
	</div>
	<div class="checkbox">
	<label>
	<input type="checkbox" value="">No
	</label>
	</div>							
	</div>
	</div>
	
<div class="form-row">
<div class="col-md-3 mb-3">
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>				
  @endsection