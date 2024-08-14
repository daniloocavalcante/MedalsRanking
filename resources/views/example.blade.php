<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Página Exemplo</title>

	<!-- Importando dependências -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
	
	<div class="container text-center">
		<p class="display-2">Medals Ranking</p>

		<hr>
		<a href="{{ route("index") }}" class="link-primary text-decoration-none">Medals Ranking</a> | 
		<a href="{{ route("about") }}" class="link-primary text-decoration-none">About</a>
		<hr>

		<table class="table table-hover table-striped">
		  <thead class="table-dark">
		    <tr>
		      <th scope="col">Ordem</th>
		      <th scope="col">IOC_Code</th>
		      <th scope="col">Equipe</th>
		      <th scope="col">Ouro</th>
		      <th scope="col">Prata</th>
		      <th scope="col">Bronze</th>
		      <th scope="col">Total</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@php $i=1; @endphp
		  	@foreach(json_decode($members) as $member => $value)
		  		<tr>
		  		<th scope="row">{{$i++}}</th>
		  		<td>{{$member}}</td>
		  		<td>{{$value->name}}</td>
		  		<td>{{$value->gold}}</td>
		  		<td>{{$value->silver}}</td>
		  		<td>{{$value->bronze}}</td>
		  		<td>{{$value->gold+$value->silver+$value->bronze}}</td>
		  		</tr>  	
		  	@endforeach

		  	<tr>
		  		<th scope="row">.</th>
		  		<td>.</td>
		  		<td>.</td>
		  		<td>.</td>
		  		<td>.</td>
		  		<td>.</td>
		  		<td>.</td>		  		
		  	</tr>		 	

		  </tbody>
		</table>


</body>
<html>