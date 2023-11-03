<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $root = sqrt($num);

    echo '<script language="javascript">alert("';
    echo  "La raiz cuadrada de $num es: $root";
    echo '");</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de raiz cuadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="fondo">
   <CENTER> <h3> PHP Calculadora de 
    Raiz Cuadrada </h3> </CENTER>
   <CENTER><form class="f" method="post" action="">
        <label>Introduce un número:</label>
        <input class="cc" type="number" name="num" required>
        <input  class="c"type="submit" name="submit" value="Calcular">
    </form></CENTER>


</body>
</html>