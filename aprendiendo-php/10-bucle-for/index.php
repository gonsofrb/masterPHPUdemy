<?php
/*
FOR

for(cariable contador, condición, actualizando contador){
    bloque instrucciones
}

*/

$resultado = 0;
for($i = 0; $i <= 100; $i++){
    $resultado += $i ;
  // echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado</h1>";

echo "<hr>";

//Ejemplo tabla de multiplicar

if(isset($_GET['numero'])){
    //cambiar tipo de dato
    $numero = (int) $_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

 //Inicializador---Condición----Actualización
for($contador = 1; $contador <= 10; $contador++){


    if($numero == 40){
        echo "No se peuden mostrar estas operaciones";
        break;
    }

    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}


?>