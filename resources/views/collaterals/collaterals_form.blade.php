
    @extends('layouts.master')

        @section ('content')
        <div class="card">
          <div class="card-header">
            Collaterals For:
            <a href="#" class="nav-link">
              @foreach($customer as $applicant)
               {{ $applicant->name_of_applicant }}
              @endforeach            
            </a>
            Loan Product:
            <a href="#" class="nav-link">
            @foreach($loan_product as $loan_type)
                {{ $loan_type->product_name }}
              @endforeach
            </a>
            Loan Number:
            <a href="#" class="nav-link">
            @foreach($loan_product as $loan_type)
                {{ $loan_type->id }}
              @endforeach
            </a> 
          </div>
          <div class="card-body">
         @include('layouts.errors')
      
          <div class="row">
            <div class="col-lg-7">
                <div class="card-body">
                  <div class="small text-muted"><u>Registered</u></div>
                  <p>
                  <div class="table-responsive">
                    <table class="table card-table text-nowrap">
                    <thead>
                      <tr>
                          <th class="">Collateral Type</th>
                          <th class="text-center">Collateral Value</th>
                          <th class="">Collateral Location</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($collaterals as $collateral)
                      <tr>
                        <td>
                            {{ $collateral->collateral_type}}
                        </td>
                        <td class="text-center">
                            {{ $collateral->collateral_value }}
                        </td>
                        <td class="text-center">
                          {{ $collateral->collateral_location }}
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <hr>
                  </div>
                </div>
            </div>

            <div class="col-lg-5">
              <div class="card">
                <div class="card-body">
                  <div class="small text-muted"><u>Add New</u></div>
                  <p>
                    <div>
                        @if ($flash=session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ $flash }}
                            </div>
                        @endif 
                    </div>
                  <form method="POST" action="/collaterals">
                    {{ csrf_field() }}
                  <input type="hidden" name="loan_applications_id" value="{{ $loan['id'] }}" />
                  <div class="form-group">             
                      <label class="form-label" for="collateral_">Collateral Type</label>
                      <input type="text" name="collateral_type" class="form-control">
                  </div>
                  <div class="form-group">
                      <label class="form-label" for="collateral_">Collateral Value</label>
                      <input type="text" name="collateral_value"  class="form-control">
                  </div>
                  <div class="form-group">
                      <label class="form-label" for="collateral_">Collation Location</label>
                      <input type="text" name="collateral_location" rows="3" class="form-control">
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Save Collateral</button>
                  </div>
                 </form>
                </div>
              </div>
            </div>                             
          </div>
        </div>
      </div>
     @endsection
      


    
