<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Básicos Php</title>
</head>

<body>
Esto es una prueba ates del php
<br/>
<?php
//El salto de línea lo coloco dentro de las comillas, por que también permiten html, ademas de strings o cadenas
    echo '<br/> Esto es una prueba'; // Esto es un comentario al estilo de c++ de una sola línea
	print "<br/>Esto es otra prueba<br/>";
	
    /* Esto es un comentario multilínea
       y otra línea de comentarios, para realixar 2 esapacios, usamos código html */
    echo " &nbsp;&nbsp;&nbsp;Esto es otra prueba";
    echo '<br/>Una prueba final'; # Esto es un comentario al estilo de consola de una sola línea
?>
</body>
</html>