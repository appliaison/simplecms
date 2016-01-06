@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
					<div class="panel-heading">{{ $channel->title }}</div>
					<div class="panel-body">
						{{ $channel->description }} 
					</div>
					<div class="panel-body">
					@unless ($channel->tags->isEmpty())
					@foreach ($channel->tags as $tag)
						<li>{{ $tag->name }}</li>
					@endforeach
					@endunless
					</div>
					<hr/>
					<a href="{{URL::action('ChannelController@edit', $channel->id)}}">Edit</a>
					<hr/>
					<a href="{{url('/')}}">Back to home</a>
					</div>
			</div>
		</div>
	</div>
</div>
@stop