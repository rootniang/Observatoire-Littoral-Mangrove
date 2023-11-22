mapboxgl.accessToken = 'pk.eyJ1Ijoicm9vdG5pYW5nOTUiLCJhIjoiY2xvdzI3dGthMTJodzJrcTBqMWY1dzBweSJ9.lODm9ALWAdthxe6j5hWz3A';
const map = new mapboxgl.Map({
	container: 'map', // container ID
	// Choose from Mapbox's core styles, or make your own style with Mapbox Studio
	style: 'mapbox://styles/mapbox/streets-v12', // style URL
	center: [-14.705200,14.652683], // starting position [lng, lat]
	zoom: 7,
	projection: 'globe' // starting zoom
});
const zone = [
    {
        id: 'cs',
        data: 'cs.geojson'
    },
    {
        id: 'sl',
        data: 'sl.geojson'
    },
    {
        id: 'jf',
        data: 'jf.geojson'
    },
    {
        id: 'sk',
        data: 'sk.geojson'
    },
    {
        id: 'fs',
        data: 'fs.geojson'
    },
];

map.on('load', () => {
    zone.forEach(({id, data}) => {
        map.addSource(id, {
        type: 'geojson',
        data: data
        });
        // Add a new layer to visualize the polygon.
        map.addLayer({
            'id': id,
            'type': 'fill',
            'source': id, // reference the data source
            'layout': {},
            'paint': {
            'fill-color': '#0CB3C4', // blue color fill
            'fill-opacity': 0.5
            }
        });
        // Add a black outline around the polygon.
        map.addLayer({
            'id': 'outline',
            'type': 'line',
            'source': id,
            'layout': {},
            'paint': {
            'line-color': '#000',
            'line-width': 1
            }
        });
    })
})

const ecosysteme = [
    {
        name: 'Saint Louis',
        color:'',
        lngLat: [-16.504211,16.027336]
    },
    {
        name: 'Joal Fadiouth',
        color:'',
        lngLat: [-16.740417,14.069981]
    },
    {
        name: 'Sokone',
        color:'',
        lngLat: [-16.498718,13.888745]
    },
    {
        name: 'Fleuve Senegal',
        color:'',
        lngLat: [-16.235046,13.386948]
    },
    {
        name: 'Basse Casamance',
        color:'',
        lngLat: [-16.608582,12.680535]
    },
];
ecosysteme.forEach(({name, lngLat}) => {
    new mapboxgl.Marker()
    .setLngLat(lngLat)
    .addTo(map);
});
//Modal
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
//End Modal