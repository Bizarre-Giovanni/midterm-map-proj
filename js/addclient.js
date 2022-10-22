var map = L.map('addClientMap').setView([10.6840, 122.9563], 17);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker();

function onMapClick(e) {
    marker.setLatLng(e.latlng).bindPopup("<b>Set location!</b>").openPopup().addTo(map);
    document.getElementById("coordLong").value = e.latlng.lat;
    document.getElementById("coordLat").value = e.latlng.lng;
}

map.on('click', onMapClick);