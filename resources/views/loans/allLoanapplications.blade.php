
    @extends('layouts.master')
      
        @section ('content')
        @include('layouts.errors')  

        <div class="col-12">
              <div class="page-header">
              <h1 class="page-title">
                Loan Applications
              </h1>
              </div>

                <div class="card">
                  <div class="card-header">
                    <a href="loan-applications/register" class="nav-link">
                      <i class="fe fe-plus"></i>Add New</a>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">No.</th>
                          <th>Invoice Subject</th>
                          <th>Client</th>
                          <th>VAT No.</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th colspan="3">Take Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($loan_applications as $loan)
                        <tr>
                          <td><span class="text-muted">001401</span></td>
                          <td><a href="invoice.html" class="text-inherit">Design Works</a></td>
                          <td>
                            {{ $loan->amount }}
                          </td>
                          <td>
                            {{ $loan->period }}
                          </td>
                          <td>
                            {{ $loan->date }}
                          </td>
                          <td>
                            <span class="status-icon bg-success"></span> Paid
                          </td>
                          <td>{{ $loan->amount }}</td>
                          <td>
                            <div class="row">
                                <div class="col-6 col-md-3">
                                  <ul class="list-unstyled mb-0">
                                    <li><small><a href="#" class="text-inherit">Edit</a></small></li>
                                    <li><small><a href="#" class="text-inherit">Collateral</a></small></li>
                                    <li><small><a href="#" class="text-inherit">Reject</a></small></li>
                                  </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                  <ul class="list-unstyled mb-0">
                                    <li><small><a href="#" class="text-inherit">Approve</a></small></li>
                                    <li><small><a href="#" class="text-inherit">Disapprove</a></small></li>
                                    <li><small><a href="#" class="text-inherit">Schedule</a></small></li>
                                  </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                  <ul class="list-unstyled mb-0">
                                    <li><small><a href="#" class="text-inherit">Disburse</a></small></li>
                                    <li><small><a href="#" class="text-inherit">Reverse Disbursement</a></small></li>
                                    <li><small><a href="#" class="text-inherit">Payment</a></small></li>
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
       @endsection
    