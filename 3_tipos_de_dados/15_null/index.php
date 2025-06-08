<?php

    echo null;
    $nome = null;
    
    if(is_null($nome)){
        echo "o valor é nulo";
    }

    $nome="Vinicius";

    echo "<br>";

    if(is_null($nome)){
        echo "o valor é nulo";
    }else{
        echo"Nome não é mais nulo";
    }




?>