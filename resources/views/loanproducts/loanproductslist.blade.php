
    @extends('layouts.master')


      
        @section ('content')
        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Products</h2>
            
          </div><!-- /.blog-post -->
            
         @include('layouts.errors')
      
         
            <div class="row">
              
              <table class="table table-hover table-condensed table-bordered"> 
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Interest Method</th>
                    <th>Interest Rate</th>
                    <th>Penalty Rate</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $n=1; ?>
                  @foreach($loanproducts as $product)
                  <tr>
                    <td>{{ $n++}}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->interest_method }}</td>
                    <td>{{ $product->interest_rate }}</td>
                    <td>{{ $product->penalty_rate }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            
            </div>
          
     @endsection
      


    