@extends('app')
@section('content')
    <h1>Content</h1>
    <hr>
    @if (count ($articles)>0)
    @foreach($articles as $article)
    <h2><a href="{{action('ArticlesController@show',[$article->id])}}">{{$article->title}}</a></h2>
    <content>
        <div class="body">
            {{$article->content}}
        </div>

    </content>
    @endforeach
    @endif
@stop
