
    @extends('layouts.master')

        @section ('content')
        <div class="card">
          <div class="card-header">
            Loan Products
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
                          <th class="">Product</th>
                          <th class="text-center">Interest Rate</th>
                          <th class="text-right">Interest Penalty</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($loanproducts as $product)
                      <tr>
                        <td>
                          <p class="text-black">
                            {{ $product->product_name }}
                          </p>
                          <p class="small hint-text">
                            {{ $product->payment_frequency }}
                          </p>
                        </td>
                        <td class="text-center">
                          {{ $product->interest_rate }}
                        </td>
                        <td class="text-right">
                          {{ $product->penalty_rate }}
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
                  <form method="POST" action="/loan-products">
                    {{ csrf_field() }}
                  <div class="form-group">             
                      <label class="form-label" for="productName">Product Name</label>
                      <input type="text" name="product_name" class="form-control">
                  </div>
                  <div class="form-group">             
                    <label class="form-label" for="frequency">Repayment Frequency</label>
                    <select class="form-control" name="payment_frequency">
                    <option value="">--Choose--</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label class="form-label" for="interestMethod">Interest Method</label>
                      <select class="form-control" name="interest_method" id="interestMethod">
                      <option value="">--Choose--</option>
                      <option value="flat">Flat</option>
                      <option value="declining">Declining Balance</option>
                      <option value="amortised">Amortised</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label class="form-label" for="interestRate">Interest Rate</label>
                      <input type="text" name="interest_rate"  class="form-control">
                  </div>
                  <div class="form-group">
                      <label class="form-label" for="penaltyRate">Penalty Rate</label>
                      <input type="text" name="penalty_rate" rows="3" class="form-control">
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Save Product</button>
                  </div>
                 </form>
                </div>
              </div>
            </div>                             
          </div>
        </div>
      </div>
     @endsection
      


    
