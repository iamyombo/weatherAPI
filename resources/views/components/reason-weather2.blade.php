<div class="w-128 mx-auto bg-gray-900 text-white text-sm rounded-lg overflow-hidden mt-5">
            <div class="weather-today flex items-center justify-between px-4 py-2">

                    <div class="flex items-center">
                        <div>

                            <div class="text-5xl font-semibold">{{ round($weatherReport['main']['temp']) }}&#176;C</div>
                            <div class="text-grey-400 mt-2">Feels like {{ $weatherReport['main']['feels_like'] }}&#176;C</div>
                        </div>
                        <div class="ml-10">
                            <div class="font-semibold text-lime-500">{{strtoupper(\carbon\carbon::createfromtimestamp($weatherReport['dt'])->format('D, F d Y')) }}</div>
                            <div class="font-semibold">{{ ucfirst($weatherReport['weather'][0]['description']) }}</div>
                            <div class="text-2xl text-amber-600 text-grey-400">{{ $weatherReport['name']}}, {{ $weatherReport['sys']['country']}} </div>
                        </div>
                    </div>
                    <div><img src="https://openweathermap.org/img/wn/{{ $weatherReport['weather'][0]['icon'] }}@4x.png" alt="{{ ucfirst($weatherReport['weather'][0]['description']) }}"></div>

            </div>
        </div>
