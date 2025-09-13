<?php
$producto1 = $POST['producto 1'];
$preciopr1 = $POST['precio1'];

$producto2 = $POST['producto 2'];
$preciopr2 = $POST['precio2'];

$producto3 = $POST['producto 3'];
$preciopr3 = $POST['precio3'];

$suma=$preciopr1+$preciopr2+$preciopr3;
$descuento=$suma*0.16
$total=$suma-$descuento
echo "<h2>Productos registrados</h2>";
echo "Producto 1: $producto1. Valor: $preciopr1.";
echo "Producto 2: $producto2. Valor: $preciopr2.";
echo "Producto 3: $producto3. Valor: $preciopr3.";
echo "Precio total: $suma. (Descuento del 0.16) = $total.";
