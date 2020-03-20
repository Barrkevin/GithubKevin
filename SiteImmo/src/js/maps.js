// Centrage de la carte
let lat = 50.41092762168918;
let lon = 2.844809889793396;
let macarte = null;
let iconBase = 'https://zupimages.net/up/20/10/3qs5.png';

let biens = {
    "<strong>Appartement 50m2</strong> <p>Rue du général</p> <p>Douai</p>": { "lat": 50.3741569519043, "lon": 3.0812010765075684 },
    "<strong>Maison de 120m2</strong> <p>Rue de la murène</p> <p>Henin-Beaumont</p>": { "lat": 50.41460037231445, "lon": 2.9629738330841064 },
    "<strong>Maison 80m</strong> <p>Rue du maréchal</p> <p>Lievin</p>": { "lat": 50.42318344116211, "lon": 2.7715952396392822 },
    "<strong>Appartement 65m2</strong> <p>Rue voltaire</p> <p>Vimy</p>": { "lat": 50.37243, "lon": 2.81034 },
    "<strong>Maison 85m2</strong> <p>Rue Elsa triolet</p> <p>Sallaumines</p>": { "lat": 50.42039108276367, "lon": 2.8636655807495117 },
    "<strong>Appartement 40m2</strong> <p>Rue des peupliers</p> <p>Arras</p>": { "lat": 50.291048, "lon": 2.7772211 },
};

let immobilette ={
    "<strong>Agence Immobilette</strong> <p>Rue des lilas</p> <p>Lens</p>": {"lat": 50.4291723, "lon" : 2.8319805},
};

// Init de la carte
function initMap() {
    // Création de l'objet ma carte et insertion dans l'html -> div maps
    macarte = L.map('maps').setView([lat, lon], 11);
    // On récupère ici
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {

        attribution: 'données © OpenStreetMap/ODbL - rendu OSM France',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);

    // Boucle for pour parcourir les biens
    for (ville in biens) {
        let marker = L.marker([biens[ville].lat, biens[ville].lon]).addTo(macarte);
        // Nous ajoutons la popup. A noter que son contenu (ici la letiable ville) peut être du HTML
        marker.bindPopup(ville);
    }
    for (ville in immobilette) {
        // Je défini l'icône, sa taille, sa position (anchor) et décalage de l'ancre (popupanchor)
        let Icon = L.icon({
            iconUrl: iconBase,
            iconSize: [50, 50],
            iconAnchor: [25, 50],
            popupAnchor: [-3, -76],
        });
        let marker = L.marker([immobilette[ville].lat, immobilette[ville].lon], { icon: Icon }).addTo(macarte);
        marker.bindPopup(ville);
    }
}


window.onload = function(){
    // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
    initMap();
};

