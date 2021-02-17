let resultadoInput, resultadosDiv;

$(document).ready(function () {
	
	// nombre de la clase del div 
	resultadosDiv = $('.demoResultado');
});


function calcular(){
	// nombre de las variables de la vista
    let results = {
        "priceSearch" : document.getElementById('priceSearch').value,
        "turistSearch" : document.getElementById('turistTypeSearch').value,
        "ageSearch" : document.getElementById('ageSearch').value,
        "placeSearch" : document.getElementById('placeSearch').value,
        "categorySearch" : document.getElementById('categorySearch').value
    };
    $.ajax({
        url: "euclideanAlgorithm.php",
        data: results,
        type: "POST",
        success: function (result) {
        	//muestra los resultados del json
            mostrarResultados(JSON.parse(result));
        },
        error: function (errorMessage) {
            resultadoInput.value = "Error!";
        }
    });
}

function mostrarResultados(resultados){
    let html = '<p>Probabilidades</p>';
    for (i = 0; i < resultados.length; i++) {
        html += '<p>'+ resultados[i]['precio'] +'</p>';
        html += '<p>'+ resultados[i]['nombre'] +'</p>';
    }
    resultadosDiv.html(html);
}