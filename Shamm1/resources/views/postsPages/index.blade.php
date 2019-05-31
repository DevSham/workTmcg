@extends('postsPages.layout')
@section('content')
<h1>All Clients Page</h1>
<table><th>FirstName</th><th>SecondName</th><th>sex</th><th>amount</th>
    @foreach($entries as $entry)
    
    <tr><td>{{$entry->fname}}</td><td>{{$entry->sname}}</td><td>{{$entry->sex}}</td><td>{{$entry->amount}}<td></td><td><a href="{{ URL::route('posts.edit', $entry->id) }}">edit</a></td></tr>
    
    @endforeach 



@stop


@section('footer')
@stop