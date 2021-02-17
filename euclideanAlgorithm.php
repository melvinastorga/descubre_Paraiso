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
        
        $idIn = $idIn+1;
        
    }
    
    echo $clasification . "</br>";
    
   $idSites = getSitesRandom($clasification, $conn);
   
  // echo $idSites[0] . "</br>";
  // echo $idSites[1] . "</br>";
  // echo $idSites[2] . "</br>";
   
   
   extractData($idSites, $conn);
    
}



// obtiene cinco sitios de la clase con la menor distancia

function getSitesRandom ($clasification, $conn){
    
    // extrae cinco sitios que formaran la ruta recomendada
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


 // extrae los datos de los cinco sitios seleccionados de manera aleatoria
 
function extractData ($selectedSites, $conn){
    
    $sql = "CALL PExtractInfo(?, @nombreSitioOut, @descripcionOut, @latitudOut, @longitudOut, 
                                 @precioOut, @tipoTuristaOut, @edadOut, @ubicacionOut, @tipoAtractivoOut,
                                 @clasificacionOut)";

 
    
    // en este ciclo se obtienen los cinco sitios seleccionados aleatoriamente
    //echo  $selectedSites[0] . "</br>";
    //echo  $selectedSites[1] . "</br>";
    //echo  $selectedSites[2] . "</br>";
    
    for ($i = 0; $i < 3 ; $i++) {
        
        $call = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($call, 'i',  $selectedSites[$i]);
        mysqli_stmt_execute($call);
        
        //extrae los datos
        $select = mysqli_query($conn, 'SELECT @nombreSitioOut, @descripcionOut, @latitudOut, @longitudOut, 
                                              @precioOut, @tipoTuristaOut, @edadOut, @ubicacionOut, @tipoAtractivoOut,
                                              @clasificacionOut');
        
        $result = mysqli_fetch_assoc($select);
        
        
        
        $sitioJson = array();
        
        $sitioJson[$i] = array('precio'=>$result['@precioOut'],
            'tipoTurista'=>$result['@tipoTuristaOut'],
            'edad'=>$result['@edadOut'], 
            'ubicacion'=>$result['@ubicacionOut'], 
            'precio'=>$result['@precioOut'], 
            'tipoAtractivo'=>$result['@tipoAtractivoOut'], 
            'latitud'=>$result['@latitudOut'], 
            'longitud'=>$result['@longitudOut'], 
            'nombre'=>$result['@nombreSitioOut'], 
            'descripcion'=>$result['@descripcionOut']
        );
         
    }
    
    
    echo "Json Sitio: ", json_encode($sitioJson);
    
    
    
}

                
class Sitio {
    public $nombre = "";
    public $descripcion = "";
    public $latitud = 0;
    public $longitud = 0;
    public $precio = "";
    public $tipoTurista = "";
    public $edad = "";
    public $ubicacion = "";
    public $tipoAtractivo = "";
    public $clasificacion = "";
}

/*
 * $sitio = new Sitio;
        
        $sitio -> precio = $result['@precioOut'];
        $sitio -> tipoTurista = $result['@tipoTuristaOut'];
        $sitio -> edad =  $result['@edadOut'];
        $sitio -> ubicacion = $result['@ubicacionOut'];
        $sitio -> precio =  $result['@precioOut'];
        $sitio -> tipoAtractivo =  $result['@tipoAtractivoOut'];
        $sitio -> latitud =  $result['@latitudOut'];
        $sitio -> longitud = $result['@longitudOut'];
        $sitio -> nombre = $result['@nombreSitioOut'];
        $sitio -> descripcion = $result['@descripcionOut'];
        
        
        $sitios[$i] = $sitio;
 */


?>