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

    let henin = {
        lat: 50.41450340000001,
        lng: 2.9629277999999886
    };

    let lievin = {
        lat: 50.4172488,
        lng: 2.7746058000000176
    };

    let vimy = {
        lat: 50.3726709,
        lng: 2.8064679999999953
    };

    let sallaumines = {
        lat: 50.4220729,
        lng: 2.849335500000052
    };

    let arras = {
        lat: 50.291048,
        lng: 2.777221
    };

    /*Ce qu'il sera écrit dans la fenêtre du curseur*/
    let content0 = "<h5>Agence Immobilette</h5> <p> Rue Louis Pasteur</p> <p>62300 Lens</p>";
    let content1 = "<h5>Appartement de Douai</h5> <p> Rue d'Arras</p> <p>59500 Douai</p>";
    let content2 = "<h5>Maison de Hénin-Beaumont</h5> <p> Rue de la murène</p> <p>62110 Hénin-Beaumont</p>";
    let content3 = "<h5>Villa de Liévin</h5> <p> Rue Emile Basly</p> <p>62800 Liévin</p>";
    let content4 = "<h5>Maison de Vimy</h5> <p> Rue du 8 mai</p> <p>62580 Vimy</p>";
    let content5 = "<h5>Domaine de Sallaumines</h5> <p> rue de quimper</p> <p>62430 Sallaumines</p>";
    let content6 = "<h5>Maison de Arras</h5> <p> Rue Emile Breton</p> <p>62000 Arras</p>";

    let affichePlace = document.querySelector("#maps");
    /* On créer un objet qui aura pour propriété un sélecteur */

    let map = new google.maps.Map(affichePlace, {
        /* On déclare une nouvelle map, on lui dit de centrer la map sur Lens */
        zoom: 10,
        center: lens,
        styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
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
        /*'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';*/

    let marker = new google.maps.Marker({
        /* On attribut un curseur a l'objet lens qui se trouve dans la map */
        position: lens,
        map: map,
        icon: image
    });

    let marker1 = new google.maps.Marker({
        position: douai,
        map: map
    });

    let marker2 = new google.maps.Marker({
        position: henin,
        map: map
    });

    let marker3 = new google.maps.Marker({
        position: lievin,
        map: map
    });

    let marker4 = new google.maps.Marker({
        position: vimy,
        map: map
    });

    let marker5 = new google.maps.Marker({
        position: sallaumines,
        map: map
    });

    let marker6 = new google.maps.Marker({
        position: arras,
        map: map
    });

    let infos0 = new google.maps.InfoWindow({
        /* On déclare info0, content reçoit content a,2 ou 3 etc qui sont déclaré plus haut */
        content: content0,
        position: lens
    });

    let infos1 = new google.maps.InfoWindow({
        content: content1,
        position: douai
    });

    let infos2 = new google.maps.InfoWindow({
        content: content2,
        position: henin
    });

    let infos3 = new google.maps.InfoWindow({
        content: content3,
        position: lievin
    });

    let infos4 = new google.maps.InfoWindow({
        content: content4,
        position: vimy
    });

    let infos5 = new google.maps.InfoWindow({
        content: content5,
        position: sallaumines
    });

    let infos6 = new google.maps.InfoWindow({
        content: content6,
        position: arras
    });

    marker.addListener("click", function () {
        /* Ouverture de la popup avec les informations*/
        infos0.open(map);
    });

    marker1.addListener("click", function () {
        infos1.open(map);
    });

    marker2.addListener("click", function () {
        infos2.open(map);
    });

    marker3.addListener("click", function () {
        infos3.open(map);
    });

    marker4.addListener("click", function () {
        infos4.open(map);
    });

    marker5.addListener("click", function () {
        infos5.open(map);
    });

    marker6.addListener("click", function () {
        infos6.open(map);
    });
}

initMap();