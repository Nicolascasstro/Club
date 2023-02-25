<?php

class Consultas{
    // UNA CLASE PUEDE TENER UN AO MUCHAS FUNCIONES

    // REGISTRO DE USUARIO EXTERNO

    public function registrarUserExt($nombre,$apellido,$tipoDoc,$identificacion,$telefono,$email,$claveMd,$rol,$estado){

         // CREAMOS EL OBJETO DE CONEXION

         $objConexion = new conexion;
         $conexion = $objConexion->get_conexion();

        // DEFINIMOS LA CONSULTA A EJECUTAR EN ESTE CASO INSERT

        $insertar = "INSERT INTO users(nombre,apellido,tipoDoc,identificacion,telefono,email,clave,rol,estado) 
        VALUES(:nombre,:apellido,:tipoDoc,:identificacion,:telefono,:email,:claveMd,:rol,:estado)";

       

        // PREPARAMOS LO NECESARIO PARA EJECUTAR EL INSERT

        $result = $conexion->prepare($insertar);

        // CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS CON BINDPARAM

        $result->bindParam(":nombre", $nombre);
        $result->bindParam(":apellido", $apellido);
        $result->bindParam(":tipoDoc", $tipoDoc);
        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":telefono", $telefono);
        $result->bindParam(":email", $email);
        $result->bindParam(":claveMd", $claveMd);
        $result->bindParam(":rol", $rol);
        $result->bindParam(":estado", $estado);

        // EJEECUTAMOS EL INSERT

        $result->execute();

        // CONFIRMAMOS EL REGISTRO Y REDIRECCIONAMOS AL LOGIN
        echo '<script>alert("Ha creado su cuenta exitosamente")</script>';
        echo "<script> location.href='../Views/extras/page-login.php'</script>";


    }
}


?>