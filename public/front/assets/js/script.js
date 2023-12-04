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

// map.on('load', () => {
//     zone.forEach(({id, data}) => {
//         map.addSource(id, {
//         type: 'geojson',
//         data: data
//         });
//         // Add a new layer to visualize the polygon.
//         map.addLayer({
//             'id': id,
//             'type': 'fill',
//             'source': id, // reference the data source
//             'layout': {},
//             'paint': {
//             'fill-color': '#0CB3C4', // blue color fill
//             'fill-opacity': 0.5
//             }
//         });
//         // Add a black outline around the polygon.
//         map.addLayer({
//             'id': id,
//             'type': 'line',
//             'source': id,
//             'layout': {},
//             'paint': {
//             'line-color': '#000',
//             'line-width': 1
//             }
//         });
//     })
// })
//Zone Casamance
let casamance = document.getElementById("casamance");
casamance.addEventListener("click", () => {
    if(casamance.checked){
        map.addSource('cs', {
        type: 'geojson',
        data: 'cs.geojson'
        });
        // Add a new layer to visualize the polygon.
        map.addLayer({
            'id': 'cs',
            'type': 'fill',
            'source': 'cs', // reference the data source
            'layout': {},
            'paint': {
            'fill-color': '#0CB3C4', // blue color fill
            'fill-opacity': 0.5
            }
        });
        // Add a black outline around the polygon.
        map.addLayer({
            'id': 'cs',
            'type': 'line',
            'source': 'cs',
            'layout': {},
            'paint': {
            'line-color': '#000',
            'line-width': 1
            }
        });
    }
    else {
        
    }
})
//Fin Zone Casamance

//Zone Fleuve Senegal
let fleuvesenegal = document.getElementById("fleuvesenegal");
fleuvesenegal.addEventListener("click", () => {
    if(fleuvesenegal.checked){
        map.addSource('fs', {
        type: 'geojson',
        data: 'fs.geojson'
        });
        // Add a new layer to visualize the polygon.
        map.addLayer({
            'id': 'fs',
            'type': 'fill',
            'source': 'fs', // reference the data source
            'layout': {},
            'paint': {
            'fill-color': '#0CB3C4', // blue color fill
            'fill-opacity': 0.5
            }
        });
        // Add a black outline around the polygon.
        map.addLayer({
            'id': 'fs',
            'type': 'line',
            'source': 'fs',
            'layout': {},
            'paint': {
            'line-color': '#000',
            'line-width': 1
            }
        });
    }
    else {
        
    }
})
//Fin Zone Fleuve Senegal

//Zone Joal
let joal = document.getElementById("joal");
joal.addEventListener("click", () => {
    if(joal.checked){
        map.addSource('jf', {
        type: 'geojson',
        data: 'jf.geojson'
        });
        // Add a new layer to visualize the polygon.
        map.addLayer({
            'id': 'jf',
            'type': 'fill',
            'source': 'jf', // reference the data source
            'layout': {},
            'paint': {
            'fill-color': '#0CB3C4', // blue color fill
            'fill-opacity': 0.5
            }
        });
        // Add a black outline around the polygon.
        map.addLayer({
            'id': 'jf',
            'type': 'line',
            'source': 'jf',
            'layout': {},
            'paint': {
            'line-color': '#000',
            'line-width': 1
            }
        });
    }
    else {
        
    }
})
//Fin Zone Joal

//Zone Sokone
let sokone = document.getElementById("sokone");
sokone.addEventListener("click", () => {
    if(sokone.checked){
        map.addSource('sk', {
        type: 'geojson',
        data: 'sk.geojson'
        });
        // Add a new layer to visualize the polygon.
        map.addLayer({
            'id': 'sk',
            'type': 'fill',
            'source': 'sk', // reference the data source
            'layout': {},
            'paint': {
            'fill-color': '#0CB3C4', // blue color fill
            'fill-opacity': 0.5
            }
        });
        // Add a black outline around the polygon.
        map.addLayer({
            'id': 'sk',
            'type': 'line',
            'source': 'sk',
            'layout': {},
            'paint': {
            'line-color': '#000',
            'line-width': 1
            }
        });
    }
    else {
        
    }
})
//Fin Zone Sokone
//Zone Saint Louis
let saintlouis = document.getElementById("saintlouis");
saintlouis.addEventListener("click", () => {
    if(casamance.checked){
        map.addSource('sl', {
        type: 'geojson',
        data: 'sl.geojson'
        });
        // Add a new layer to visualize the polygon.
        map.addLayer({
            'id': 'sl',
            'type': 'fill',
            'source': 'sl', // reference the data source
            'layout': {},
            'paint': {
            'fill-color': '#0CB3C4', // blue color fill
            'fill-opacity': 0.5
            }
        });
        // Add a black outline around the polygon.
        map.addLayer({
            'id': 'sl',
            'type': 'line',
            'source': 'sl',
            'layout': {},
            'paint': {
            'line-color': '#000',
            'line-width': 1
            }
        });
    }
    else {
        
    }
})
//Fin Zone Saint Louis
const ecosysteme = [
    {
        name: 'Saint Louis',
        color:'',
        lngLat: [-16.504211,16.027336],
        text: 'Zone de mangrove de Saint Louis'
    },
    {
        name: 'Joal Fadiouth',
        color:'',
        lngLat: [-16.740417,14.069981],
        text: 'Zone de mangrove de Joal Fadiouth'
    },
    {
        name: 'Sokone',
        color:'',
        lngLat: [-16.498718,13.888745],
        text: 'Zone de mangrove de Sokone'
    },
    {
        name: 'Fleuve Senegal',
        color:'',
        lngLat: [-16.235046,13.386948],
        text: 'Zone de mangrove du Fleuve Senegal'
    },
    {
        name: 'Basse Casamance',
        color:'',
        lngLat: [-16.608582,12.680535],
        text: 'Zone de mangrove de la basse Casamance'
    },
];
// create the popup
const popup = new mapboxgl.Popup({ offset: 0 }).setText(
'Zone de mangrove de la basse Casamance.'
).setLngLat([-16.608582,12.680535]);
ecosysteme.forEach(({name, lngLat, text}) => {
    let pop = new mapboxgl.Popup({ offset: 0 }).setText(text).setLngLat(lngLat);
    new mapboxgl.Marker()
    .setLngLat(lngLat)
    .setPopup(pop)
    .addTo(map);
});
const layerList = document.getElementById('menu');
const inputs = layerList.getElementsByTagName('input');
for (const input of inputs) {
    input.onclick = (layer) => {
    const layerId = layer.target.id;
    map.setStyle('mapbox://styles/mapbox/' + layerId);
    };
}
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

let carteplace = document.getElementById("place");
let modalplace = document.getElementById("modalplace");
carteplace.addEventListener("click", () => {
    if(getComputedStyle(modalplace).display != "none"){
        modalplace.style.display = "none" ;
    }
    else {
        modalplace.style.display = "block" ;
    }
})
//End Modal
