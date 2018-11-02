@extends('layouts.app')

@section('content')
    <h1>Kiosks List</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Location</th>
            <th>Address</th>
            <th>Total Movies</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kiosks as $kiosks)

            <tr>
                <td>{{ $kiosks['location'] }}</td>
                <td>{{ $kiosks['address'] }}</td>
            </tr>

        @endforeach
        </tbody>
    </table>
    <h3>Kiosks Locations</h3>
    <div id="map"></div>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of beaverfalls
            var beaverfalls = {lat: 40.753581, lng:-80.319806};
            // The map, centered at beaverfalls
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 14, center: beaverfalls});
            // The marker, positioned at beaverfalls
            var marker = new google.maps.Marker({position: beaverfalls, map: map});
        }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqdeXvndAAQ6Jk6SIqy1z-dmxoAZ3HlRw&callback=initMap">
    </script>
@endsection
