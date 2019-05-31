@extends('postsPages.layout')
@section('content')
<h1>Cash deposit Page</h1>
<table>
<form method="POST" action= "/posts">
@csrf
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<label>First Name</label>
<input type ="text" name="fname" ><br/><br/>
<label>Second Name</label>
<input type ="text" name="sname"><br/><br/>
<label>Sex</label>
<input type ="text" name="sex"><br/><br/>
<label>Deposit</label>
<input type ="text" name="amount"><br/><br/>
<input type ="submit" name="send" value="submit">
</table>
</form>
@stop
@section('footer')
@stop