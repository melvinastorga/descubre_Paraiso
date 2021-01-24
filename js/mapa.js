const LATITUD_CENTRO = 9.824643, LONGITUD_CENTRO = -83.8385484, ZOOM = 13;

const mapa = new ol.Map({
    //El id del elemento en el html
    target: 'mapa',
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        })
    ],
    view: new ol.View({
        center: ol.proj.fromLonLat([LONGITUD_CENTRO, LATITUD_CENTRO]),
        zoom: ZOOM,
    })
});

//Marcadores
let marcador1 = new ol.Feature({
    geometry: new ol.geom.Point(
        // Ubicación del marcador (Longitud, latitud)
        ol.proj.fromLonLat([-83.8604253, 9.8186752])
    ),
});
marcador1.id = "1";

let marcador2 = new ol.Feature({
    geometry: new ol.geom.Point(
        // Ubicación del marcador (Longitud, latitud)
        ol.proj.fromLonLat([-83.8628385, 9.8190612])
    ),
});

// Ícono de los marcadores
marcador1.setStyle(new ol.style.Style({
    image: new ol.style.Icon({
        src: "img/pin.png",
    })
}));

marcador2.setStyle(new ol.style.Style({
    image: new ol.style.Icon({
        src: "img/pin.png",
    })
}));

// Arreglo para marcadores
const marcadores = [];

// Agregar los marcadores al arreglo
marcadores.push(marcador1, marcador2);

// A la capa le ponemos los marcadores
let capa = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: marcadores,
    }),
});

// Y agregamos la capa al mapa
mapa.addLayer(capa);

//Detectar a cual marcador se le dio click
mapa.on('click', function (evt) {
    var feature = mapa.forEachFeatureAtPixel(evt.pixel,
        function (feature) {
            return feature;
        });
    if (feature === marcador1) {
        alert("marcador1");
    } else if (feature === marcador2) {
        alert("marcador2");
    } 
});