<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>
   

    <?php
    
    $x = 9;
    echo ("x =".$x."<br>");
    $y = 3;
    echo ("x =".$x."<br>");
    $z = 5;
    echo ("z =".$z."<br>");
    $suma = $x + $y;
    echo("suma =".$suma."<br>");
    $resta = $x - $z;
    echo("resta =".$resta."<br>");
    $multiplicacion = $suma * $resta;
    echo("multiplicacion =".$multiplicacion."<br>");
    $final = $multiplicacion++;
    echo("final =".$final."<br>");
    echo("multiplicacion =".$multiplicacion."<br>");
    

    //Operadores de comparación
    // Igual: ==
    // Identico: ===
    // Diferente: !=
    // Menor: <
    // mayor: >
    // Menor o  igual: <=
    // Mayor o iguak: =>
    echo "<h1>Operadores de comparación</h1>";
    $x = 5;
    $y =5;

    if(($x ==4) && ($y==5))
    {
        print("Estas en lo correcto");
    }
    echo"<br>";
    if (($x ==4) OR ($y ==3))
    {
        print("La segunda operación también es correcta");
    }

    //Operadores de union de cadenas
    // Para la Unión (concatenación) de cadenas
    // Para la unión de cadenas se emplea el punto (.)
    echo "<h1>Operadores de union de cadenas</h1><br>";
    $t = "Ejemplo";
    $w = "unión";
    $x = "de";
    $y = "cadenas";
    $z = " ";
    $resultado1 = $t;
    $resultado2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
    echo "<b><h1>";
    echo $resultado1;
    echo "<hr>";
    echo $resultado2;
    echo "</b></h1>";
    ?>

    
</body>
</html>