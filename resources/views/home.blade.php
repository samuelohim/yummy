@extends('layouts.main')

@section('content')



	<div class="container-fluid" >
		<table class="table-striped table-hover" style = 'width: 100%;'>
			@foreach ($Res as $res)

				<tr>
					<td>
						<a href="home/{{$res->id}}"><img src="{{ asset('images/'.$res->pic) }}" alt="" style = 'width: 500px;  height: 388px;'/></a>
					</td>
					<td><b>{{$res->name}}</b> - {{$res->shortDes}}
						<br>{{$res->address}}
						<br>{{$res->phone}}
					</td>
					<td>{{$res->tag}}</td>
				</tr>
			@endforeach
		</table>
	</div>
	
@endsection