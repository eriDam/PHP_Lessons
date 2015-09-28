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
echo "<br>"."<br>";

echo (5 == 11);
echo "En la comparación anterior no sale nada o sale cero por ser false"."<br>";

//Operadores de prueba de errores se define a través de @
//Elimina el error de la vista del usuario
echo "Hola"."<br>";
@ define (); //Esto debería producir un error, pero con la @ lo oculto
define(); //Esto debería producir un error,
echo "<br>"."<br>";
//Operadores de incremento y decremento
echo "******Ejemplos Operadores de incremento y decremento"."<br>";
$variable = 3;
echo "variable ha aumentado antes de mostrarse: ";
echo ++$variable;
echo "<br>";
echo "Ahora ha disminuido".--$variable;
echo "<br>"."<br>";
//Operadores de lógica, aquellos que nos permiten agregar operaciones/condiciones en un condicional && y ||
echo "******Ejemplos Operadores de lógica && y ||"."<br>";
echo ((2 == 2) && (2 != 1)); #sacará valor true 1
echo "<br>";
echo ((4 == 4) || (4 != 4)); #sacará valor true 1 si uno de los dos es cierto
echo "<br>";
?>
</body>
</html>