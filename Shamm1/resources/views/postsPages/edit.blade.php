@extends('postsPages.layout')
@section('content')
<h1>Update Page</h1>
<!-- when you add the id in the action laravel understands tht you are using the put method -->
<form method="POST" action= "/posts/{{$edit->id}}">
<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<label>First Name</label>
<input type ="text" name="fname" value="{{$edit->fname}}"><br/>
<label>Second Name</label>
<input type ="text" name="sname" value="{{$edit->sname}}"><br/>
<label>Sex</label>
<input type ="text" name="sex" value="{{$edit->sex}}"><br/>
<label>Deposit</label>
<input type ="text" name="amount" value="{{$edit->amount}}"><br/>
<input type ="submit" name="send" value="submit">
</form>
@stop
@section('footer')
@stop