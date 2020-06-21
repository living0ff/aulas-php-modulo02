<?php

//$numero = 256;
//const NOME_COMPLETO = 'hsing god';
//echo NOME_COMPLETO;
//echo $numero;

//$jogos = array('Resident Evil', 'Minecraft', 'Combat Arms');
//$jogos = ['Resident Evil', 'Minecraft', 'Combat Arms'];
//echo json_encode($jogos);
//echo $jogos[0];

 $clientes = [
['Lucas', 'Rio de Janeiro'],
['Lucas', 'Rio de Janeiro'],
['Lucas', 'Minas'],
['Lucas', 'Rio de Janeiro'],
];

/*
function dd($p = []){
    echo '<pre>';
    print_r($p);
    echo '</pre>';
    
};

*/

/*$idade = 18;

if($idade >= 18) {
    echo 'Pode entrar';
}else {
    echo 'Não pode entrar';
}*/
/*
$periodo = 'NOITE';

switch(strtolower($periodo)) {
    case 'manha':
        echo 'Bom dia!';
    break;
    case 'tarde':
        echo 'Boa tarde!';
    break;
    case 'noite':
        echo 'Boa noite!';
    break;
    default:
    echo 'Período inexistente.';      
}
*/

/*
for($i = 0; $i < count($clientes); $i++){
    echo $clientes[$i][0] . '<br>';
}
*/

foreach($clientes as $clientes) {
    echo $clientes[1] . '<br>';
}