<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setInterval(function () {
                $("#temp").load("{{ url('/temp')}}");
                $("#hum").load("{{ url('/hum')}}");
                $("#co").load("{{ url('/co')}}");
                $("#so2").load("{{ url('/so2')}}");
                $("#no2").load("{{ url('/no2')}}");
                $("#pm25").load("{{ url('/pm25')}}");
            }, 1000);
        });
    </script>

    <title>AQI - PLN Indonesia Power</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="flex justify-end">
            <div class="md:w-1/6">
                <img src="{{ asset('img/bumn.svg') }}" class="w-24" alt="">
            </div>
            <div class="md:w-1/6">
                <img src="{{ asset('img/plnip.png') }}" class="w-24" alt="">
            </div>
        </div>
    </div>

    <div class="container mx-auto text-center mb-24 mt-20">
        <h1 class="text-3xl font-bold">Monitoring Air Quality Index</h1>
        <h3 class="text-xl">PLTU Banten 3 Lontar POMU</h3>
    </div>

    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="md:w-1/3 mb-4 px-4">
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-center font-semibold">
                        Temperature
                    </div>
                    <div class="text-center">
                        <h4 class="text-2xl"><span id="temp">0</span><span class="text-xs">°C</span></h4>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 mb-4 px-4">
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-center font-semibold">
                        Humidity
                    </div>
                    <div class="text-center">
                        <h4 class="text-2xl"><span id="hum">0</span><span class="text-xs">%</span></h4>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 mb-4 px-4">
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-center font-semibold">
                        CO
                    </div>
                    <div class="text-center">
                        <h4 class="text-2xl"><span id="co">0</span><span class="text-xs">ppm</span></h4>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 mb-4 px-4">
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-center font-semibold">
                        NO2
                    </div>
                    <div class="text-center">
                        <h4 class="text-2xl"><span id="no2">0</span><span class="text-xs">ppb</span></h4>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 mb-4 px-4">
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-center font-semibold">
                        SO2
                    </div>
                    <div class="text-center">
                        <h4 class="text-2xl"><span id="so2">0</span><span class="text-xs">ppb</span></h4>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 mb-4 px-4">
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-center font-semibold">
                        PM2.5
                    </div>
                    <div class="text-center">
                        <h4 class="text-2xl"><span id="pm25">0</span><span class="text-xs">ug/m3</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
