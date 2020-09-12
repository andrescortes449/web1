<?php

$producto1='Arroz';
$producto2= 'Huevos';
$producto3= 'Frijolito';
$producto4= 'panela';
$producto5= 'sal';
$producto6= 'cafe';
$producto7= 'pasta';
$producto8= 'guaro';
$producto9= 'papas';
$producto10= 'carne';

$precio1= 6000;
$precio2= 7000;
$precio3= 14000;
$precio4= 4000;
$precio5= 3000;
$precio6= 8500;
$precio7= 6000;
$precio8= 15000;
$precio9= 6000;
$precio10= 25000;

$total= $precio1 + $precio2 + $precio3 + $precio4 + $precio5 + $precio6 + $precio7 + $precio8 + $precio9 + $precio10;

//echo('El total es de '.$total);

if($total<=80000)
{
    echo('Gracias por su compra');
}
else
{
    echo('Debes de pedir fiado');
}

?>