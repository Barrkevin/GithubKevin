function initMap() {
    /* Déclaration lat et long*/
    let lens = {
        lat : 50.4307477,
        lng : 2.8278407000000243
    };

    let douai = {
        lat : 50.367025,
        lng : 3.072071000000051
    };

    /*Ce qu'il sera écrit dans la fenêtre du curseur*/
    let content0 = "<h5>Agence de Lens</h5> <p> Rue Louis Pasteur</p> <p>62300 Lens</p>";
    let content1 = "<h5>Ville de Douai</h5> <p> Rue d'Arras</p> <p>59500 Douai</p>";

    let affichePlace1 = document.querySelector("#maps1");
    /* On créer un objet qui aura pour propriété un sélecteur */

    let map = new google.maps.Map( affichePlace1, {
        /* On déclare une nouvelle map, on lui dit de centrer la map sur Lens */
        zoom :10,
        center : lens
    });

    let marker = new google.maps.Marker({
        /* On attribut un curseur a l'objet lens qui se trouve dans la map */
        position : lens,
        map : map
    });

    let marker1 = new google.maps.Marker({
        position : douai,
        map : map
    });

    let infos = new google.maps.InfoWindow({
        /* On déclare info0, content reçoit content a,2 ou 3 etc qui sont déclaré plus haut */
        content: content0,
        position : lens
    });

    let infos1 = new google.maps.InfoWindow({
        content: content1,
        position : douai
    });

    marker.addListener("click", function () {
        /* Ouverture de la popup avec les informations */
        infos.open(map);
    });

    marker1.addListener("click", function () {
        infos1.open(map);
    });
}
initMap();