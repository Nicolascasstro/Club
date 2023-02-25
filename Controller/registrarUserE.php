<?php

// IMPORTAMOS LAS DEPENDECNCIAS NECESARIAS
require_once("../Model/conexion.php");
require_once("../Model/consultas.php");

// CAPTURAMOS EN VARIABLES LOS VALORES ENCIADOS DESDE EL FORMULARIO
// ATRAVEZ DE EL METHOD POST Y LOS NAMES DE LOS CAMPOS


$nombre = $_POST['nombre_usuario'];
$apellido = $_POST['apellido_usuario'];
$tipoDoc = $_POST['tipoDoc'];
$identificacion = $_POST['Identificacion'];
$telefono = $_POST['numero'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

// Valores por defecto
$rol = "Cliente";
$estado = "Activo";

// ENCRIPTAR CLAVE
$claveMd = md5($contraseña);

// CREAMOS UN OBJETO APARTIR DE LA CLASE CONSULTAS,
// PARA PODER ENVIAR LOS ARGUMENTOS A UNA FUNCION ESPECIFICA
$objConsultas = new Consultas();
$result = $objConsultas->registrarUserExt($nombre,$apellido,$tipoDoc,$identificacion,$telefono,$email,$claveMd,$rol,$estado);


?>