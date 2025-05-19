<?php 

$carro = [
    "marca" => "Wolksvagen",
    "modelo" => "Fusca",
    "ano" => 1980,
    "seguro" => true
];

print_r($carro);
echo "<br>";


// pode-se criar vaiáveis com o mesmo "nome" do elemento
$marca = $carro["marca"]; 
$modelo = $carro["modelo"];

echo "O carro é um $marca $modelo <br>";



?>


