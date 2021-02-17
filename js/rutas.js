var results;
$(document).ready(function () {
    results = {
        "priceSearch": document.getElementById('priceSearch').value,
        "turistSearch": document.getElementById('turistTypeSearch').value,
        "ageSearch": document.getElementById('ageSearch').value,
        "placeSearch": document.getElementById('placeSearch').value,
        "categorySearch": document.getElementById('categorySearch').value
    };
});

function loadSitios() {
    window.location="rutas.php";
    // nombre de la clase del div 
    var html = '<p>Probabilidades</p>';
    $(document).ready(function () {
        $.ajax({
            url: "euclideanAlgorithm.php",
            data: results,
            type: "POST",
            success: function (result) {
                var res = JSON.parse(result);
                for (var i = 0; i < res.length; i++) {
                    console.log(result);
                    //html += '<p>'+ result +'</p>';
                }

            }
        });
        $("#demoResultado").html(html);
    });
}

function loadMapa() {

}
/*const LATITUD_CENTRO = 9.8394597, LONGITUD_CENTRO = -83.8923902, ZOOM = 13;

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
        ol.proj.fromLonLat([-83.888583, 9.8444444])
    ),
});

let marcador2 = new ol.Feature({
    geometry: new ol.geom.Point(
        // Ubicación del marcador (Longitud, latitud)
        ol.proj.fromLonLat([-83.8604253, 9.8186752])
    ),
});

let marcador3 = new ol.Feature({
    geometry: new ol.geom.Point(
        // Ubicación del marcador (Longitud, latitud)
        ol.proj.fromLonLat([-83.8504253, 9.8086752])
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

marcador3.setStyle(new ol.style.Style({
    image: new ol.style.Icon({
        src: "img/pin.png",
    })
}));

// Arreglo para marcadores
const marcadores = [];

// Agregar los marcadores al arreglo
marcadores.push(marcador1, marcador2, marcador3);

// A la capa le ponemos los marcadores
let capa = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: marcadores,
    }),
});

// Y agregamos la capa al mapa
mapa.addLayer(capa);

//Línea entre marcadores
var sitioUno = ol.proj.fromLonLat([-83.888583, 9.8444444]);
var sitioDos = ol.proj.fromLonLat([-83.8604253, 9.8186752]);
var sitioTres = ol.proj.fromLonLat([-83.8504253, 9.8086752]);

var estiloLinea = [
    new ol.style.Style({
        stroke: new ol.style.Stroke({
            color: '#d12710',
            width: 2
        })
    })
];

var lineaUno = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: [new ol.Feature({
            geometry: new ol.geom.LineString([sitioUno, sitioDos]),
            name: 'Line',
        })]
    })
});

var lineaDos = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: [new ol.Feature({
            geometry: new ol.geom.LineString([sitioDos, sitioTres]),
            name: 'Line',
        })]
    })
});

lineaUno.setStyle(estiloLinea);
lineaDos.setStyle(estiloLinea);

mapa.addLayer(lineaUno);
mapa.addLayer(lineaDos)

//Detectar a cual marcador se le dio click
mapa.on('click', function (evt) {
    var feature = mapa.forEachFeatureAtPixel(evt.pixel,
        function (feature) {
            return feature;
        });
    if (feature === marcador1) {
        verMarcador();
    } else if (feature === marcador2) {
        verMarcadorDos();
    } else if (feature === marcador3) {
        verMarcadorDos();
    }
});

function verMarcador() {
    $("#modalSitio").modal('show');
    document.querySelector('#nombreSitio').innerText = "";
    document.querySelector('#ubicacionSitio').innerText = "";
    document.querySelector('#precioSitio').innerText = "";
    document.querySelector('#tipoTuristaSitio').innerText = "";
    document.querySelector('#edadSitio').innerText = "";
    document.querySelector('#categoriaSitio').innerText = "";
    document.querySelector('#descripcionSitio').innerText = "";
    $("#imagenSitio").attr("src", "http://www.lacasonadelcafetal.com/uploads/restaurante15.jpg");
}*/