function initMap() {
    // les coordonnées de

    let lens = {
        lat: 50.4307477,
        lng: 2.8278407000000243
    };

    let vimy = {
        lat: 50.3726709,
        lng: 2.8064679999999953
    };

    let content0 = "<h5>Agence Immobilette</h5> <p> Rue Louis Pasteur</p> <p>62300 Lens</p>";
    let content4 = "<h5>Maison sur Vimy</h5> <p> Rue du 8 mai</p> <p>62580 Vimy</p>";

    let affichePlace4 = document.querySelector("#maps4");

    let map = new google.maps.Map(affichePlace4, {
        zoom: 11,
        center: lens
    });

    let marker = new google.maps.Marker({
        /* On attribut un curseur a l'objet lens qui se trouve dans la map */
        position: lens,
        map: map
    });

    let marker4 = new google.maps.Marker({
        position: vimy,
        map: map
    });

    let infos = new google.maps.InfoWindow({
        /* On déclare info0, content reçoit content a,2 ou 3 etc qui sont déclaré plus haut */
        content: content0,
        position: lens,
    });

    let infos4 = new google.maps.InfoWindow({
        content: content4,
        position: vimy,
    });

    marker.addListener("click", function () {
        /* Ouverture de la popup avec les informations */
        infos.open(map);
    });

    marker4.addListener("click", function () {
        infos4.open(map);
    });
// Itinéraire
    let directionsService = new google.maps.DirectionsService();
    let directionsDisplay = new google.maps.DirectionsRenderer({'map': map});
    let request = {
        origin: lens,
        destination: vimy,
        travelMode: google.maps.DirectionsTravelMode.DRIVING,
        unitSystem: google.maps.DirectionsUnitSystem.METRIC
    };
    directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            directionsDisplay.setOptions({'suppressMarkers': true});
        }
    });
}

initMap();