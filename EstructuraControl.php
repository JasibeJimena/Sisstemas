<!DOCTYPE html> <!--informa al navegador qué versión de HTML (o XML) se usó para escribir el documento. -->
<html><!--es el código que se utiliza para estructurar y desplegar una página web y sus contenidos.-->
<head><!--es la primera de las dos partes en que se estructura un documento HTML. -->
    <title>Estructuras de Control</title><!--Titulo-->
</head>
<body> <!--es una prenda interior de una sola pieza que cubre el tronco, pero no las extremidades-->
    <!--Titulo en el centro de la pagina -->
<?php
echo "<div align=\"center\"><h1>-- Estructura de Control en PHP --</h1></div><br>"
?>
    <!-- Estructura if -->
    
    <h2>Estructura if</h2>

    <!--La estructura de control if permite la ejecución condicional de fragmentos de código.
    Las sentencias if se pueden incluir unas dentro de otras indefinidamente.-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="edad">Ingresa tu edad:</label>
    <input type="number" name="edad" id="edad">
    <input type="submit" name="submit_if" value="Comprobar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_if'])) {
        $edad = $_POST['edad'];
    if ($edad >= 18){
        echo 'Es mayor de edad';
    }
    }

?>


    <!-- Estructura Else -->
    <h2>Estructura Else</h2>
    <!--Esto es else para lo que es. else extiende una ifdeclaración para ejecutar una declaración en caso de que la 
    expresión en la ifdeclaración se evalúe como false.-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="edad">Ingresa tu edad:</label>
        <input type="number" name="edad" id="edad">
        <input type="submit" name="submit_else" value="Comprobar">
    </form>
    <?php
    $edad =17;
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_else'])) {
        $edad = $_POST['edad'];

        if ($edad >= 17) {
            echo "Eres mayor de edad.";
        } else {
            echo "Eres menor de edad.";
        }
    }
    ?>

    <!-- Estructura if-else -->
    <h2>Estructura elseif</h2>

    <!--como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, 
    extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como FALSE. -->
    <form action="edadif.php" method="GET">
        <!--Hipervinculo para que mande a otra pagina-->
        
        <label>Ingresa su edad: </label>
        <input type="text" name="edad">

        <input type="submit" name= "enviar" value="Enviar datos">
        
    </form>
    
    <!-- Estructura switch -->
    <h2>Estructura switch</h2>

    <!--es una forma de expresión de un anidamiento múltiple de instrucciones if ... else.-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="signo">Signo Zodiacal :</label>
        <input type="number" name="signo" id="signo" min="1" max="12">
        <input type="submit" name="submit_switch" value="Comprobar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_switch'])) {
        $dia = $_POST['signo'];
// CASE
//selecciona una entre un conjunto de expresiones a evaluar y devuelve el valor de retorno de la expresión seleccionada como su valor.
        switch ($dia) {
            case 1:
                echo "Es Aries.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 2:
                echo "Es Tauro.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 3:
                echo "Es Geminis.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 4:
                echo "Es Cancer.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 5:
                echo "Es Leo.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 6:
                echo "Es Virgo.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 7:
                echo "Es Libra.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 8:
                echo "Es Escorpio.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 9:
                echo "Es Sagitario.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 10:
                echo "Es Capricornio.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 11:
                echo "Es Acuario.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            case 12:
                echo "Es Pisis.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
            default:
                echo "Número de zodiaco es inválido.";
                break;//finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso.
        }
    }
    ?>

    <!-- Estructura while -->
    <h2>Estructura while</h2>

    <!--es una herramienta muy útil para ejecutar un bloque de código mientras se cumpla una determinada condición. Esta estructura se utiliza para repetir una serie de instrucciones 
    mientras la condición especificada sea verdadera.-->

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="limite">Ingresa el número límite:</label>
        <input type="number" name="limite" id="limite">
        <input type="submit" name="submit_while" value="Mostrar números">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_while'])) {
        $limite = $_POST['limite'];
        $i = 1;

        while ($i <= $limite) {
            echo $i . " ";
            $i++;
        }
    }
    ?>

    <!-- Estructura Do-while-->

    <h2>Estructura Do-while</h2>
    <!--es muy similar a la estructura while, excepto que la expresión 
    verdadera es verificada al final de cada iteración en lugar de al principio.-->
    <form action="do-while.php" method="GET">
        <!--Hipervinculo para que mande a otra pagina-->
        
        <label>Ingresa el Número de Instrucción: </label>
        <input type="text" name="edad">

        <input type="submit" name= "enviar" value="Enviar datos">
        
    </form>

      <!-- Estructura for -->
    <h2>Estructura for</h2>

    <!-- permite repetir una instrucción o una instrucción compuesta un número especificado de veces. El cuerpo de una instrucción for se ejecuta cero o más veces 
    hasta que una condición opcional sea false-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="iteraciones">Ingresa Número de iteración:</label>
        <input type="number" name="iteraciones" id="iteraciones">
        <input type="submit" name="submit_for" value="Realizar iteraciones">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_for'])) {
        $iteraciones = $_POST['iteraciones'];

        for ($i = 1; $i <= $iteraciones; $i++) {
            echo "Iteración " . $i . "<br>";
        }
    }
    ?>


    <!-- Estructura Foreach-->

    <h2>Estructura Foreach</h2>

    <!--es un tipo especial de bucle que permite recorrer estructuras que contienen varios elementos 
    (como matrices, recursos u objetos) sin necesidad de preocuparse por el número de elementos.-->

    <form action="foreach.php" method="GET"><!--Hipervinculo para que mande a otra pagina-->
        
        <label>Ingresa un punto: </label>
        <input type="text" name="edad">

        <input type="submit" name= "enviar" value="Enviar datos">
        
    </form>


    <!-- Estructura Breack-->
    <h2>Estructura Breack</h2>

    <!-- se utiliza para salir de un ciclo de forma prematura. Cuando se ejecuta
    la instrucción break, la ejecución del ciclo se detiene y se salta a la siguiente instrucción después del ciclo. En este ejemplo, condición es la condición del ciclo while que se ejecuta en cada iteración.-->
    <form action="breack.php" method="GET"><!--Hipervinculo para que mande a otra pagina-->
        
        <label>Ingresa un número: </label>
        <input type="text" name="edad">

        <input type="submit" name= "enviar" value="Enviar datos">
        
    </form>

<!-- Agregar color a la pagina-->

<?php
if(isset($body) || $body == true)
{
    echo '<body style="background-color:white">';
} else {
    echo '<body style="background-color: Aqua">';
}

?>

</body><!--Fin de la estructura de php y html-->
</html>
