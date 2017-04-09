@extends('app')
@section('content')
    <h1>{{$articles->title}}</h1>
    <hr>
    <content>
        {{$articles->content}}
    </content>
@stop