<?php
$producto1 = $_POST['producto1'];
$preciopr1 = $_POST['preciopr1'];
$producto2 = $_POST['producto2'];
$preciopr2 = $_POST['preciopr2'];
$producto3 = $_POST['producto3'];
$preciopr3 = $_POST['preciopr3'];
$suma = $preciopr1 + $preciopr2 + $preciopr3;
$descuento = $suma * 0.16; 
$total = $suma - $descuento;

echo "<h2>Productos registrados</h2>";
echo "Producto 1: $producto1. Valor: $preciopr1.<br>";
echo "Producto 2: $producto2. Valor: $preciopr2.<br>";
echo "Producto 3: $producto3. Valor: $preciopr3.<br>";
echo "Precio total: $suma. (Descuento del 0.16) = $total.<br>";
?>
