><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    <h1>Estructura de control</h1>
    <?php
    //if, if-else
    echo"<h1>if</h1>";
    /* En PHP, la estructura de control if y if-else funciona de manera similar 
    a como se utiliza en Python. Aquí hay un ejemplo de cada una de ellas:*/
    //Ejemplo1
    $color = "rojo";
    if($color = "rojo")
    {
        print("Efectivamente, el color es rojo");
    }
    echo "<br>";

    //Ejemplo2
    $x = 10;
    $y = 15;
    if($x == $y)
    {
        print("x e y son iguales");
    }
    elseif($x > $y)
    {
        print("x es mayor que y");
    }
    elseif($x<$y)
    {
        print("x es menor que y");
    }
    echo "<br>";

    //Ejemplo3
    $edad = 20;
		if ($edad >= 18) {
			echo "<h1>Bienvenido a mi sitio web</h1>";
			echo "<p>Eres mayor de edad y puedes acceder a todo el contenido de este sitio.</p>";
		} else {
			echo "<h1>Lo siento, no puedes ingresar</h1>";
			echo "<p>Eres menor de edad y no puedes acceder a todo el contenido de este sitio.</p>";
		}
        echo "<br>";
        echo"<h1>while</h1>";

    //while
    //Indica que mientras no se cumpla una determinada condición, no se saldrá del bucle y no
    // saltara a la siguiente lineade codigo
    //Ejemplo1
    $x = 10;
    while(--$x)
    {
        echo "<big>";
        echo "<b>";
        print("Número: ".$x);
        echo "<br>";
        echo "<hr>";
    }





    $num = 1;
		while ($num <= 100) {
			if ($num % 2 == 0) {
				echo "<p>El número $num es par.</p>";
			} else {
				echo "<p>El número $num es impar.</p>";
			}
			$num++;
		}
    /*En este ejemplo, se define una variable $num con un valor inicial de 1. Luego se utiliza la estructura de control while para imprimir 10 párrafos diferentes, indicando si cada número es par o impar. El código dentro del bloque while se ejecutará repetidamente mientras 
    la condición $num <= 10 sea verdadera. En cada iteración, se verificará si el número actual es par o impar utilizando la estructura de control if. Si el número es par, se imprimirá un mensaje indicando que es par. De lo contrario, se imprimirá un mensaje indicando que es impar.*/
    //do-while


    //for
    // Sera utilizado para ejecutar un determinado número de veces hasta que se cumpla una
    // condición
    echo "<br>";
    echo "<h1>For</h1>";
    for($x=5; $x10; $x++)
    {
        print("Número: ".$x."<br>");
    }

    echo "<h1>requiere</h1>";

    //requiere
    // Sirve para incluir archivos en nuestras paginas y solo sera necesario hacer referencia
    // a este archivo con la instrucción requiere. Se usa principalmente para deinir variables 
    // y estas estarán listas una vez hagamos una llamada al archivo donde estén guardadas
    
    echo "<h1>include</h1>";
    //include
    // EL funcionamiento es igual que elde la instruccion requiere(), con la diferencia de que si 
    // puede procesar el código tantas veces como la llamemos a esa pagina externa.

    include("variables.php");
    echo "<br>";
    print("$x"."$z"."$y"); 
    
    
    echo "<br>";
    echo "<h1>switch</h1>";

    //switch
    // Se utiliza para comprobar un dato entrevarias posibilidades

    $color = "negro";
    switch($color)
    {
        case "blanco";
            $sector = "claro";
            break;
        case "naranja";
            $sector = "normal";
            break;
        case "negro";
            $sector = "oscuro";
            break;

    }
    print($sector);
    ?>  
</body>
</html>