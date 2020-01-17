function initMap() {
    /* Déclaration lat et long*/
    let lens = {
        lat: 50.4307477,
        lng: 2.8278407000000243
    };

    let douai = {
        lat: 50.367025,
        lng: 3.072071000000051
    };

    /*Ce qu'il sera écrit dans la fenêtre du curseur*/
    let content0 = "<h5>Agence Immobilette</h5> <p> Rue Louis Pasteur</p> <p>62300 Lens</p>";
    let content1 = "<h5>Appartement de Douai</h5> <p> Rue d'Arras</p> <p>59500 Douai</p>";

    let affichePlace1 = document.querySelector("#maps1");
    /* On crée un objet qui aura pour propriété un sélecteur */

    let map = new google.maps.Map(affichePlace1, {
        /* On déclare une nouvelle map, on lui dit de centrer la map sur Lens */
        zoom: 10,
        center: lens,
        styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            { /*Permet de passer la map en noir et d'y afficher les routes, parking etc*/
                featureType: 'administrative.locality',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
            },
            {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
            },
            {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{color: '#263c3f'}]
            },
            {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{color: '#6b9a76'}]
            },
            {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{color: '#38414e'}]
            },
            {
                featureType: 'road',
                elementType: 'geometry.stroke',
                stylers: [{color: '#212a37'}]
            },
            {
                featureType: 'road',
                elementType: 'labels.text.fill',
                stylers: [{color: '#9ca5b3'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{color: '#746855'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{color: '#1f2835'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'labels.text.fill',
                stylers: [{color: '#f3d19c'}]
            },
            {
                featureType: 'transit',
                elementType: 'geometry',
                stylers: [{color: '#2f3948'}]
            },
            {
                featureType: 'transit.station',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
            },
            {
                featureType: 'water',
                elementType: 'geometry',
                stylers: [{color: '#17263c'}]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{color: '#515c6d'}]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.stroke',
                stylers: [{color: '#17263c'}]
            }
        ]
    });

    let image = 'https://zupimages.net/up/20/02/aj8c.png';

    let marker = new google.maps.Marker({
        /* On attribut un curseur a l'objet lens qui se trouve dans la map */
        position: lens,
        map: map,
        icon: image
    });

    let marker1 = new google.maps.Marker({
        position: douai,
        map: map,
    });

    let infos = new google.maps.InfoWindow({
        /* On déclare info0, content reçoit content a,2 ou 3 etc qui sont déclaré plus haut */
        content: content0,
        position: lens
    });

    let infos1 = new google.maps.InfoWindow({
        content: content1,
        position: douai
    });

    marker.addListener("click", function () {
        /* Ouverture de la popup avec les informations */
        infos.open(map);
    });

    marker1.addListener("click", function () {
        infos1.open(map);
    });

// Itinéraire vers la maison
    let directionsService = new google.maps.DirectionsService();
    let directionsDisplay = new google.maps.DirectionsRenderer({'map': map});
    let request = {
        origin: lens,
        destination: douai,
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