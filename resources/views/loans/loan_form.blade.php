
    @extends('layouts.master')

        @section ('content')
        @include('layouts.errors')

        <div class="col-12">
          <div class="page-header">
            <h1 class="page-title">
                Loan Application
            </h1>
          </div>
          <div class="card">
                <div class="card-header">
                    <a href="#" class="nav-link">
                      Application for {{ $customer['name_of_applicant'] }}
                    </a>
                </div>
                <div class="card-body">
                  <div class="small text-muted">
                    <i class="fe fe-plus"></i>
                    <u>Add New Loan</u>
                  </div>
                  <p>
                        @if ($flash=session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ $flash }}
                            </div>
                        @endif 
                  </p>
                  <form method="POST" action="/loan-applications/apply">
                    {{ csrf_field() }}
                  <input type="hidden" name="customers_id" value="{{ $customer['id'] }}" />
                  <div class="row">
                  <div class="col-md-3">
                  <label for="loan_product">Loan Product</label>
                  <select class="form-control" name="loan_products_id" id="loan_product_id">
                    @foreach($loan_products as $product)
                      <option value={{ $product->id }}>
                        {{ $product->product_name }}
                      </option>
                    @endforeach
                  </select>
                  </div>
                  <div class="col-md-3">
                    <label for="amount_applied">Amount Applied</label>
                    <input type="text" class="form-control" name="amount" required>
                  </div>
                  <div class="col-md-3">
                  <label for="loan_period">Loan Period In {frequency}</label>
                  <input type="text" class="form-control" name="period" required>
                  </div>
                  <div class="col-md-3">
                  <label for="application_date">Application Date</label>
                  <input type="date" class="form-control" name="date" required>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">
                    Save Loan
                    </button>
                  </div>
                </div>
                 </form>
                </div>
              </div>
    </div>
     @endsection
      


    
