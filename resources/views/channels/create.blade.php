@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
					<div class="panel-heading">Create a new channel</div>
					<div class="panel-body">
					{!! Form::open(['url' => 'channels']) !!}

						@include('channels._form', ['submitButtonText' => 'Create Channel'])

					{!! Form::close() !!}

					@include ('errors._list')
					<a href="{{url('channels')}}">Back to list</a>
					</div>
			</div>
		</div>
	</div>
</div>
@stop