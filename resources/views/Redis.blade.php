@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>set cache</h2>
            </div>
        </div>
    </div>

   {!! Form::open(array('route' => 'Cache.set' ,'method'=>'post')) !!}
    	@csrf

        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
		    <strong>Key Name:</strong>
		    <input type="text" name="key" class="form-control" placeholder="Name">
		</div>
	    </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>value:</strong>
                <input type="text" name="value" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>life time:</strong>
                <input type="number" name="life" class="form-control" placeholder="Name">
            </div>
        </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
	  <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
{!! Form::close() !!}

   
@endsection
