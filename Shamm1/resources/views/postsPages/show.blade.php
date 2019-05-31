@extends('postsPages.layout')
@section('content')
<h1>Show specific user</h1>

<p>Hi {{$specific->fname}} you have deposited shs{{$specific->amount}}</p>
<p>Thanks for banking with us</p>



@stop
@section('footer')
@stop