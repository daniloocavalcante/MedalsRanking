<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Página Principal</title>

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

		<p> 
			<p class="display-5">What is it ?</p>

		My code is responsible for organizing a medal ranking of olympic games. <br>

		The correct way to organize is by the number of gold, silver and the bronze medals. <br>

		Basically, you must insert a json aleatory input and click in the button Rank Now. <br>
		And the code does the magic.
		</p>


</body>
<html>