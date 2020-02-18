// On initialise la latitude et la longitude de Paris (centre de la carte)
let lat = 50.41092762168918;
let lon = 2.844809889793396;
let macarte = null;
// Fonction d'initialisation de la carte
function initMap() {
    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    macarte = L.map('map').setView([lat, lon], 11);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 4,
        maxZoom: 20
    }).addTo(macarte);


    let marqueur = L.marker([50.41092762168918, 2.844809889793396]).addTo(macarte);
    marqueur.bindPopup("<p>Section athletisme</p>" +
        "<p>Stade javary route de la piscine</p>" +
        "<p>62210 - Avion</p>" +
        "<p>0321447270</p>" +
        "<p>csathletisme.avion@orange.fr</p>" +
        "<p>Stade javary route de la piscine</p>" +
        "<p><a href='https://bases.athle.fr/asp.net/contacts.aspx?base=contacts&id=50494950514846534752&type=S' target=\"_blank\">Cliquez-ici</a> pour plus d'informations</p>")
}

window.onload = function(){
    // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
    initMap();
};

