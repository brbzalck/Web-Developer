<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index do Cb Barbosa</title>
</head>
<body>

<?php

const NOME = 'barbosa';
echo NOME;
echo "<br />";

//nomes válidos de variaveis - não podem começar com caracteres especiais, letras maiusculas nem numero
$nomedevariavelValido = 'algum valor'; //variavel válida mas não segue uma boa prática 
//$2nomedeVariavelInvalida = 'algum valor'; //variavel inválida
//$@2nomedeVariavelInvalida = 'algum valor'; //variavel inválida
// define(NOME, "barbosa"); //uma constante
$nomeDeVariavelValido = 'algum valor'; 
$nome_de_variavel_valido = 'algum valor'; 

//comentário de uma linha utilizasse - duas barras //
# comentário de uma linha com cerquilha, hashtag ou jogo da velha #
/**
 * Comentário de várias linhas começa com barra invertida e dois asteriscos /** 
 * @uses MyClass::function Name
 * @abstract
 * @property
 */


 //laços de repetição
/**
 * @param $condicao
 * @var $variaveis
 */

$condicao = null; //tipo nulo

$int = 10; //int
$string = "barbosa"; //string
$bool = true;

$contador = 0;


 //while - enquanto condição = true repita
//  while($int > 0){
//     echo "O valor da váriavel é $int. \n";
//     echo "<br />";
//     echo "<hr />";
//     $int--; //decrementação
//  }

 //do while - faça enquanto condição = true, repete pelo menos uma vez mesmo se a condição for falsa
// do {
//     $contador += 1; //incrementação, no caso a mesma coisa que fazer $contador + 1; 
//     echo "passei aqui $contador vez(es)";
//     echo "<br />";
//     echo "<hr />";
    
//     if(($contador % 5) == 0){
//         $resto = $contador % 5;
//         echo "Contador: $contador, Resto = $resto";
//         $bool = false;
//     }
// } while($bool === true);

 //for = for($valorinicial, $condicao, $incremetacao/$decrementacao) - 3 parametros
// for($i = 0; $i <= $int; $i++){
//     echo "Valor = $i. <br /><hr />";
// }

//array de array de pessoas
$array = [
    [
        'nome' => 'barbosa',
        'idade' => 24,
        'secao' => 'DTSIC'
    ],
    [
        'nome' => 'felipe',
        'idade' => 'desconhecido',
        'secao' => 'DTSIC'
    ],
    [
        'nome' => 'lima rodrigues',
        'idade' => 24,
        'secao' => 'DTSIC'
    ],
];

 //foreach = laço de repetição com iterador
foreach($array as $valor){
    echo "Nome: {$valor['nome']}, idade: {$valor['idade']}, {$valor['secao']}<br /><hr />";
}
?>
    
</body>
</html>