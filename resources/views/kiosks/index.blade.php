@extends('layouts.app')
<!--Author @ Brandon LaGorga-->
@section('content')
    <h1>Kiosks in the area</h1>
    <div id="map"></div>
    @for ($i = 0; $i < count($kiosks); $i++)
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
    @endfor
    <h2>Kiosks Locations</h2>

    <table class="table">
        <thead>
        <tr>
            <th>Location</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < count($kiosks); $i++)
                <tr>
                    <td><a href="http://csc407dev.com/kiosks/{{ $kiosks[$i]['id'] }}">
                            <div style="height:100%;width:100%">
                                {{$kiosks[$i]['location']}}
                            </div>
                        </a></td>
                    <td>{{ $kiosks[$i]['address'] }}</td>
                </tr>
        @endfor
        </tbody>
    </table>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqdeXvndAAQ6Jk6SIqy1z-dmxoAZ3HlRw&callback=initMap">
    </script>
@endsection
