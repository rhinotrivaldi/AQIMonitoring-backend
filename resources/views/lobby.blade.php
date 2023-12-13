<!doctype html>
<html lang="en">
  <head>

	<link rel="shortcut icon" href="{{ asset ('favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{ asset ('favicon.ico')}}" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#temp").load("{{ url('/1/temp')}}");
                $("#hum").load("{{ url('/1/hum')}}");
                $("#co").load("{{ url('/1/co')}}");
                $("#so2").load("{{ url('/1/so2')}}");
                $("#no2").load("{{ url('/1/no2')}}");
                $("#pm25").load("{{ url('/1/pm25')}}");
            }, 1000);
        });
    </script>
	
    
	<title>AQI - PLN Indonesia Power</title>
  </head>
  <body>
	<div class="container" style="margin-top: 40px">
		<div class="row justify-content-end">
			<div class="col-md-auto">
				<img src="{{ asset('img/bumn.svg') }}" style="width: 150px" alt="">
			</div>
			<div class="col-md-auto">
				<img src="{{ asset('img/plnip.png') }}" style="width: 150px" alt="">
			</div>
			<div class="col-md-auto">
				<img src="{{ asset('img/its.png') }}" style="width: 100px" alt="">
			</div>
			<div class="col-md-auto">
				<img src="{{ asset('img/cogindo.png') }}" style="width: 150px" alt="">
			</div>
		</div>
	</div>
	
	<div class="container" style="text-align: center; margin-bottom: 24px; margin-top:20px">
		<h1>Monitoring Air Quality Index</h1>
		<h3>PLTU Banten 3 Lontar POMU - LOBBY UTAMA</h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-4">
				<div class="card">
					<div class="card-header text-center">
						Temperature
					</div>
					<div class="card-body text-center">
						<h4 class="card-title"><span id="temp">0</span>
							<span style="font-size: 8px; vertical-align: top">°C</span></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="card">
					<div class="card-header text-center">
						Humidity
					</div>
					<div class="card-body text-center">
						<h4 class="card-title"><span id="hum">0</span> 
							<span style="font-size: 8px; vertical-align: top">%</span></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="card">
					<div class="card-header text-center">
						CO
					</div>
					<div class="card-body text-center">
						<h4 class="card-title"><span id="co">0</span>
							<span style="font-size: 8px; vertical-align: top">ppm</span></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="card">
					<div class="card-header text-center">
						NO2
					</div>
					<div class="card-body text-center">
						<h4 class="card-title"><span id="no2">0</span>
							<span style="font-size: 8px; vertical-align: top">ppb</span></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="card">
					<div class="card-header text-center">
						SO2
					</div>
					<div class="card-body text-center">
						<h4 class="card-title"><span id="so2">0</span>
							<span style="font-size: 8px; vertical-align: top">ppb</span></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="card">
					<div class="card-header text-center">
						PM2.5
					</div>
					<div class="card-body text-center">
						<h4 class="card-title"><span id="pm25">0</span>
							<span style="font-size: 8px; vertical-align: top">ug/m3</span></h4>
					</div>
				</div>
			</div>
            <div class="row">
				<div class="col-md-12 mb-4">
					<a href="/" class="btn btn-primary">
						<i class="fas fa-arrow-left"></i> Kembali
					</a>
					<a href="/pos1" class="btn btn-primary">
						<i class="fas fa-arrow-left"></i> Pos 1
					</a>
				</div>
			</div>
		</div>
		
		</div>
	</div>	
  </body>
</html>