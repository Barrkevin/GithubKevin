function initMap() {
    // les coordonnées de

    let lens = {
        lat: 50.4307477,
        lng: 2.8278407000000243
    };

    let lievin = {
        lat: 50.4172488,
        lng: 2.7746058000000176
    };

    let content0 = "<h5>Agence Immobilette</h5> <p> Rue Louis Pasteur</p> <p>62300 Lens</p>";
    let content3 = "<h5>Villa de Liévin</h5> <p> Rue Emile Basly</p> <p>62800 Liévin</p>";

    let affichePlace3 = document.querySelector("#maps3");

    let map = new google.maps.Map(affichePlace3, {
        zoom: 12,
        center: lens
    });

    let marker = new google.maps.Marker({
        /* On attribut un curseur a l'objet lens qui se trouve dans la map */
        position: lens,
        map: map
    });

    let marker3 = new google.maps.Marker({
        position: lievin,
        map: map
    });

    let infos = new google.maps.InfoWindow({
        /* On déclare info0, content reçoit content a,2 ou 3 etc qui sont déclaré plus haut */
        content: content0,
        position: lens,
    });

    let infos3 = new google.maps.InfoWindow({
        content: content3,
        position: lievin
    });

    marker.addListener("click", function () {
        /* Ouverture de la popup avec les informations */
        infos.open(map);
    });

    marker3.addListener("click", function () {
        infos3.open(map);
    });
// Itinéraire
    let directionsService = new google.maps.DirectionsService();
    let directionsDisplay = new google.maps.DirectionsRenderer({'map': map});
    let request = {
        origin: lens,
        destination: lievin,
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
