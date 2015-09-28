<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bucle While</title>
</head>

<body>
<?php
/* Permite repetir un bloque de instrucciones mientras una condición se esté cumpliendo
*/
  
echo "*******Ejemplos Bucle While"."<br>";
echo "<br>";
 $aumento = 5;
 while($aumento < 10)
 {
	echo "La variable aumento vale: ".++$aumento."<br>"; 
 }
	
echo "<br>Resto de código<br><br>";

/* Do while ejecuta primero el bloque y luego comprueba que una condición se esté cumpliendo
*/
echo "*******Ejemplos Bucle Do While"."<br>";

$variable1 = 10;
do{
 echo "Ejecuto este code y a posteriori lo compruebo"."<br>";
 echo $variable1."<br>";
}while($variable1 < 9);
	echo "Ejecuto este code ahora"."<br>";


  
?>
</body>
</html>