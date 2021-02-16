<?php

//datos de acceso para la base de datos

$host = "localhost";
$username = "root";
$password = "admin";
$dbName = "b76223_tarea";

global $conn;

$conn = mysqli_connect($host, $username, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Connection couldn't be established" . mysqli_connect_errno();
}


// obtiene las probabilidades para obtener las rutas 

function getRuthPlace ($priceSearch, $turistSearch, $ageSearch, $placeSearch, $categorySearch, $conn){
    
    $sql = "CALL obtenerRutEuclides(?, ?, ?, ?, ?, ?, @idIn)";
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
        
        
        if ($counter == 0) {
            $distance = $eucliDistance;
            $style = $result['@clasificacionOut'];
            $counter = 1;
        }
        
        if ($distance > $eucliDistance) {
            $distance = $eucliDistance;
            $style = $result['@clasificacionOut'];
        }
        
       
        
    }
    
    
    
}



function getSitesRandom ($sites){
    
    
}



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