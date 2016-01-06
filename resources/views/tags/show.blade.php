@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
					<div class="panel-heading">{{ $tag->name }}</div>
					<div class="panel-body">
						{{ $tag->description }} 
					<hr/>
					<a href="{{URL::action('TagController@edit', $tag->id)}}">Edit</a>
					<hr/>
					<a href="{{url('/')}}">Back to home</a>
					</div>
			</div>
		</div>
	</div>
</div>
@stop