@extends('layouts.master')
      
    @section ('content')

<div class="panel-heading">Guarantor Registration</div>
<div class="col-sm-8">
        @if ($flash=session('message'))
            <div class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
        @endif 
        </div>
					<div class="panel-body">
             @include('layouts.errors')
<div class="row">
		    <div class="col-md-6">
          <form method="POST" action="/guarantors">
               {{ csrf_field() }}
              <div class="form-group">
                  <label for="name_of_applicant">Name of Guarantor</label>
                  <input type="text" class="form-control" name="name_of_guarantor" required>
                </div>
                <div class="form-group">
                    <label for="fathers_name">Religion</label>
                    <input type="text" class="form-control" name="religion" required>
                  </div>
                     
                    <div class="form-group">
                    <label for="validationDefault04">Stage of Operation</label>
                    <input type="text" class="form-control" name="stage_of_operation" required>
                    </div>   

                    <div class="form-group">
                    <label for="validationDefault04">Mobile No.1</label>
                    <input type="text" class="form-control" name="mobile_no1" required>
                    </div>                            
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fathers_name">Relationship to Applicant</label>
                    <input type="text" class="form-control" name="relationship_to_applicant" required>
                  </div>
                  <div class="form-group">
                    <label for="fathers_name">Date of Birth</label>
                    <input type="text" class="form-control" name="date_of_birth" required>
                  </div>
                  <div class="form-group">
                  <label for="mothers_name">Residential Address</label>
                  <input type="text" class="form-control" name="residential_address" required>
                  </div>
                  
                  <div class="form-group">
                  <label for="validationDefault03">Mobile No.2</label>
                  <input type="text" class="form-control" name="mobile_no2" required>
                  </div>
                  <div class="form-group">
                    <label for="validationDefault05">Marital Status</label>
                    <input type="text" class="form-control" name="maritual_status" required>
                  </div> 
                  </div>

                  <div class="col-md-6">
                  <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-primary col-6 col-md-4">Save</button>
                </div>
                                 
<!-- </div>
<div class="row">
  <div class="col-md-6">
   <div class="form-group">
     <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
  </div>
  </div> -->
</div>				
  @endsection