@extends('layouts/main')

@section('content')

<div class="jumbotron" style = "background-image: url('{{asset('images/'.$Res->pic)}}'); background-size: cover; height: 800px;">
	
	<h1 style = 'color: #c3c3c3;'>{{$Res->name}}</h2>
</div>



@endsection