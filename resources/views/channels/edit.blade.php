@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
					<div class="panel-heading">Edit : {!! $channel->id !!}</div>
					<div class="panel-body">
						{!! Form::model($channel, ['method' => 'patch', 'action' => ['ChannelController@update', $channel->id]]) !!}

						@include('channels._form', ['submitButtonText' => 'Update Channel'])

						{!! Form::close() !!}


						@include ('errors._list')
						
						<hr/>
						<a href="{{url('channels')}}">Back to list</a>
					</div>
			</div>
		</div>
	</div>
</div>
@stop

