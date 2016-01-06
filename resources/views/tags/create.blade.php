@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
					<div class="panel-heading">Create a new tag</div>
					<div class="panel-body">
					{!! Form::open(['url' => 'tags']) !!}

						@include('tags._form', ['submitButtonText' => 'Create Tag'])

					{!! Form::close() !!}

					@include ('errors._list')
					<a href="{{url('channels')}}">Back to list</a>
					</div>
			</div>
		</div>
	</div>
</div>
@stop