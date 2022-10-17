<?php
   //codigo para la referencia a la libreria NuSoap
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/Practica4_a180141/server.php");
//codigo para validar en caso de que exista un error al consumir el servicio 
    $error =$cliente->getError();
    if ($error){
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }
    //codigo para consumir el metodo del servicio
    $result = $cliente->call("getAutos", array("datos" => "Autos"));
    if ($cliente->fault){
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else {
        $error = $cliente->getError();
        if($error){
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
            
        } 
        else {
            echo "<h2>Autos</h2><pre>";
            echo $result;
            echo "</pre>";
        }
    }
?>