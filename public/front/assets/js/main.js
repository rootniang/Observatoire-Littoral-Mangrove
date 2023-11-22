// $(function() {
//   var c = $("#header");
//   var d = c.offset().top - 20;
    
//   $(window).scroll(function() {
//     var b = $(window).scrollTop();
//     c.toggleClass("header-fixed", b > d);
//   });
// });

mapboxgl.accessToken = 'pk.eyJ1Ijoicm9vdG5pYW5nOTUiLCJhIjoiY2xvdzI3dGthMTJodzJrcTBqMWY1dzBweSJ9.lODm9ALWAdthxe6j5hWz3A';
const map = new mapboxgl.Map({
	container: 'map', // container ID
	// Choose from Mapbox's core styles, or make your own style with Mapbox Studio
	style: 'mapbox://styles/mapbox/streets-v12', // style URL
	center: [-14.705200,14.652683], // starting position [lng, lat]
	zoom: 7,
	projection: 'globe' // starting zoom
});
map.on('load', () => {
    map.setFog({});
    map.addSource('loc', {
    'type': 'geojson',
    'data': 'data.geojson',
    })
});
map.addLayer({
    'id': 'loc',
    'type': 'fill',
    'source': 'loc', // reference the data source
    'layout': {},
    'paint': {
    'fill-color': '#0080ff', // blue color fill
    'fill-opacity': 0.5
    }
});
// Add a black outline around the polygon.
map.addLayer({
    'id': 'outline',
    'type': 'line',
    'source': 'loc',
    'layout': {},
    'paint': {
    'line-color': '#000',
    'line-width': 3
    }
});
// const ecosysteme = [
//     {
//         name: 'Saint Louis',
//         color:'',
//         lngLat: [-16.504211,16.027336]
//     },
//     {
//         name: 'Joal Fadiouth',
//         color:'',
//         lngLat: [-16.740417,14.069981]
//     },
//     {
//         name: 'Sokone',
//         color:'',
//         lngLat: [-16.498718,13.888745]
//     },
//     {
//         name: 'Fleuve Senegal',
//         color:'',
//         lngLat: [-16.235046,13.386948]
//     },
//     {
//         name: 'Basse Casamance',
//         color:'',
//         lngLat: [-16.608582,12.680535]
//     },
// ];
// ecosysteme.forEach(({name, lngLat}) => {
//     new mapboxgl.Marker()
//     .setLngLat(lngLat)
//     .addTo(map);
// })

// const marker1 = new mapboxgl.Marker()
//     .setLngLat([-16.504211,16.027336])
//     .addTo(map);

// const marker2 = new mapboxgl.Marker()
//     .setLngLat([-16.740417,14.069981])
//     .addTo(map);

// const marker3 = new mapboxgl.Marker()
//     .setLngLat([-16.498718,13.888745])
//     .addTo(map);

// const marker4 = new mapboxgl.Marker()
//     .setLngLat([-16.235046,13.386948])
//     .addTo(map);

// const marker5 = new mapboxgl.Marker()
//     .setLngLat([-16.608582,12.680535])
//     .addTo(map);

let cartestyle = document.getElementById("carte");
let modalcarte = document.getElementById("modalcarte");
cartestyle.addEventListener("click", () => {
    if(getComputedStyle(modalcarte).display != "none"){
        modalcarte.style.display = "none" ;
    }
    else {
        modalcarte.style.display = "block" ;
    }
})
let carteinfo = document.getElementById("infos");
let modalinfos = document.getElementById("modalinfos");
carteinfo.addEventListener("click", () => {
    if(getComputedStyle(modalinfos).display != "none"){
        modalinfos.style.display = "none" ;
    }
    else {
        modalinfos.style.display = "block" ;
    }
})