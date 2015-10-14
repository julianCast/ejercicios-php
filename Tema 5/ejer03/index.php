<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <b>3. Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.</b>
<br><br>
   
<?php
  $numUser = $_GET['numUser'];
  $numeroText = $_GET['numeroText'];
  $cantNumeros = $_GET['cantNumeros'];

//Si no se ha mandado nada por numUser, declaraciones.
if (!isset($_GET['numUser'])){
  $cantNumeros = 0;
  $numeroText = "";
}
  
if ($cantNumeros == 15) {
  $numeroText = $numeroText . " " . $numUser;
  $numeroText = substr($numeroText, 2);                                       
  $arrayNum = explode(" ", $numeroText);
  
  
  
// Mover posiciones array un paso y la ultima posicion al primer indice.
  //Guardo el ultimo numero del array original en la primera posicion del otro.
$arrayCamb[0] = $arrayNum[14];
  for($x = 1; $x < count($arrayNum); $x++){
  $arrayCamb[$x] = $arrayNum[$x-1];
}
  
  
?>
<table border="2" style="border-collapse: collapse; text-align: center">
  <tr>
    <th>[i]</th>
    <th>ARRAY ORIGINAL</th>
    <th>ARRAY CAMBIADO</th>
  </tr>
  <?php 
  
  for ($filas = 0; $filas < count($arrayNum); $filas++){
    echo "<tr>";
    
      echo "<td>";
      echo $filas;
      echo "</td>";

      echo "<td>";
      echo $arrayNum[$filas];
      echo "</td>";
      
      echo "<td>";
      echo $arrayCamb[$filas];
      echo "</td>";

    echo "</tr>";  
  }
  
  ?>
</table>
<?php
}
if ($cantNumeros < 15) {?>
<form action="index.php" method="get">
    <input type="number" name="numUser" autofocus>
    <input type="hidden" name="cantNumeros" value="<?= ++$cantNumeros ?>">
    <input type="hidden" name="numeroText" value="<?= $numeroText . " " . $numUser ?>">
    <input type="submit" value="Continuar">
</form>
<?php
}?>  
  
  </body>
</html>
