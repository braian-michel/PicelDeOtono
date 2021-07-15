<?php

// Declaración de variables del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$whats = $_POST['whats'];
$message = $_POST['message'];


// Datos del email
$para = "braian.michel90@gmail.com";
$titulo = 'Consulta';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $name\n Telefono: $whats\n E-Mail: $email\n Mensaje:\n $message";


if ($_POST['submit']) {

    if (mail($para, $titulo, $msjCorreo, $header)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactarte con nosotros.'); location.href='index.html';
    </script>";
    

    } else {
        echo "<script language='javascript'>
        alert('Falló el envío.'); location.href='index.html';
        </script>";
    }
}

?>