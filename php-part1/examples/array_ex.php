<?php
#Iniciando novo vetor:
$array = array();
$array = array(1,2,3,4,5,6,7,8,9,10=>10,12=>23);

#Iterando num vetor:
for($i=0;$i<10;$i++){
    $array[$i] = $i;
}

foreach ($array as $value) {
    echo $value;
}

#Vetores associativos:
$array = array("nome"=>"Marco","idade"=>23, "endereco"=>"Não fornecido");

#Tenho um vetor com todos os profissionais de uma fábrica. O dono da fábrica quer colocar no sistema a contagem de todos os funcionários.
count($array);

#O mesmo dono da fábrica agora quer saber se um determinado empregado faz parte da fábrica.
in_array("Marco",$array);

#Em um vetor um rapaizinho muito esperto guardou todos os valores de todas as contas de um banco, queremos saber quanto o banco tem total em dinheiro.
array_sum($array);




