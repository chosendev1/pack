
    @extends('layouts.master')
      
        @section ('content')
        @include('layouts.errors')   
            <div class="container-fluid">
                <div class="row">                                                     
                    <div class="col-12 col-xl-12 m-b-10">
                            <div class="bg-white padding-25 white-box h-100">
                                <h4 class="mt-0 box-title">Bordered table</h4>
                                <p class="text-muted m-b-20 box-content">
                                    Add the class <code>table-bordered</code> for borders on all sides of the table and cells
                                </p>
                                <div class="table-bordered">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Principal</th>
                                            <th>Interest</th>
                                            <th>Installment</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                           
                                        @foreach($schedule as $installment)
                                        <tr>
                                        <th scope="row">{{ $installment['installment_number'] }}</th>
                                            <td>{{ $installment['payment_date'] }}</td>
                                            <td>{{ $installment['principal'] }}</td>
                                            <td>{{ $installment['interest'] }}</td>
                                            <td>{{ $installment['installment'] }}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>             
       @endsection
    