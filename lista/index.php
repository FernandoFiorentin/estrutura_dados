<?php
include_once 'Lista.php';

$lista = new Lista();

$lista->insereApos('primeiro');
$lista->insereApos('segundo');
$lista->insereApos('terceiro');
$lista->insereApos('quarto');

echo $lista->toString();
?>