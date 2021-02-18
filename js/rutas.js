let res, capa, lineaUno, lineaDos, marcador1, marcador2, marcador3;
function loadSitios() {
    let results = {
        "priceSearch": document.getElementById('priceSearch').value,
        "turistSearch": document.getElementById('turistTypeSearch').value,
        "ageSearch": document.getElementById('ageSearch').value,
        "placeSearch": document.getElementById('placeSearch').value,
        "categorySearch": document.getElementById('categorySearch').value
    };

    $(document).ready(function () {
        $.ajax({
            url: "euclideanAlgorithm.php",
            data: results,
            type: "POST",
            success: function (result) {
                res = JSON.parse(result);
                loadRuta();
            }
        });
    });
}

function resetRuta() {
    mapa.removeLayer(capa);
    mapa.removeLayer(lineaUno);
    mapa.removeLayer(lineaDos);
}

function loadRuta() {
    // Arreglo para marcadores
    var marcadores = [];

    console.log(res);
    var lat1 = res[0]['latitud']
    var lon1 = res[0]['longitud']
    var lat2 = res[1]['latitud']
    var lon2 = res[1]['longitud']
    var lat3 = res[2]['latitud']
    var lon3 = res[2]['longitud']

    //Marcadores
    marcador1 = new ol.Feature({
        geometry: new ol.geom.Point(
            // Ubicación del marcador (Longitud, latitud)
            ol.proj.fromLonLat([lon1, lat1])
        ),
    });

    marcador2 = new ol.Feature({
        geometry: new ol.geom.Point(
            // Ubicación del marcador (Longitud, latitud)
            ol.proj.fromLonLat([lon2, lat2])
        ),
    });

    marcador3 = new ol.Feature({
        geometry: new ol.geom.Point(
            // Ubicación del marcador (Longitud, latitud)
            ol.proj.fromLonLat([lon3, lat3])
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

    // Agregar los marcadores al arreglo
    marcadores.push(marcador1, marcador2, marcador3);

    // A la capa le ponemos los marcadores
    capa = new ol.layer.Vector({
        source: new ol.source.Vector({
            features: marcadores,
        }),
    });

    // Y agregamos la capa al mapa
    mapa.addLayer(capa);

    //Línea entre marcadores
    var sitioUno = ol.proj.fromLonLat([lon1, lat1]);
    var sitioDos = ol.proj.fromLonLat([lon2, lat2]);
    var sitioTres = ol.proj.fromLonLat([lon3, lat3]);

    var estiloLinea = [
        new ol.style.Style({
            stroke: new ol.style.Stroke({
                color: '#d12710',
                width: 2
            })
        })
    ];

    lineaUno = new ol.layer.Vector({
        source: new ol.source.Vector({
            features: [new ol.Feature({
                geometry: new ol.geom.LineString([sitioUno, sitioDos]),
                name: 'Line',
            })]
        })
    });

    lineaDos = new ol.layer.Vector({
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
    mapa.addLayer(lineaDos);
}

//Mostrar mapa
const LATITUD_CENTRO = 9.8312261, LONGITUD_CENTRO = -83.8313899, ZOOM = 13;

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

//Detectar a cual marcador se le dio click
mapa.on('click', function (evt) {
    var feature = mapa.forEachFeatureAtPixel(evt.pixel,
        function (feature) {
            return feature;
        });
    if (feature === marcador1) {
        verMarcador(0);
    } else if (feature === marcador2) {
        verMarcador(1);
    } else if (feature === marcador3) {
        verMarcador(2);
    }
});

function verMarcador(i) {
    $("#modalSitio").modal('show');
    document.querySelector('#nombreSitio').innerText = res[i]['nombre'];
    document.querySelector('#ubicacionSitio').innerText = res[i]['ubicacion'];
    document.querySelector('#precioSitio').innerText = res[i]['precio'];
    document.querySelector('#tipoTuristaSitio').innerText = res[i]['tipoTurista'];
    document.querySelector('#edadSitio').innerText = res[i]['edad'];
    document.querySelector('#categoriaSitio').innerText = res[i]['tipoAtractivo'];
    document.querySelector('#descripcionSitio').innerText = res[i]['descripcion'];
    $("#imagenSitio").attr("src", res[i]['url']);
}