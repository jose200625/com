<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body class="ecuaciones">

<center><h2 class="te"> PHP Calculadora de ecuaciones cuadráticas</h2></center>

<center><form class="fo" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  a: <input class="ta" type="text" name="a">
  b: <input  class="ta" type="text" name="b">
  c: <input  class="ta" type="text" name="c">
  <input class="e" type="submit">
</form></center>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $discriminante = $b*$b - 4*$a*$c;

    if ($discriminante > 0) {
        $root1 = (-$b + sqrt($discriminante)) / (2*$a);
        $root2 = (-$b - sqrt($discriminante)) / (2*$a);
        echo '<script language="javascript">alert("';
        echo "Las soluciones son: $root1 y $root2";
        echo '");</script>';
       
    } elseif ($discriminante == 0) {
        $root1 = -$b / (2*$a);
        echo '<script language="javascript">alert("';
        echo "La solución es: $root1";
        echo '");</script>';
       
    } else {
        echo '<script language="javascript">alert("';
        echo "No hay soluciones reales";
        echo '");</script>';
    }
}
?>

</body>
</html>
