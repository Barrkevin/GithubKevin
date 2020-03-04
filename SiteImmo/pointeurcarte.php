<?php
require "fonction.php";

$sql = "select biens.id as bid,biens.adresse,biens.name as bname,latitude,longitude, biens.description,categories.name as cname,image,categories.id  from biens
inner join categories on biens.category_id = categories.id;";
/*On sélectionne la table products, on va chercher l'id on lui attribu un nom, en l'occurence ici "pid"*/


$req = $db->prepare($sql);
$req->execute();
?>

<script>
// Centrage de la carte
let lat = 50.41092762168918;
let lon = 2.844809889793396;
let macarte = null;
let iconBase = 'https://zupimages.net/up/20/10/3qs5.png';


<?php
while ($data = $req->fetchObject()){
?>

let biens = {
"<strong><?php echo $data->bname ?>></strong> <p><?php echo $data->adresse ?></p> <p><?php echo $data->description ?></p> <p><?php echo $data->cname ?></p>":
    { "lat": <?php echo $data->latitude ?>, "lon": <?php echo $data->longitude ?>}
};


    <?php
}
?>

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
// ajout de la popup avec son contenu html
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
// Initialisation à la fin du chargement
initMap();
};
</script>