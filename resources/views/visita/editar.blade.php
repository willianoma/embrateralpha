Editar visita geral

<script type="text/javascript">

    function onMapLoad(map)
    {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        title: "Location found."
                    });

                    map.setCenter(pos);
                }
            );
        }
    }
</script>

<div style="width: 500px; height: 500px;">
    {!! Mapper::render() !!}
</div>


