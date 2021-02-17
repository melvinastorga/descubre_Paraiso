<?php

//datos de acceso para la base de datos

$host = "localhost";
$username = "root";
$password = "admin";
$dbName = "proyecto";

global $conn;

$conn = mysqli_connect($host, $username, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Connection couldn't be established" . mysqli_connect_errno();
}


// obtiene las probabilidades para obtener las rutas 
function getRuthPlace ($priceSearch, $turistSearch, $ageSearch, $placeSearch, $categorySearch, $conn){
    
    $sql = "CALL obtenerRutEuclides(?, @precioOut, @tipoTuristaOut, @edadOut, @ubicacionOut, @tipoAtractivoOut, @clasificacionOut')";
    $eucliDistance[0] = 0;
    // cuenta los registros
    $idIn = 0; 
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
        $sixthDif[$i] = $result['@clasificacionOut'];
        
        
        // obtiene la distancia más pequeña
        $eucliDistance[$i] = sqrt(pow($firstDif, 2) + pow($secondDif, 2) + pow($thirdDif, 2) + pow($fourthDif, 2) + pow($fifthDif, 2));
        
        
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
        
    }
    
    
    
   $idSites = getSitesRandom($clasification);
   
   echo $idSites[0] . "</br>";
   echo $idSites[1] . "</br>";
   echo $idSites[2] . "</br>";
   echo $idSites[3] . "</br>";
   echo $idSites[4] . "</br>";
   
   
   //extractData($idSites);
    
}



// obtiene cinco sitios de la clase con la menor distancia
function getSitesRandom ($clasification){
    
    // extrae cinco sitios que formaran la ruta recomendada
    $sqlSite = "Select idS from Sitio where clasificacion = ". $clasification + " ORDER BY RAND() LIMIT 5";
    
    
    // extrae los datos de la base de datos
    $result = $conn->query($sqlSite);
    
    
    $counter = 0;
    $selectedSite[$counter] = 0;
    
    if ($result->num_rows > 0) {
        
        // recorre los datos obtenidos de la base
        while ($row = $result->fetch_assoc()) {
            
            // obtiene los resultados de la seleccion
            $selectedSite[$counter] = $row["idS"];
        }
    } else {
        echo "0 results";
    }
    
    return $selectedSite; 
}

/*
 * extrae los datos de los cinco sitios seleccionados de manera aleatoria
 * 
function extractData ($selectedSites){
    
    $sql = "CALL PExtractInfo(?, @nombreSitioOut, @descripcionOut, @latitudOut, @longitudOut, 
                                 @precioOut, @tipoTuristaOut, @edadOut, @ubicacionOut, @tipoAtractivoOut,
                                 @clasificacionOut')";

 
    
    // en este ciclo se obtienen los cinco sitios seleccionados aleatoriamente
    
    for ($i = 0; $i < 5 ; $i++) {
        
        $call = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($call, 'i',  $selectedSites[$i]);
        mysqli_stmt_execute($call);
        
        //extrae los datos
        $select = mysqli_query($conn, 'SELECT @nombreSitioOut, @descripcionOut, @latitudOut, @longitudOut, 
                                              @precioOut, @tipoTuristaOut, @edadOut, @ubicacionOut, @tipoAtractivoOut,
                                              @clasificacionOut');
        
        $result = mysqli_fetch_assoc($select);
        
        
       
        $firstDif[$i] =  $result['@precioOut'];
        $secondDif[$i] = $result['@tipoTuristaOut'];
        $thirdDif[$i] =  $result['@edadOut'];
        $fourthDif[$i] = $result['@ubicacionOut'];
        $fifthDif[$i] =  $result['@tipoAtractivoOut'];
        $sixthDif[$i] =  $result['@clasificacionOut'];
        
        
    }
    
}

*/

function getLocation($distances){
    
    
    for ($i = 0; $i < 99 ; $i++) {
        
        if($distances[$i] > $distances[$i+1]){
            $temp = $distances[$i];
            $distances[$i] = $distances[$i+1];
            $distances[$i+1] = $temp;
        }
        
    }
    
    
    return $distances;
    
}

?>