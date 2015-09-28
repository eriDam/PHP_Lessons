<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bucle lógico For</title>
</head>

<body>
<?php
/* Permite repetir un bloque de instrucciones mientras una condición se esté cumpliendo
*/
  
echo "*******Ejemplos Bucle For"."<br>";
for($var = 1; $var < 5; $var++){
	echo "Aumentamos en cada vuelta hasta que var sea mayor que 5 - Var  vale: ".$var."<br>";
}
echo "<br>"."*****Decrementar"."<br>";
for($var = 5; $var > 1; $var--){
	echo "Decrementar en cada vuelta hasta que var sea mayor que 1 - Var  vale: ".$var."<br>";
}
echo "<br>";
echo "*******Ejemplos Bucle ForEach"."<br>";
/*Este bucle permite sacar todos los elemntos de  un array*/
 
//Array predefinido

$predefinido = array("elemento1", "elemnto2");

//Mediante la variable elemtos, accederemos a los elemntos del array
foreach ($predefinido as $elementos){
	echo $elementos."<br>";
}
 
//Array personalizado o asociativo
$personalizado = array("clave1" => "elemento1", "clave2" => "elemento2");
foreach ($personalizado as $claves => $elemento)
{
	echo $claves." = ".$elemento."<br>";
}
?>
</body>
</html>