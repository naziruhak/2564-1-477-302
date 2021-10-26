var x = document.getElementById("demo")

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: 6.291618,
            lng: 101.708861
        },
        zoom: 15,
        mapTypeId: "satellite"
    });
    var marker = new google.maps.Marker({
        position: {
            lat: 6.291618,
            lng: 101.708861,
        },
        map: map
    });
    map.style.width = '500px'
    map.styel.height = '1000px'
    infoWindow = new google.maps.InfoWindow();

    const locationButton = document.createElement("button");

    locationButton.textContent = "Pan to Current Location";
    locationButton.classList.add("custom-map-control-button");
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
    locationButton.addEventListener("click", () => {
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent("Location found.");
                    infoWindow.open(map);
                    map.setCenter(pos);
                },
                () => {
                    handleLocationError(true, infoWindow, map.getCenter());
                }
            );
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(
        browserHasGeolocation ?
        "Error: The Geolocation service failed." :
        "Error: Your browser doesn't support geolocation."
    );
    infoWindow.open(map);
}



(function() {
    var dialog = document.getElementById('map2');
    document.getElementById('showmap').onclick = function() {
        dialog.showModal();
    };
    document.getElementById('hidemap').onclick = function() {
        dialog.close();
    };

})();