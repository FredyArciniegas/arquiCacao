Esta es la est�nter�a. �sela como prueba piloto, si la necesita.

$shelf=Shelf::open();
$usuarios=$shelf->get("usuario");
$shelf->set("usuario",$usuarios);
Shelf::close();