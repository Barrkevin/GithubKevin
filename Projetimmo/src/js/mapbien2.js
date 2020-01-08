function initMap() {
    /* Déclaration lat et long*/
    let lens = {
        lat : 50.4307477,
        lng : 2.8278407000000243
    };

    let henin = {
        lat : 50.41450340000001,
        lng : 2.9629277999999886
    };

    /*Ce qu'il sera écrit dans la fenêtre du curseur*/
    let content0 = "<h5>Agence de Lens</h5> <p> Rue Louis Pasteur</p> <p>62300 Lens</p>";
    let content2 = "<h5>Ville de Hénin-Beaumont</h5> <p> Rue de la murène</p> <p>62110 Hénin-Beaumont</p>";

    let affichePlace2 = document.querySelector("#maps2");
    /* On créer un objet qui aura pour propriété un sélecteur */

    let map = new google.maps.Map( affichePlace2, {
        /* On déclare une nouvelle map, on lui dit de centrer la map sur Lille */
        zoom :10,
        center : lens
    });

    let marker = new google.maps.Marker({
        /* On attribut un curseur a l'objet lens qui se trouve dans la map */
        position : lens,
        map : map
    });

    let marker2 = new google.maps.Marker({
        position : henin,
        map : map
    });

    let infos = new google.maps.InfoWindow({
        /* On déclare info0, content reçoit content a,2 ou 3 etc qui sont déclaré plus haut */
        content: content0,
        position : lens
    });

    let infos2 = new google.maps.InfoWindow({
        content: content2,
        position : henin,
    });

    marker.addListener("click", function () {
        /* Ouverture de la popup avec les informations */
        infos.open(map);
    });

    marker2.addListener("click", function () {
        infos2.open(map);
    });
}
initMap();