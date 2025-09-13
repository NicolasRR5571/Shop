<?php
$producto1 = $POST['producto1'];
$preciopr1 = $POST['preciopr1'];

$producto2 = $POST['producto2'];
$preciopr2 = $POST['preciopr2'];

$producto3 = $POST['producto3'];
$preciopr3 = $POST['preciopr3'];

$suma=$preciopr1+$preciopr2+$preciopr3;
$descuento=$suma*0.16
$total=$suma-$descuento
echo "<h2>Productos registrados</h2>";
echo "Producto 1: $producto1. Valor: $preciopr1.";
echo "Producto 2: $producto2. Valor: $preciopr2.";
echo "Producto 3: $producto3. Valor: $preciopr3.";
echo "Precio total: $suma. (Descuento del 0.16) = $total.";
