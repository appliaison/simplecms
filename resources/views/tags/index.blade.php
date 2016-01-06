@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
				<div class="panel-heading">Tags</div>
				<div class="panel-body">
				@foreach ($tags as $tag)
					

							
						<p>{{$tag->name}} : {{$tag->description}} <a href="{{ url('/tags', $tag->id) }}">Edit</a></p>

						
					
				@endforeach
				<hr/>
				<a href="{{url('tags/create')}}">Create</a> 
				<hr/>
				<a href="{{url('/')}}">Back to home</a>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
