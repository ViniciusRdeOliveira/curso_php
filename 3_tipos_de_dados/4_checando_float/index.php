<?php 

// #podemos validar se um dado é float através da funição is_float();
$a = "teste";
$b = 12.8;

if (is_float($a)){
    echo "$a é um float<br>"; 
}
else{
    echo "$a não é um float<br>"; 

}

if(is_float($b)){
    echo "$b é um float<br>"; 
} 

if(is_float(6565.63)){
    echo "é um float<br>"; 
}

?>