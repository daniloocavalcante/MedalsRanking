<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Página Principal</title>

	<!-- Importando dependências accept-charset="utf-8" -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
	
	<div class="container text-center">
		<p class="display-2">Medals Ranking</p>
		<hr>
		<a href="{{ route("index") }}" class="link-primary text-decoration-none">Medals Ranking</a> | 
		<a href="{{ route("about") }}" class="link-primary text-decoration-none">About</a>
		<hr>

		<p class="fs-4">Insira os dados JSON:</p>		

		<div class="d-inline">
            <form action="{{ route("rank") }}" method="post" accept-charset="utf-8">
            @csrf

            <div class="form-floating mb-1">            
                <textarea class="form-control" placeholder="Insert you JSON input"
                        id="textarea1" name="json_input" style="height: 100px">
                        {"name": "Medal Tables","game": "Olympic Game","members": {"BRA": {"name": "Brasil","gold": 1,"silver": 4,"bronze": 4,"last_gold_at": "2024-07-29 16:02:18","last_silver_at": "2024-08-02 16:04:18","last_bronze_at": "2024-08-03 16:02:18"},"USA": {"name": "Estados Unidos","gold": 1,"silver": 4,"bronze": 4,"last_gold_at": "2024-07-29 16:02:18","last_silver_at": "2024-08-02 16:50:18","last_bronze_at": "2024-08-01 16:30:18"},"FRA": {"name": "França","gold": 5,"silver": 1,"bronze": 2,"last_gold_at": "2024-07-30 16:00:18","last_silver_at": "2024-07-30 16:09:18","last_bronze_at": "2024-07-30 16:21:18"},"CAN": {"name": "Canadá","gold": 3,"silver": 1,"bronze": 0,"last_gold_at": "2024-07-31 16:00:18","last_silver_at": "2024-07-31 16:02:18","last_bronze_at": "2024-07-31 16:22:18"},"CHN": {"name": "China","gold": 1,"silver": 4,"bronze": 4,"last_gold_at": "2024-08-03 16:00:18","last_silver_at": "2024-08-01 16:02:18","last_bronze_at": "2024-08-01 16:22:18"}}}
                </textarea>
            </div>

			<button class="btn btn-sm btn-success my-3" type="submit"><i class="fa-solid fa-check"></i><span class="px-1">Rank Now</span></button>

			<button class="btn btn-sm btn-dark my-1" type="button" id="JSONInPrettyFormat"><i class="fa-solid fa-file-code"></i><span class="px-1">JSON Beauty</span></button>

            </form>
		</div>

		<hr>
		<p class="fs-4">JSON Output:</p>

		<div class="d-inline">
            <form action="{{ route("example") }}" method="post" accept-charset="utf-8">
            @csrf

            <div class="form-floating mb-2">            
            <textarea class="form-control" name="json_output" placeholder="JSON output"
                        id="textarea2" style="height: 150px">{{ @$output }}</textarea>
            </div>

			<button class="btn btn-sm btn-primary my-3" id="copytoclip" type="button"><i class="fa-solid fa-copy"></i><span class="px-1">Copy</span></button>   

			<button class="btn btn-sm btn-dark my-1" type="button" id="JSONInPrettyFormat2"><i class="fa-solid fa-file-code"></i><span class="px-1">JSON Beauty</span></button>

            <button class="btn btn-sm btn-success my-3" type="submit"><i class="fa-solid fa-table"></i><span class="px-1">Example</span></button>       
            </form>
		</div>

		</form>

</body>
<html>