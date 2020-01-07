addMarker({lat : 50.4317, lng : 2.83089});
addMarker({lat : 50.3675, lng : 3.072071});
addMarker({lat : 50.4145, lng : 2.962927});




function addMarker(coords){
    let marker = new google.maps.Marker({
        position:coords,
        map:map,
    });
}