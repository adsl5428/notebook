<!--- title Field --->
<div class="form-group">
    {!! Form::label('title', 'title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<!--- content Field --->
<div class="form-group">
    {!! Form::label('content', 'content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('发表文章',['class'=>'btn btn-primary form-control']) !!}