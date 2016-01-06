	
<div class="form-group">
{!! Form::label('title', 'Title:') !!}
{!! Form::text('title', null, ['class' => 'form-control', 'foo' => 'bar']) !!}
</div>

<div class="form-group">
{!! Form::label('description', 'Description:') !!}
{!! Form::textarea('description', null, ['class' => 'form-control', 'foo' => 'bar']) !!}
</div>

<div class="form-group">
{!! Form::label('published_at', 'Publish On:') !!}
{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control', 'foo' => 'bar']) !!}
</div>


<div class="form-group">
{!! Form::label('tag_list', 'Tags:') !!}
{!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_select', 'class' => 'form-control', 'multiple']) !!}
</div>


<div class="form-group">
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')
	<script>

	$('#tag_select').select2();
	</script>
@stop