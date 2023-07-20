<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reason Digital - Weather API </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyD86_XmucSzPwyxOZmVJqEP9d3M14BSW08&libraries=places"></script>
</head>

<body class="min-h-screen bg-blue-200 bg-gradient-to-tr from-blue-200 to-blue-400">
    <div class="mt-8">
     <x-reason-weather :weatherReport="$weatherReport"></x-reason-weather>

    </div>


 @vite('resources/css/app.js')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{-- javascript code --}}
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDo5MtIYqbEn0DEwpG5E1QDWe67MLpfJmA&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
<script>
$(document).ready(function() {
$("#lat_area").addClass("d-none");
$("#long_area").addClass("d-none");
});
</script>
<script>
google.maps.event.addDomListener(window, 'load', initialize);
function initialize() {
var input = document.getElementById('autocomplete');
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.addListener('place_changed', function() {
var place = autocomplete.getPlace();
$('#latitude').val(place.geometry['location'].lat());
$('#longitude').val(place.geometry['location'].lng());
// --------- show lat and long ---------------
$("#lat_area").removeClass("d-none");
$("#long_area").removeClass("d-none");
});
}
</script>
</body>

</html>
