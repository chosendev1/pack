@extends('layouts.master')
      
    @section ('content')
    
      <div class="card">
          <div class="card-header">
            Guarantors For:
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
            <div class="row">
              <div class="col-md-8">
                @include('layouts.errors')
              <form class="card" method="POST" action="/guarantors">
                   {{ csrf_field() }}
                <input type="hidden" name="loan_applications_id" value="{{ $loan['id'] }}" />
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
                          <label class="form-label">Name of Guarantor</label>
                          <input type="text" class="form-control" name="name_of_guarantor" required>
                        </div>
                      </div>
                      <div class="col-sm-8 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Relationship to Applicant</label>
                          <input type="text" name="relationship_to_applicant" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-sm-9 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Gender</label>
                          <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                              <input type="radio" name="gender" value="Male" class="selectgroup-input" required>
                              <span class="selectgroup-button">Male</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="gender" value="Female" class="selectgroup-input">
                              <span class="selectgroup-button">Female</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Date of Birth</label>
                          <input type="date" class="form-control" name="date_of_birth" required>
                        </div>
                      </div>
                      <div class="col-sm-8 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Nationality</label>
                          <input type="text" class="form-control" name="nationality" required>
                        </div>
                      </div>
                      <div class="col-sm-8 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Religion</label>
                          <input type="text" class="form-control" name="religion" required>
                        </div>
                      </div>
                      <div class="col-sm-8 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Marital Status</label>
                          <select class="form-control" name="marital_status" required>
                            <option value="">--Choose--</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widow">Widow</option>
                            <option value="widower">Widoer</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-8 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Residential Address</label>
                          <input type="text" class="form-control" name="residential_address" required>
                        </div>
                      </div>
                      <div class="col-sm-8 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Stage of Operation</label>
                          <input type="text" class="form-control" name="stage_of_operation" required>
                        </div>
                      </div>
                      <div class="col-sm-8 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Mobile No.1</label>
                          <input type="text" class="form-control" id="mobile_no1" name="mobile_no1" required>
                        </div>
                      </div>
                      <div class="col-sm-8 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Mobile No.2</label>
                          <input type="text" class="form-control" id="mobile_no2" name="mobile_no2">
                        </div>
                      </div>
                      <div class="col-sm-8 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Email Address</label>
                          <input type="text" class="form-control" name="email_address">
                        </div>
                      </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Save Guarantor</button>
                  </div>
                </div>
                </form>
              </div>
             
              <div class="col-md-4">
                          <div class="small text-muted"><u>Registered</u></div>
                          <p>
                          <div class="table-responsive">
                          <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                          <tbody>
                            @foreach($guarantors as $guarantor)
                          <tr>
                            <td>
                              <div>
                                <a href="javascript:void(0)" class="text-inherit">
                                  {{ $guarantor->name_of_guarantor }}
                                </a>
                              </div>
                              <div class="small text-muted">
                                  {{ $guarantor->relationship_to_applicant }}
                              </div>
                              <div class="small text-muted">
                                  {{ $guarantor->gender }}
                              </div>
                              <div class="small text-muted">
                                  {{ $guarantor->mobile_no1 }}
                              </div>
                              <div class="small text-muted">
                                  {{ $guarantor->mobile_no2 }}
                              </div>
                              </td>
                          </tr>
                            @endforeach
                          <tr><td></td><tr>
                        </tbody>
                      </table>
                    </div>
                   
              </div>
              </div>
          </div>
            </div>
             	
  @endsection
