<?php
    include('../connection_guapiles.php');

    $requestMethod = $_SERVER["REQUEST_METHOD"];
    
    if($requestMethod == "GET"){
        $id = $_GET["id"];
        $query = "SELECT  nombreSitio, descripcion, nombreTA FROM Sitio s JOIN TipoAtractivo t ON s.idS = t.idTA ".
                 "WHERE s.idS = " .$id;
        $result = mysqli_query($connection, $query);
        if(!$result)
            die('Error');
        
        $row = $result->fetch_assoc();
        $response = array(
            'name'=> $row["nombreSitio"],
            'description'=>$row["descripcion"],
            'type'=>$row["nombreTA"]
        );
        $connection->close();
        echo json_encode($response);
    }
?>