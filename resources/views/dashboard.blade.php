<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('LOBBY UTAMA') }}
        </h2>
    </x-slot>

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

    <div class="container mx-auto text-center mb-8 mt-8">
        <h1 class="text-3xl font-bold">Monitoring Air Quality Index</h1>
        <h3 class="text-xl">PLTU Banten 3 Lontar POMU</h3>
    </div>

    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <!-- Your existing card components go here with Blade syntax -->
            <!-- Example for Temperature -->
            <div class="md:w-1/3 mb-4 px-4">
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-center font-semibold">
                        Temperature
                    </div>
                    <div class="text-center">
                        <h4 class="text-2xl"><span id="temp1">0</span><span class="text-xs">°C</span></h4>
                    </div>
                </div>
            </div>
            <!-- Repeat the structure for other cards with unique IDs -->
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                setInterval(function () {
                    $("#temp1").load("{{ url('/temp')}}");
                    $("#hum").load("{{ url('/hum')}}");
                    $("#co").load("{{ url('/co')}}");
                    $("#so2").load("{{ url('/so2')}}");
                    $("#no2").load("{{ url('/no2')}}");
                    $("#pm25").load("{{ url('/pm25')}}");
                }, 1000);
            });
        </script>
    @endpush
</x-app-layout>
