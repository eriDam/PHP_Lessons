<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Operadores</title>
</head>

<body>
<?php
/*Permiten realizar operaciones;
Aritméticos, de asignación, de cadena, de errores, de incremento y de lógica:

Aritméticos:
Suma (+)- Resta(-)
Multiplicación(*) - División (/)- Potcentage(%)*/

//Ejemplos Aritmética
echo "*******Ejemplos Aritmética"."<br>";
$suma = 4 + 4;
$multiplicacion = $suma * 2;

echo "El resultado de la suma es: ".$suma."<br>";
echo  "El resultado de la multiplicación es: ".$multiplicacion;
echo "<br> <br>";
;

//Operador de asignación = o .=,
echo "******Ejemplos Operador de asignación de cadena"."<br>";
$valor1 = "Yo tengo ";
$valor2 = 33;

echo $valor1."<br>";
echo $valor2;
echo "<br>";
$texto = "yo tengo ". 33 ." años";
echo $texto;
echo "<br>";

$tengo = "yo ";
$tengo .= "tengo  ";#agregamos, concatenamos la variable
$tengo .= "33 años";#agregamos, concatenamos la variable

echo $tengo;
echo "<br>";
echo "<br>";

//Operadores de comparación  igual ==, idéntico ===, diferente != o <>, mayor q >, menor q <, <= o >=
echo "******Ejemplos Operadores de comparación"."<br>";
echo (6 >= 4);#1 si es true, cero o nada si false
echo "<br>";
echo (5 == 11);
echo "<br>";
 


?>
</body>
</html>