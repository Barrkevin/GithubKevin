function initMap() {
    // les coordonnées de

    let lens = {
        lat : 50.4307477,
        lng : 2.8278407000000243
    };

    let arras = {
        lat : 50.291048,
        lng : 2.777221
    };

    let content0 = "<h5>Agence Immobilette</h5> <p> Rue Louis Pasteur</p> <p>62300 Lens</p>";
    let content6 = "<h5>Maison sur Arras</h5> <p> Rue Emile Breton</p> <p>62000 Arras</p>";

    let affichePlace6 = document.querySelector("#maps6");

    let map = new google.maps.Map( affichePlace6, {
        /* On déclare une nouvelle map, on lui dit de centrer la map sur Lens */
        zoom :10,
        center : lens,
    });

    let marker = new google.maps.Marker({
        /* On attribut un curseur a l'objet lens qui se trouve dans la map */
        position : lens,
        map : map,
    });

    let marker6 = new google.maps.Marker({
        position : arras,
        map : map,
    });

    let infos = new google.maps.InfoWindow({
        /* On déclare info0, content reçoit content a,2 ou 3 etc qui sont déclaré plus haut */
        content: content0,
        position : lens,
    });

    let infos6 = new google.maps.InfoWindow({
        content: content6,
        position : arras,
    });

    marker.addListener("click", function () {
        /* Ouverture de la popup avec les informations */
        infos.open(map);
    });

    marker6.addListener("click", function () {
        infos6.open(map);
    });
// Itinéraire
    let directionsService = new google.maps.DirectionsService();
    let directionsDisplay = new google.maps.DirectionsRenderer({ 'map': map });
    let request = {
        origin: lens,
        destination: arras,
        travelMode: google.maps.DirectionsTravelMode.DRIVING,
        unitSystem: google.maps.DirectionsUnitSystem.METRIC
    };
    directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            directionsDisplay.setOptions({ 'suppressMarkers': true });
        }
    });
}
initMap();