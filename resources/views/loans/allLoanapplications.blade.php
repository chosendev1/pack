
    @extends('layouts.master')
      
        @section ('content')
        @include('layouts.errors')
        @include('loans.actions.actions') 

        <div class="col-12">
              <div class="page-header">
              <h1 class="page-title">
                Loan Applications
              </h1>
              </div>

                <div class="card">
                  {{-- <div class="card-header"> --}}
                    {{-- <a href="loan-applications/register" class="nav-link">
                      <i class="fe fe-plus"></i>New Loan</a>
                  </div> --}}
                  <div class="card-body">
                  <div>
                        @if ($flash=session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ $flash }}
                            </div>
                        @endif 
                  </div>
                    
                  <div class="table-responsive">
                    <table class="table card-table table-hover table-vcenter text-nowrap"
                    >
                      <thead>
                        <tr>
                          <th class="w-1">Customer</th>
                          <th>Loan</th>                          
                          <th>Arrears</th>
                          <th>Balance</th>
                          <th colspan="5">Take Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($loan_applications as $loan)
                        <tr>
                          <td>
                            <span class="text-inherit">
                              {{ $loan->customers->name_of_applicant }}
                            </span>
                            <br>
                            <span class="small text-muted">
                              {{ $loan->customers->member_number }}
                            </span>
                            <br>
                            <span class="small text-muted">
                              {{ $loan->customers->mobile_no1 }}
                            </span>
                            <br>
                            <span class="small text-muted">
                              {{ $loan->customers->mobile_no2 }}
                            </span>
                          </td>
                          <td>
                            <span class="text-inherit">
                              {{ $loan->loan_products->product_name }}
                            </span>
                            <br>
                            <span class="text-inherit">
                              {{ $loan->amount }}
                            </span>
                            <br>
                            <span class="small text-muted">
                              {{ $loan->period }} {Frequency}
                            </span>
                            <br>
                            <span class="small text-muted">
                              {{ $loan->date }}
                            </span>
                          </td>
                          <!-- <td>
                            <span class="status-icon bg-success"></span> Paid
                          </td> -->
                          <td>
                            <span class="small text-muted">
                              Principal:{{ $loan->amount }}
                            </span>
                            <br>
                            <span class="small text-muted">
                              Interest:{{ $loan->amount }}
                            </span>
                            <br>
                            <span class="small text-muted">
                              Penalty:{{ $loan->amount }}
                            </span>
                            <br>
                            <span class="small text-muted">
                              Total:{{ $loan->amount }}
                            </span>
                          </td>
                          <td>
                            <span class="small text-muted">
                              Principal:{{ $loan->amount }}
                            </span>
                            <br>
                            <span class="small text-muted">
                              Interest:{{ $loan->amount }}
                            </span>
                            <br>
                            <span class="small text-muted">
                              Penalty:{{ $loan->amount }}
                            </span>
                            <br>
                            <span class="small text-muted">
                              Total:{{ $loan->amount }}
                            </span>
                          </td>
                          <td>
                            <div class="row">
                                <div class="col-md-4">
                                  <ul class="list-unstyled mb-0">
                                    <li><small><a href="#" class="text-inherit">Edit</a></small></li>
                                    <li><small><a href="/collaterals/{{ $loan->id }}/register" class="text-inherit">Collaterals</a></small></li>
                                    <li><small><a href="#" class="text-inherit">Reject</a></small></li>
                                    <li><small><a href="/guarantors/{{ $loan->id }}/register" class="text-inherit">Guarantors</a></small></li>
                                  </ul>
                                </div>
                                <div class="col-6 col-md-4">
                                  <ul class="list-unstyled mb-0">
                                    <li><small><a href="#" class="text-inherit" data-toggle="modal" data-target="#approvalModal">Approve</small></li>
                                    <li><small><a href="#" class="text-inherit">Disapprove</a></small></li>
                                    <li><small><a href="#" class="text-inherit">Disburse</a></small></li>
                                    <li><small><a href="#" class="text-inherit">Reverse Disbursement</a></small></li>
                                    
                                  </ul>
                                </div>
                                <div class="col-6 col-md-4">
                                  <ul class="list-unstyled mb-0">
                                    <li><small><a href="/payments/{{ $loan->id }}/register" class="text-inherit">Payments</a></small></li>
                                    <li><small><a href="#" class="text-inherit">Loan Ledger</a></small></li>
                                    <li><small>
                              <a href="/loan-applications/{{ $loan->id }}/{{ $loan->loan_products_id }}/schedule" class="text-inherit">Schedule</a></small></li>
                                  </ul>
                                </div>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
       @endsection
    
