
    @extends('layouts.master')
      
        @section ('content')
        @include('layouts.errors')   
            <div class="container-fluid">
                <div class="row">                                                     
                    <div class="col-lg-12 col-xl-8 ml-xl-auto mr-xl-auto m-b-10">
                        <div class="bg-white padding-25 white-box h-100">
                            <h4 class="mt-0 box-title text-info text-uppercase">
                            Loan Applications
                            </h4>                                
                                @foreach($loan_applications as $loan)                           
                                    <div class="card-body text-center p-t-20">
                                    <hr>   
                                    <div class="btn-toolbar" role="toolbar" aria-label="Second group">
                                        
                                        <a href="/loan-applications/{{ $loan->id }}/approve">Approve</a>
                                        |<a href="/loan-applications/{{ $loan->id }}/disburse">Disburse</a>
                                        |<a href="/loan-applications/{{ $loan->id }}/pay">Payments</a>
                                        |<a href="/loan-applications/{{ $loan->id }}/reject">Reject</a>
                                        |<a href="/loan-applications/{{ $loan->id }}/reverse">Reverse</a>
                                        |<a href="/loan-applications/{{ $loan->id }}/edit">Edit</a>
                                    </div>
                                
                                    <br>
                                   
                                       <div class="text-left">
                                            <p class="text-muted fs-13">
                                                <strong>Applicant :</strong> 
                                                <span class="m-l-15 text-success text-uppercase">
                                                    {{ 
                                                        $loan->amount
                                                    }}                                         
                                                </span>
                                            </p>
                                            <p class="text-muted fs-13">
                                                <strong>Loan :</strong>
                                                <span class="m-l-15">
                                                {{ 
                                                    $loan->period
                                                }}
                                                </span>
                                            </p>
                                            <p class="text-muted fs-13">
                                                <strong>Email :</strong>
                                                <a href="mailto:#"> 
                                                    <span class="m-l-15">
                                                    {{ 
                                                        $loan->date
                                                    }}
                                                    </span>
                                                </a>
                                            </p>
                                            <p class="text-muted fs-13">
                                                <strong>Location :</strong>
                                                <span class="m-l-15">
                                                {{ 
                                                    $loan->date 
                                                }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>             
       @endsection
    