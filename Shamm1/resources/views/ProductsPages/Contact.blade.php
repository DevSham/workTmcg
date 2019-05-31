//includes the home contents in contact
@extends('ProductsPages.about')
@section('content')
<p>Contact Page</p>
<p>My name is me </p>
@if(count($people))
    @foreach($people as $person)
    <ul>
        <li>{{$person}}</li>
    </ul>
    @endforeach
@endif
@stop
@section('footer')
<script>alert("Hi"+there")</script>
@stop
