
<?php
// operadores numericos
// suma +,suma de a+b
// resta -nresta de a-b
// multipliacion *, producto de a*b
// division /, cociente de a/ b 
// modulo %, resto de division de a/ b
// ================================================================
// operadores de  asignacion e incremento

// = =asignacion
// += 
// -=
// /=
// .=
// ============================================================
// operadores de incremento
// a--pos decremento
// a++ pos incremento
// --a pre decremento
// ++a pre incremento

?>
<?php 


// preincremento primero hace el incremento despues la asignacion
$valor=20;
$nuevoValor=++$valor;

echo "valor es igual  ".$valor;
echo "\nnuevoValor es igual".$nuevoValor;

// posdecremento primero hace la asignacion luego el incremento
$valor1=100;
$nuevoValor1=$valor1++;

echo "\nvalor1 es igual  ".$valor1;
echo "\nnuevoValor1 es igual".$nuevoValor1;



?>


