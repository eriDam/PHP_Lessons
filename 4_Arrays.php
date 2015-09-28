<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arrays o Vectores</title>
</head>

<body>
<?php
#Permiten organizar elementos en forma de lista. Podemos acceder a ellos mediante una clave

#Tipos de Arrays: Predefinidos o Asociativos
#Array Predefinidos
$array = array ("elemento1", 2, "element 3");
#Los indices empiezan en 0, accedo a los elementos
echo "La posición 1 es: ".$array[0]."<br/>";
echo "La posición 2 es: ".$array[1]."<br/>";
echo "La posición 3 es: ".$array[2]."<br/>";

#Array Asociativos o personalizados, creo una clave para acceder a los elementos
$asociativo = array("clave1" => "elemento1", "clave2" => 2);
echo "Accedemos con la clave ".$asociativo["clave1"];

 
?>
</body>
</html>