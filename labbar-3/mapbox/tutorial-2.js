const eTable = document.querySelector('table');
// Min personliga access-token
mapboxgl.accessToken = 'pk.eyJ1IjoibHVjaGlyZWVlIiwiYSI6ImNrbDB0Z2htajByYzIycG1sbGE1aDQ2YTEifQ.XIPsGSqrVzmZjjFdt_c0uQ'; // replace this with your access token
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/luchireee/ckm1xjdy4amzt17ljtag0ougz', // replace this with your style URL
    center: [18.063284, 59.33551],
    zoom: 10.7
});

// Lägga till markers när man klickar på kartan
map.on("click", function(e) {
    console.log("Du har klickat på kartan!", e.lngLat);

    var marker = new mapboxgl.Marker()
        .setLngLat(e.lngLat)
        .addTo(map);

        // Infoga ra i tabellen
        var newRow = eTable.insertRow();
        newRow.insertCell().innerText = e.lngLat.lng;
        newRow.insertCell().innerText = e.lngLat.lat;
        newRow.insertCell().innerText = "...";


        // @todo
        //Textcellen är redigerbar
});