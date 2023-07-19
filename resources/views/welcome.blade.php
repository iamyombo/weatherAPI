<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reason Digital - Weather API </title>


    @vite('resources/css/app.css')

</head>

<body class="min-h-screen bg-blue-200 bg-gradient-to-tr from-blue-200 to-blue-400">
    <div class="mt-8">
     <x-reason-weather :weatherReport="$weatherReport"></x-reason-weather>

    </div>
 @vite('resources/css/app.js')
</body>

</html>

