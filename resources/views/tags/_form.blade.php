	
<!-- Temporary -->
{!! Form::hidden('user_id', 1) !!}
<div class="form-group">
{!! Form::label('name', 'Name:') !!}
{!! Form::text('name', null, ['class' => 'form-control', 'foo' => 'bar']) !!}
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
{!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}
</div>



<div class="form-group">
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

