<?php
    include('../connection_local.php');

    $requestMethod = $_SERVER["REQUEST_METHOD"];
    
    if($requestMethod == "GET"){
        $id = $_GET["id"];
        $query = "SELECT  nombreSitio, descripcion, nombreTA, rangoEdad, nombrePrecio, nombreUbicacion
                                                                          FROM Sitio s JOIN TipoAtractivo t ON s.tipoA = t.idTA 
                                                                          JOIN Edad e ON s.edad = e.idE
                                                                          JOIN Precio p ON s.precio = p.idP
                                                                          JOIN Ubicacion u ON s.ubicacion = u.idU".
                 " WHERE s.idS = " .$id;
        $result = mysqli_query($connection, $query);
        if(!$result)
            die('Error');
        
        $row = $result->fetch_assoc();
        $response = array(
            'name'=> $row["nombreSitio"],
            'description'=>$row["descripcion"],
            'type'=>$row["nombreTA"], 
            'price'=>$row["nombrePrecio"],
            'age'=>$row["rangoEdad"],
            'location'=>$row["nombreUbicacion"],
        );
        $connection->close();
        echo json_encode($response);
    }
?>