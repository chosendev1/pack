
    @extends('layouts.master')


      
        @section ('content')
        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Loan Applications</h2>
            
          </div><!-- /.blog-post -->
            
         @include('layouts.errors')
      
         
            <div class="row">
              
              <table class="table table-hover table-condensed table-bordered"> 
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Loan Product</th>
                    <th>Amount</th>
                    <th>Period</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $n=1; ?>
                  @foreach($loan_application as $loan)
                  <tr>
                    <td>{{ $n++}}</td>
                    <td>{{ $loan->customer !== null ? $loan->customer->first_name : 'No customer' }}</td>
                    <td>{{ $loan->loan_products !== null ? $loan->loan_products->product_name : 'No Product' }}</td>
                    <td>{{ $loan->amount }}</td>
                    <td>{{ $loan->period }}</td>
                    <td>{{ $loan->date }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            
            </div>
          
     @endsection
      


    