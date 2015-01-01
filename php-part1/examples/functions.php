<?php

#Function simples

function soma($a,$b){
    return $a+$b;
}




#####LAMBDA E CLOSURE de leve:
$soma = function($a,$b){
    return $a+$b;
};
$soma(12,12);

$mensagem_diaria = array(
        function(){
            echo "Ruau";
        },
        function(){
            echo "Alou?";
        },
        function(){
            echo "Que isso...";
        }
);

$choice = rand( 0, 2 );
$mensagem_diaria[$choice]();


#####Callback
$input = array(1, 2, 3, 4, 5, 6);

// cria uma nova função anônima e atribui a uma variável
$filter_even = function($item) {
    return ($item % 2) == 0;
};

// constrói o array_filter com os dados e a função
$output = array_filter($input, $filter_even);

// a função não precisa ser atribuída a uma variável. Assim também é válido:
$output = array_filter($input, function($item) {
    return ($item % 2) == 0;
});

print_r($output);

####Closure simples
$name = "Marco";
$momento = "dia";
$saudacoes = function() use ($name,$momento){
    echo "Olá $name tenha um bom $momento";
};

## Criando sua própria função com callback

$names = array("Marco","Hiolanda", "Gabriel", "Jeff");

function iteratorTabajara($array,$callback = false){
    if(is_callable($callback)){
        foreach ($array as $value) {
            call_user_func($callback,$value);
        }
    }
}

$myNameIs = function ($name){
    echo "Meu nome eh $name\n";
};

iteratorTabajara($names,$myNameIs);

## Closure High Level
$people = array(
  array( "nome" => "Marco", "idade" => 23 ),
  array( "nome" => "Hiolanda", "idade" => 25 )
);

function getSortFunction( $sortKey ) {
  return function( $personA, $personB ) use ( $sortKey ) {
    return ( $personA[$sortKey] < $personB[$sortKey] ) ? -1 : 1;
  };
}

echo "Ordenado por nome:<br><br>";
usort( $people, getSortFunction( "nome" ) );
print_r( $people );
echo "<br>";

echo "Ordenado por idade:<br><br>";
usort( $people, getSortFunction( "idade" ) );
print_r( $people );
echo "<br>";
