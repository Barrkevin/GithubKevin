function initMap() {
    // les coordonnées de

    let lens = {
        lat : 50.4307477,
        lng : 2.8278407000000243
    };

    let sallaumines = {
        lat : 50.4220729,
        lng : 2.849335500000052
    };

    let content0 = "<h5>Agence de Lens</h5> <p> Rue Louis Pasteur</p> <p>62300 Lens</p>";
    let content5 = "<h5>Ville de Sallaumines</h5> <p> rue de quimper</p> <p>62430 Sallaumines</p>";

    let affichePlace5 = document.querySelector("#maps5");

    let map = new google.maps.Map( affichePlace5, {
        zoom :10,
        center : lens,
    });

    let marker = new google.maps.Marker({
        /* On attribut un curseur a l'objet lens qui se trouve dans la map */
        position : lens,
        map : map,
    });

    let marker5 = new google.maps.Marker({
        position : sallaumines,
        map : map,
    });

    let infos = new google.maps.InfoWindow ({
        /* On déclare info0, content reçoit content a,2 ou 3 etc qui sont déclaré plus haut */
        content: content0,
        position : lens
    });

    let infos5 = new google.maps.InfoWindow ({
        content: content5,
        position : sallaumines
    });

    marker.addListener("click", function () {
        /* Ouverture de la popup avec les informations */
        infos.open(map);
    });

    marker5.addListener("click", function () {
        infos5.open(map);
    });
}
initMap();