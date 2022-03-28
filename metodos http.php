<?php
/*
En hostings compartidos contratados puede llegar mensajes como espan mirar uno que no entre en span
utilizar servicio externo como mail chen,mail shet

GET
POST
DELETE
PUT
PATCH
*/
if (!isset($_GET["nombre"])) {//si no lo tiene con !
  die("Necesita ingresar un nombre");//matar ejecucion
  }
if (!isset($_GET["telefono"])) {
  die("Necesita ingresar un apellido");
}

if (!isset($_GET["email"])) {
  die("Necesita ingresar un apellido");
}

if (!isset($_GET["mensaje"])) {
  die("Necesita ingresar un apellido");
}

//4 tipos de datos anajo 4
$nombre = $_GET["nombre"];
$telefono = $_GET["telefono"];
$email = $_GET["email"];
$mensaje = $_GET["mensaje"];

//funcion para enviar mensaje :en google buscamos:
//                                                stackoverflow php send email : en ingles
$to      ='rpascualet@gmail.com';//email a la persona que se lo vamos a enviar: he puesto el mio
$subject = 'Consulta desde la web';
$body = 'Nueva consulta desde la web.' . "\r\n";//salto de linea "\r\n" y concadenamos con .
$body .= 'Nombre: ' . $nombre . "\r\n";
$body .= 'telefono: ' . $telefono . "\r\n";
$body .= 'Email: ' . $email . "\r\n";
$body .= 'Mensaje: ' . $mensaje . "\r\n";

// A quien le vamos a enviar email y la persona que queremos responder y las cabezeras
$headers .= 'From:  ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversio();

//funcion global de php que lo que hace es enviar un email
mail($to, $subject, $message, $headers);

//  echo $_GET["nombre"];
//  echo $_GET["apellido"];






//http://localhost/curso/metodos%20http%20php/metodos%20http.php?nombre=Ramon&apellido=Pascual&edad=43&email=asassd.com
 ?>
