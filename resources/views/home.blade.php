@extends('layouts.main')

@section('content')



	<table class="table-striped table-hover">
		@foreach ($Res as $res)

			<tr>
				<td>{{$res->name}}</td>
				<td>{{$res->shortDes}}
					<tr><td></td><td>{{$res->address}}</td></tr>
					<tr><td></td><td>{{$res->phone}}</td></tr>
				</td>
				<td>{{$res->tag}}</td>
			</tr>
		@endforeach
	</table>
	
@endsection