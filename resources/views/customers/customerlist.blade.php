
    @extends('layouts.master')
      
        @section ('content')
        
         @include('layouts.errors')
             
            <div class="container-fluid">
                <div class="row">                        
                                
                    <div class="col-lg-12 col-xl-8 ml-xl-auto mr-xl-auto m-b-10">
                        <div class="bg-white padding-25 white-box h-100">
                            <h4 class="mt-0 box-title text-info text-uppercase">Applicants</h4>
                                <hr>
                                    @foreach($customers as $customer)
                                       <div class="card-body text-center p-t-20">
                                           
                                            <div class="text-left">
                                                <p class="text-muted fs-13">
                                                    <strong>Applicant Name :</strong> 
                                                    <span class="m-l-15 text-success text-uppercase">
                                                        
                                                        {{ 
                                                            $customer->name_of_applicant
                                                        }}
                                                        
                                                    </span>
                                                </p>
                                                <p class="text-muted fs-13">
                                                    <strong>Mobile :</strong>
                                                    <span class="m-l-15">
                                                    {{ 
                                                        $customer->association_id_number
                                                    }}
                                                    </span>
                                                </p>
                                                <p class="text-muted fs-13">
                                                    <strong>Email :</strong>
                                                    <a href="mailto:#"> 
                                                        <span class="m-l-15">
                                                        {{ 
                                                        $customer->stage_of_operation 
                                                        }}
                                                        </span>
                                                    </a>
                                                </p>
                                                <p class="text-muted fs-13">
                                                    <strong>Location :</strong>
                                                    <span class="m-l-15">
                                                    {{ 
                                                        $customer->motor_cycle_no_plate 
                                                    }}
                                                    </span>
                                                </p>
                                            </div>
                                            <hr>
                                        </div>
                                        
                                    @endforeach
                        </div>
                    </div>
                 
                        
                </div>
            </div>
                    
     @endsection
    