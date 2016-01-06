@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
				<div class="panel-heading">Channels</div>
				<div class="panel-body">
				@foreach ($channels as $channel)
					

							
						<p><a href="{{ url('/channels', $channel->id) }}">{{ $channel->title }}</a></p>

						<p>{{ $channel->description }}</p>
											
						@unless ($channel->tags->isEmpty())
						<p>Tags : 
							@foreach ($channel->tags as $tag)
							| {{ $tag->name }} |
							@endforeach
						</p>
						@endunless
						
						<hr/>
					
				@endforeach
				<a href="{{url('channels/create')}}">Create</a> 
				<hr/>
				<a href="{{url('/')}}">Back to home</a>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
