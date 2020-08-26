<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="#04B45F">
	<h1>
  <?php
   echo "Esta interesante esto de php y<br>" ;
   echo "muy entrenido para aprender<br><br>"  ;

    $x= 10;
    $y= 8;
    $z= 23;
    $suma= $x + $y + $z;
    $resta= $x - $y - $z;
    $division= $x / $y / $z;
    $multiplicacion= $x * $y * $z;
    $promedio= $suma/3;

     echo "La suma es:"; echo $suma ;
     echo "<br>La resta es:"; echo $resta ;
     echo "<br>La division es:";echo $division ;
     echo "<br>La multiplicacion es:";
     echo $multiplicacion ;
     echo "<br>El promedio es:";echo $promedio ;
          $t= date("i");
             if ($t > "30")
             	 {
     echo "<br><br>Es mas de la media hora";}
             else
               {
     echo "<br><br>Es menos de la media hora";}	 
            ?>
      </h1>
</body>
</html>