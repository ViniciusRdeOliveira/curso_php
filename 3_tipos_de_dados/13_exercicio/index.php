<?php 
/*crie um arquivo php com um array associativo de características de uma pessoa.
Faça um If checando se ela é maior de idade */

$vinicius = [
    "nome" => "Vinicius",
    "idade" => 33,
    "casado" => true,
    "altura" => 1.70

];


if($vinicius["idade"] >= 18){
    echo "Maior de idade";
} else{
    echo "Menor de idade";
}

?>