var map = L.map('map').setView([10.6840, 122.9563], 17);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var dArrayLatLong = [];
for (let i = 0; i < 1; i++) {
    dArrayLatLong[i] = [];
    for (let j = 0; j < 2; j++) {
        dArrayLatLong[i][j] = arrayLatLong[j];
    }
}

for (let i = 0; i < dArrayLatLong.length; i++) {
    L.marker(dArrayLatLong[i]).addTo(map);
}
