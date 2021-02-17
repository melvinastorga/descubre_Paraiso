<?php
    include('../connection_guapiles.php');

    $requestMethod = $_SERVER["REQUEST_METHOD"];
    
    if($requestMethod == "GET"){
        $type = $_GET["type"];
        $query = "SELECT idS, nombreSitio, descripcion, nombreTA FROM Sitio s JOIN TipoAtractivo t ON s.idS = t.idTA";
        if($type != "Todos")
            $query += " WHERE t.nombreTA = '".$type."';";

        $result = mysqli_query($connection, $query);
        if(!$result)
            die('Error');
        
        $response = array();
        $i = 0;
        while($row = mysqli_fetch_array($result)){
            $response[$i++] = array(
                'id'=> $row['idS'],
                'name'=> $row['nombreSitio'],
                'type'=> $row['nombreTA'],
                'description'=> $row['descripcion']
            ); 
        } 
        $connection->close();
        echo json_encode($response);
    }
?>