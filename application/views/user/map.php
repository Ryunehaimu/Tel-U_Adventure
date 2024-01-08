    <div id="map-container" style="position: relative;height: 880px;width: 1500px;padding:20px">
        <div id="location-container" style="position: absolute;top: 110px;left: 30px;z-index: 1000;background-color: white;padding: 20px;border-radius: 5px;">
            <label for="location">Enter Location:</label>
            <input type="text" id="location" style="padding:5px" Placeholder="Cari tempat...."/>
            <button class="btn btn-primary" onclick="searchLocation()">Search</button>
        </div>
        <div class="card" style="height: 835px;width: 1850px;margin-top:80px">
            <div id="map" style="height: 100%;width: 100%;"></div>
        </div>
    </div>

    <script src="https://www.bing.com/api/maps/mapcontrol?key=ApDMBjK754govCIiANBe30rkUdaZeQi6tqiFp7_mlI_8oGxWxg-ELHO97DCQRhGB&callback=loadMapScenario" async defer></script>
    <script>
        function loadMapScenario() {
            var map = new Microsoft.Maps.Map(document.getElementById('map'), {
                credentials: 'ApDMBjK754govCIiANBe30rkUdaZeQi6tqiFp7_mlI_8oGxWxg-ELHO97DCQRhGB',
                center: new Microsoft.Maps.Location(-6.9769, 107.6302),
                zoom: 16
            });
            <?php
            foreach ($datagd as $row) {
            ?>
                var pinLocation = new Microsoft.Maps.Location(<?=$row->x ?>, <?= $row->y ?>);
                var pin = new Microsoft.Maps.Pushpin(pinLocation, {
                    title: '<?php echo $row->Nama ?>',
                });

                map.entities.push(pin);
            <?php
            }
            ?>
            window.map = map;
        }

        function searchLocation() {
            var location = document.getElementById('location').value;
            fetch(`https://dev.virtualearth.net/REST/v1/Locations/${encodeURIComponent(location)}?key=ApDMBjK754govCIiANBe30rkUdaZeQi6tqiFp7_mlI_8oGxWxg-ELHO97DCQRhGB`)
                .then(response => response.json())
                .then(data => {
                    if (data.resourceSets.length > 0 && data.resourceSets[0].resources.length > 0) {
                        var point = data.resourceSets[0].resources[0].point.coordinates;
                        var location = new Microsoft.Maps.Location(point[0], point[1]);

                        map.setView({ center: location, zoom: 15 });

                        var pushpin = new Microsoft.Maps.Pushpin(location);
                        map.entities.push(pushpin);
                    } else {
                        alert('Location not found. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>