<?php

//datos de acceso para la base de datos

$host = "localhost";
$username = "root";
$password = "";
$dbName = "proyecto";


/*
 $host = "localhost";
 $username = "id16025515_root";
 $password = "H?bFjE2}7m%|J)CQ";
 $dbName = "id16025515_proyecto";
 */

global $conn;

$conn = mysqli_connect($host, $username, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Connection couldn't be established" . mysqli_connect_errno();
}

// obtiene las probabilidades para obtener las rutas
IF ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $priceSearch     = $_POST["priceSearch"];
    $turistSearch    = $_POST["turistSearch"];
    $ageSearch       = $_POST["ageSearch"];
    $placeSearch     = $_POST["placeSearch"];
    $categorySearch  = $_POST["categorySearch"];
    
    
    $sql = "CALL obtenerRutEuclides(?, @precioOut, @tipoTuristaOut, @edadOut, @ubicacionOut, @tipoAtractivoOut, @clasificacionOut)";
    $eucliDistance[0] = 0;
    // cuenta los registros
    $idIn = 1;
    $counter = 0;
    
    for ($i = 0; $i < 100 ; $i++) {
        
        $call = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($call, 'i',  $idIn);
        mysqli_stmt_execute($call);
        
        //extrae los datos
        $select = mysqli_query($conn, 'SELECT @precioOut, @tipoTuristaOut, @edadOut, @ubicacionOut, @tipoAtractivoOut, @clasificacionOut');
        $result = mysqli_fetch_assoc($select);
        
        
        $firstDif[$i] = $priceSearch - $result['@precioOut'];
        $secondDif[$i] = $turistSearch - $result['@tipoTuristaOut'];
        $thirdDif[$i] = $ageSearch - $result['@edadOut'];
        $fourthDif[$i] = $placeSearch - $result['@ubicacionOut'];
        $fifthDif[$i] = $categorySearch - $result['@tipoAtractivoOut'];
        
        // obtiene la distancia m�s peque�a
        $eucliDistance[$i] = sqrt(pow($firstDif[$i], 2) + pow($secondDif[$i], 2) + pow($thirdDif[$i], 2) + pow($fourthDif[$i], 2) + pow($fifthDif[$i], 2));
        
        
        // obtiene la menor distancia
        if ($counter == 0) {
            $distance = $eucliDistance;
            $clasification = $result['@clasificacionOut'];
            $counter = 1;
        }
        
        if ($distance > $eucliDistance) {
            $distance = $eucliDistance;
            $clasification = $result['@clasificacionOut'];
        }
        
        $idIn = $idIn+1;
        
    }
    
    $idSites = getSitesRandom($clasification, $conn);
    
    extractData($idSites, $conn);
    
}



// obtiene sitios de la clase con la menor distancia
function getSitesRandom ($clasification, $conn){
    
    // extrae tres sitios que formaran la ruta recomendada
    $sqlSite = "Select idS from Sitio where clasificacion = ". $clasification . " ORDER BY RAND() LIMIT 3";
    
    
    // extrae los datos de la base de datos
    $result = $conn->query($sqlSite);
    
    
    $counter = 0;
    $selectedSite[$counter] = 0;
    
    if ($result->num_rows > 0) {
        
        // recorre los datos obtenidos de la base
        while ($row = $result->fetch_assoc()) {
            
            // obtiene los resultados de la seleccion
            $selectedSite[$counter] = $row["idS"];
            $counter = $counter + 1;
            
        }
    } else {
        echo "0 results";
    }
    
    return $selectedSite;
}

// extrae los datos de los sitios seleccionados de manera aleatoria
function extractData ($selectedSites, $conn){
    
    $sql = "CALL PExtractInfo(?, @nombreSitioOut, @descripcionOut, @latitudOut, @longitudOut,
                                 @precioOut, @tipoTuristaOut, @edadOut, @ubicacionOut, @tipoAtractivoOut,
                                 @clasificacionOut, @urlOut)";
    
    
    
    // en este ciclo se obtienen los sitios seleccionados aleatoriamente
    $sitioJson = array();
    
    for ($i = 0; $i < 3 ; $i++) {
        
        $call = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($call, 'i',  $selectedSites[$i]);
        mysqli_stmt_execute($call);
        
        //extrae los datos
        $select = mysqli_query($conn, 'SELECT @nombreSitioOut, @descripcionOut, @latitudOut, @longitudOut,
                                              @precioOut, @tipoTuristaOut, @edadOut, @ubicacionOut, @tipoAtractivoOut,
                                              @clasificacionOut, @urlOut');
        
        $result = mysqli_fetch_assoc($select);
        
        $sitioJson[$i] = array('precio'=>$result['@precioOut'],
            'tipoTurista'=>$result['@tipoTuristaOut'],
            'edad'=>$result['@edadOut'],
            'ubicacion'=>$result['@ubicacionOut'],
            'clasificacion'=>$result['@clasificacionOut'],
            'tipoAtractivo'=>$result['@tipoAtractivoOut'],
            'latitud'=>$result['@latitudOut'],
            'longitud'=>$result['@longitudOut'],
            'nombre'=>$result['@nombreSitioOut'],
            'descripcion'=>$result['@descripcionOut'],
            'url'=>$result['@urlOut']
        );
    }
    //se recibe en testRutas.js
    echo json_encode($sitioJson);
}
?>