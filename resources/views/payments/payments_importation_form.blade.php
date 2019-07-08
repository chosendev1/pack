@extends('layouts.master')
      
    @section ('content')

<div class="panel-heading">Import Payments</div>
<div class="col-sm-8">
        @if ($flash=session('message'))
            <div class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
        @endif 
        </div>
					<div class="panel-body">
             @include('layouts.errors')
  
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="/payments/importation" enctype="multipart/form-data"> 
        {{ csrf_field() }}
        <div class="form-group row">
          <label class="col-md-3 form-control-label">Upload File: </label>
          <div class="col-md-6">
            <input type="file" id="input-file-events" name ="payments_import_file" class="dropify-event"
            />
          </div>
        </div>
    </div>
   
    <div class="col-md-6">
    <div class="form-group">
    <button type="submit" class="btn btn-lg btn-primary col-6 col-md-4">Save</button>
    </div>
    </div>
    </div>
    </form>

</div>
</div>				
  @endsection
