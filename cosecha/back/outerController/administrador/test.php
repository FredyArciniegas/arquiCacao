<?php
$host='gidis.ufps.edu.co';
$username='cacaoufps';
$password='cacaoufps';
$mysqli = new mysqli($host, $username, $password, "cacao");

/* comprobar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}

/* comprobar si el servidor sigue vivo */
if ($mysqli->ping()) {
    printf ("¡La conexión está bien!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}

/* cerrar la conexión */
$mysqli->close();
?>