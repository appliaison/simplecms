@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
					<div class="panel-heading">Edit : {!! $tag->id !!}</div>
					<div class="panel-body">
						{!! Form::model($tag, ['method' => 'patch', 'action' => ['TagController@update', $tag->id]]) !!}

						@include('tags._form', ['submitButtonText' => 'Update Tag'])

						{!! Form::close() !!}


						@include ('errors._list')
						
						<hr/>
						<a href="{{url('tags')}}">Back to list</a>
					</div>
			</div>
		</div>
	</div>
</div>
@stop

