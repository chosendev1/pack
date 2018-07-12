@extends('layouts.master')
      
    @section ('content')

<div class="panel-heading">Loan Application</div>
<div class="col-sm-8">
        @if ($flash=session('message'))
            <div class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
        @endif 
        </div>
					<div class="panel-body">
             @include('layouts.errors')
  
    <div class="col-md-12">
      <div class="form-group">
                  <label for="name_of_applicant">Loan Product</label>
                  <input type="text" class="form-control" name="loan_product_id" required>
      </div>
    </div>
   
		<div class="col-md-6">
          <form method="POST" action="/loan-application">
               {{ csrf_field() }}
              <div class="form-group">
                  <label for="name_of_applicant">Amount Applied</label>
                  <input type="text" class="form-control" name="amount_applied" required>
                </div>                            
                  <div class="form-group">
                    <label>Payment Frequency</label>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="w">Weeks
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="m">Months
                      </label>
                    </div>
                  </div>
                </div>             
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="mothers_name">Loan Period</label>
                  <input type="text" class="form-control" name="loan_period" required>
                  </div>
                  <div class="form-group">
                  <label for="mothers_name">Application Date</label>
                  <input type="text" class="form-control" name="application_date" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-primary col-6 col-md-4">Save</button>
                </div>
                </div>
                </div>
              </form>

</div>
</div>				
  @endsection