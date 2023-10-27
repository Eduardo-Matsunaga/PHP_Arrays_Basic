<?php
//array normal
$frutas = array("abacate","morango","laranja");
//print_r($frutas ); echo '<br> <br> <br>';


//arrays associativo

$carro = array('Marca'=>'Hyundai', 'Cor' => 'Vermelho', 'Ano' => '2020', 'Preço' => '100.000R$');
 //print_r($carro); echo '<br> <br> <br>';

 //arrays Multidimensionais

 $carros = array(
        'Esportivo'=> array('Marca'=>'Ferrari', 'Cor'=>'Vermelho','Ano'=>'2020', 'Preço'=>'100.000.000'),
        'Passeio'=> array('Marca'=>'Honda', 'Cor'=>'Preto','Ano'=>'2023', 'Preço'=>'190.000'),
        'Viagem'=> array('Marca'=>'Jeep', 'Cor'=>'Azul Escuro','Ano'=>'2023', 'Preço'=>'370.000'),
        'Ecônomico'=> array('Marca'=>'Fiat', 'Cor'=>'Vermelho','Ano'=>'2013', 'Preço'=>'20.000'),
 );


//Impressao dos arrays dos arrays

/*echo "{$carros ['Esportivo']['Marca']} <br>";
echo "{$carros ['Esportivo']['Cor']}<br>";
echo "{$carros ['Esportivo']['Ano']}<br>";
echo "{$carros ['Esportivo']['Preço']}<br> <br> <br>";

echo "{$carros ['Passeio']['Marca']} <br>";
echo "{$carros ['Passeio']['Cor']}<br>";
echo "{$carros ['Passeio']['Ano']}<br>";
echo "{$carros ['Passeio']['Preço']}<br> <br> <br>";

echo "{$carros ['Viagem']['Marca']} <br>";
echo "{$carros ['Viagem']['Cor']}<br>";
echo "{$carros ['Viagem']['Ano']}<br>";
echo "{$carros ['Viagem']['Preço']}<br> <br> <br>";

echo "{$carros ['Ecônomico']['Marca']} <br>";
echo "{$carros ['Ecônomico']['Cor']}<br>";
echo "{$carros ['Ecônomico']['Ano']}<br>";
echo "{$carros ['Ecônomico']['Preço']}<br>"; */

//Função de Manipulação de arrays

//arrays criados
$Esportivo = array('Ferrari', 'Vermelho','2020','100.000.000');
$Passeio = array('Honda', 'Preto','2023', '190.000');
$Viagem = array('Jeep', 'Azul Escuro','2023', '370.000');
$Economico = array('Fiat','Vermelho','2013', '20.000');

//Colocando todos arrays em um array apenas
$todosCarros = array_merge($Esportivo,$Passeio,$Viagem,$Economico);
//print_r($todosCarros);




//Retorna as chaves(índices)
//print_r (array_keys($Esportivo));

//Retorna os valores 
//print_r (array_keys($Esportivo));

//Retorna quantidade de itens
//echo count($todosCarros);
//echo count($Esportivo);

//verifica valor no array

/* if(in_array('Vermelho', $todosCarros)){
    echo "Existe! <br>";
} else{
    echo "Não Existe! <br>";
}

if(in_array($Esportivo, $todosCarros)){
    echo "Existe!";
} else{
    echo "Não Existe!";
}
*/

//Estrutura foreach
/*
foreach ($todosCarros as $chave => $valor) {
    echo $chave . ': ' . $valor . '<br>';
} */

/* foreach($Esportivo as $chave => $valor){
    echo $chave . ': '. $valor .'<br>';
} */

$produtos = [
    ['id'=>'1','nome'=>'Notebook','preco'=>2589],
    ['id'=>'2','nome'=>'Impressora','preco'=>649],
    ['id'=>'3','nome'=>'Mouse','preco'=>89.90],
    ['id'=>'4','nome'=>'Monitor','preco'=>1500.00],
    

];

//Foreach com number_format, pois contem valores float nos arrays 
foreach ($produtos as $produto) {
    echo 'ID: ' . $produto['id'] . ', Nome: ' . $produto['nome'] . ', Preço: ' . number_format($produto['preco'], 2) . '<br>';
}


$produtosFiltrados = array_filter($produtos,function($produto){
    return $produto['preco'] > 150 and $produto['preco'] < 1600;
});

print_r($produtosFiltrados);


