const LATITUD_CENTRO = 9.8394597, LONGITUD_CENTRO = -83.8923902, ZOOM = 13;

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
        ol.proj.fromLonLat([-83.8923902, 9.8394597])
    ),
});

let marcador2 = new ol.Feature({
    geometry: new ol.geom.Point(
        // Ubicación del marcador (Longitud, latitud)
        ol.proj.fromLonLat([-83.8604253, 9.8186752])
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

//Línea entre marcadores
var sitioUno = ol.proj.fromLonLat([-83.8923902, 9.8394597]);
var sitioDos = ol.proj.fromLonLat([-83.8604253, 9.8186752]);

var estiloLinea = [
    new ol.style.Style({
      stroke: new ol.style.Stroke({
        color: '#d12710',
        width: 2
      })
    })
  ];
              
var linea = new ol.layer.Vector({
        source: new ol.source.Vector({
        features: [new ol.Feature({
            geometry: new ol.geom.LineString([sitioUno, sitioDos]),
            name: 'Line',
        })]
    })
});

linea.setStyle(estiloLinea);
mapa.addLayer(linea);

//Detectar a cual marcador se le dio click
mapa.on('click', function (evt) {
    var feature = mapa.forEachFeatureAtPixel(evt.pixel,
        function (feature) {
            return feature;
        });
    if (feature === marcador1) {
        verMarcadorUno();
    } else if (feature === marcador2) {
        verMarcadorDos();
    } 
});

function verMarcadorUno() {
    $("#modalSitio").modal('show');
    document.querySelector('#nombreSitio').innerText = "Jardín Botánico Lankester";
    document.querySelector('#ubicacionSitio').innerText = "Paraíso";
    document.querySelector('#precioSitio').innerText = "0 - 10 000 colones";
    document.querySelector('#tipoTuristaSitio').innerText = "Nacional";
    document.querySelector('#edadSitio').innerText = "Todas las edades";
    document.querySelector('#categoriaSitio').innerText = "Jardín";
    document.querySelector('#descripcionSitio').innerText = "Jardín botánico con una gran variedad de plantas de bambú, plantas autóctonas y epífitas.";
    $("#imagenSitio").attr("src","http://jbl.ucr.ac.cr/sites/default/files/styles/crop_4-3/public/multimedia/aerial_jardin_lankester-202.jpg?itok=08w7D1sE");
}

function verMarcadorDos() {
    $("#modalSitio").modal('show');
    document.querySelector('#nombreSitio').innerText = "Mirador de Orosi";
    document.querySelector('#ubicacionSitio').innerText = "Orosi";
    document.querySelector('#precioSitio').innerText = "0 - 10 000 colones";
    document.querySelector('#tipoTuristaSitio').innerText = "Nacional";
    document.querySelector('#edadSitio').innerText = "Todas las edades";
    document.querySelector('#categoriaSitio').innerText = "Mirador";
    document.querySelector('#descripcionSitio').innerText = "Mirador con vistas al valle, senderos, un parque infantil, merendero y barbacoas..";
    $("#imagenSitio").attr("src","https://images.visitarcostarica.com/mirador-de-orosi.jpg");
}