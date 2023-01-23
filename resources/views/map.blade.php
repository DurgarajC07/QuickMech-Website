@extends('layouts.app-master')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .text-center {
                text-align: center;
            }
            #map {
                width: "100%";
                height: 400px;
            }
        </style>
    </head>
    <body><br>
        <h1 class="text-center">Workshop Google Maps</h1><br>
        <div id="map"></div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAi7mA2m-cx43pbWrQ4NfqFJXeX3pL0WF4&callback=initMap" async></script>
        <script>
            let map, activeInfoWindow, markers = [];

            /* ----------------------------- Initialize Map ----------------------------- */
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: {
                        lat: 19.036572,
                        lng: 73.077424
                    },
                    zoom: 15
                });

                map.addListener("click", function(event) {
                    mapClicked(event);
                });

                initMarkers();
            }

            /* --------------------------- Initialize Markers --------------------------- */
            function initMarkers() {
                const initialMarkers = <?php echo json_encode($initialMarkers); ?>;

                for (let index = 0; index < initialMarkers.length; index++) {

                    const markerData = initialMarkers[index];
                    const marker = new google.maps.Marker({
                        position: markerData.position,
                        label: markerData.label,
                        draggable: markerData.draggable,
                        map
                    });
                    markers.push(marker);

                    const infowindow = new google.maps.InfoWindow({
                        content: `<b>${markerData.position.lat}, ${markerData.position.lng}</b>`,
                    });
                    marker.addListener("click", (event) => {
                        if(activeInfoWindow) {
                            activeInfoWindow.close();
                        }
                        infowindow.open({
                            anchor: marker,
                            shouldFocus: false,
                            map
                        });
                        activeInfoWindow = infowindow;
                        markerClicked(markerData, index);
                    });

                    marker.addListener("dragend", (event) => {
                        markerDragEnd(markerData, index);
                    });
                }
            }

            /* ------------------------- Handle Map Click Event ------------------------- */
            function mapClicked(event) {
                console.log(map);
                console.log(event.latLng.lat(), event.latLng.lng());
            }

            /* ------------------------ Handle Marker Click Event ----------------------- */
            function markerClicked(marker, index) {
                console.log(map);
                console.log(marker, index);
            }

            /* ----------------------- Handle Marker DragEnd Event ---------------------- */
            function markerDragEnd(marker, index) {
                console.log(map);
                console.log(marker, index);
            }
        </script>
    </body>
</html>

@endsection