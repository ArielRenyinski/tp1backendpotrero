
<!-- TP1
    Profesor: Luis Amarilla
    Alumno: Luis Ariel Renyinski
    PLATAFORMA: POTRERO DIGITAL -->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>TP1</title>
    </head>

    <body>
    <!--1. Imprima por pantalla: “Hola mundo”. -->
        <?php
            echo "Hola mundo"
        ?>
    <br/>

    <!-- 2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla. -->
        <?php
            $saludo = "Hola mundo";
            echo $saludo;
        ?>
    <br/>

    <!-- 3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera. -->
        <?php
             $sillas= 40;
             $mesas= 10;

             echo "Suma: ". $sillas + $mesas . "<br/>";
             echo "Resta: " . $sillas - $mesas . "<br/>";
             echo "Multiplicación: " . $sillas * $mesas . "<br/>";
             echo "División entera: " . $sillas / $mesas . "<br/>";
             echo "Resto de la división entera: " . $sillas % $mesas;
        ?>
        <br/>

    <!-- 4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla. -->
    <?php
            $gradosCelsius = 20;
            $gradosFahrenheit = ($gradosCelsius * (9/5) + 32 );
            echo $gradosFahrenheit . " °F";
        ?>
    <br/>

    <!--5. Implementar algoritmos que permitan: -->
        <!-- a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm. -->
            <?php
                $baseRectangulo = 18;
                $alturaRectangulo = 12;
                $perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);
                echo "Perímetro: " . $perimetroRectangulo . "cm" . "<br/>";
                $areaRectangulo = $baseRectangulo * $alturaRectangulo;
                echo "Área: " . $areaRectangulo  . "cm" . "<br/>";
            ?>

        <!-- b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm. -->
            <?php 
                $pi = 3.14;
                $radio = 30;
                $perimetroCirculo = 2 * $pi * $radio;
                echo "Perímetro: " . $perimetroCirculo . "cm" . "<br/>";
                $areaCirculo = $pi * ($radio ** 2);
                echo "Área: ". $areaCirculo . "cm" . "<br/>";
            ?>
    </body>
</html>