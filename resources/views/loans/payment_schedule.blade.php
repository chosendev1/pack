    @extends('layouts.master')
        @section ('content')
        @include('layouts.errors')      
            <div class="col-12">
                <div class="page-header">
                    <h1 class="page-title">
                    Loan Schedule
                    </h1>
                </div>

                <div class="card">
                  <div class="card-header">
                    <a href="loan-applications/register" class="nav-link">
                      <i class="fe fe-plus"></i>New Loan</a>
                  </div>
                <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Principal</th>
                                    <th>Interest</th>
                                    <th>Installment</th>
                                    <th>Balance</th>
                                </tr>
                            </thead>
                            <tbody>                               
                            @foreach($schedule as $installment)
                            <tr>
                            <th scope="row">{{ $installment['installment_number'] }}</th>
                                <td>{{ $installment['due_date'] }}</td>
                                <td>{{ $installment['principal'] }}</td>
                                <td>{{ $installment['interest'] }}</td>
                                <td>{{ $installment['installment'] }}</td>
                                <td>{{ $installment['balance'] }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>             
       @endsection
    
