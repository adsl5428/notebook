@extends('app')
@section('content')
    <h1>新文章</h1>
    {!!Form::open(['url'=>'/articles'])!!}

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
    {!!Form::close()!!}

    @if($errors->any())
    <ul class="list-group">
    @foreach($errors->all() as $error)
        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
    @endforeach
    </ul>
    @endif
@stop