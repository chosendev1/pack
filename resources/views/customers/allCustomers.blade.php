
    @extends('layouts.master')
      
        @section ('content')
        
         @include('layouts.errors')
            <div class="col-12">
              <div class="page-header">
              <h1 class="page-title">
                Customers
              </h1>
              </div>
                <div class="card">
                <div class="card-header">
                    <a href="customers/register" class="nav-link">
                      <i class="fe fe-plus"></i>Add New</a>
                </div>
                <div class="card-body">
                  <div class="col-md-12">
                        @if ($flash=session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ $flash }}
                            </div>
                        @endif 
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                      {{-- <thead>
                        <tr>
                          <th class="text-center w-1"><i class="icon-people"></i></th>
                          <th></th>
                          <th>Usage</th>
                          <th class="text-center">Payment</th>
                          <th></th>
                          <th class="text-center">Satisfaction</th>
                          <th>Actions</th>
                          <th class="text-center"><i class="icon-settings"></i></th>
                        </tr>
                      </thead> --}}
                      <tbody>
                      @foreach($customers as $customer)
                        <tr>
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url(demo/faces/female/26.jpg)">
                              <span class="avatar-status bg-green"></span>
                            </div>
                          </td>
                          <td>
                            <div><a href="javascript:void(0)" class="text-inherit">
                                {{ $customer->name_of_applicant }}</a>
                            </div>
                            <div class="small text-muted">
                              {{ $customer->member_number }}
                            </div>
                          </td>
                          <td class="text-center">
                              <div class="text-muted">
                              {{ $customer->mobile_no1 }}
                              </div>
                              <div class="text-muted">
                              {{ $customer->mobile_no2 }}
                              </div>
                          </td>
                          <td>
                            <div class="small text-muted">Guarantors</div>
                            <div>0</div>
                          </td>
                          <td>
                            <div class="small text-muted">Registered</div>
                            <div>{{ $customer->created_at }}</div>
                          </td>
                          <td class="text-center">
                            {{-- <div class="mx-auto chart-circle chart-circle-xs" data-value="0.42" data-thickness="3" data-color="blue"> --}}
                              <div class="small text-muted">Loans</div>
                              <div>2</div>
                          </td>
                          <td>
                            <div class="col-6 col-md-3">
                              <ul class="list-unstyled mb-0">
                                <li><div class="small text-muted"><u>Links</u></div></li>
                                <li><small><a href="/guarantors/{{ $customer->id }}/register" class="text-inherit">Guarantors</a>
                                </small></li>
                                <li><small>
                                      <a href="/loan-applications/{{ $customer->id }}/apply" 
                                        class="text-inherit">
                                        Apply for Loan
                                      </a>
                                </small></li>
                                <li><small><a href="customers/{{ $customer->id }}" class="text-inherit">Profile</a>
                                </small></li>
                              </ul>
                            </div>
                          </td>
                          <td class="text-center">
                            <div class="item-action dropdown">
                              <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
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
