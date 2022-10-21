var dArrayLatLong = [];
console.log(arrayLatLong);
for (let i = 0; i < arrayLatLong.length; i++) {
    dArrayLatLong[i] = [];
    
    for (let j = 0; j < 2; j++) {
        dArrayLatLong[i][j] = arrayLatLong[i][j];
    }
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
