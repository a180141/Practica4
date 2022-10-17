<?php
    require_once "lib/nusoap.php";
    function getAutos($datos){
        if ($datos == "Autos"){
            return join(",",array(
                "Volkswagen",
                "Suzuki",
                "Mitsubishi",
                "Lamborghini",
                "Kia",
                "Ford",
                "Ferrari",
                "Chevrolet",
                "Audi",
                "BMW"));
        }
        else {
            return "No hay datos";
        }
    }
    $server = new soap_server();//crear la instancia de soap
    $server->register("getAutos");//indicar el metodo a devolver
    if ( !isset( $HTTP_RAW_POST_DATA) ) $HTTP_RAW_POST_DATA=file_get_contents( 'php://input' );
        $server->service($HTTP_RAW_POST_DATA);
?>
