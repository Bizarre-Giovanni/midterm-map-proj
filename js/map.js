var dArrayLatLong = [];
console.log(arrayLatLong);
for (let i = 0; i < 2; i++) {
    dArrayLatLong[i] = [];
    
    dArrayLatLong[i][0] = arrayLatLong[i].coordLong;
    dArrayLatLong[i][1] = arrayLatLong[i].coordLat;
}

var map = L.map('map').setView(dArrayLatLong[0], 17);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

console.log(dArrayLatLong);

for (let i = 0; i < dArrayLatLong.length; i++) {
    L.marker(dArrayLatLong[i]).addTo(map)
            .bindPopup('<b>Hello World</b>');
}
