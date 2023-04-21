<?php

define('PI', 3.1416);

echo "El valor de la constante es " . PI;

// OJO que si queremos imprimir la constante dentro de alguna etiqueta html tenemos que concatenar
echo "<h2>PI</h2>";  // Imprimi PI en texto plano
echo "<h2>". PI ."</h2>";  // ASÍ SI FUNCIONA !!

