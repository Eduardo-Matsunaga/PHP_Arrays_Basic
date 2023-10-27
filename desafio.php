<style>
    .card{
        display: flex;
        -ms-flex-align: center;
        font-family: Arial, Helvetica, sans-serif;
        margin: auto;
        max-width: 1200px;
        overflow: hidden;
    }
    h3, .produto-valor{
        font-family:'Times New Roman', Times, serif;
        font-size: 1.4rem;
        color: #155f67
    }
    .produto-valor{`
    font-weight: bold;
    }
    .card-item{
        border: 1px solid #ccc;
        margin-left: 10px;
        padding: 5px;
        border-radius: 5px;
        text-align: center;
        width: 350px;
        margin-top: 20px;
        overflow: hidden;
    }
    .card-item:hover{
        background-color: #f1f1f1;
        cursor: pointer;
    }
    .btn-comprar{
        background-color: #155f67;
        padding: 10px 20px;
        margin-bottom: 30px;
        border-radius: 5px;
        color: #fff;
        text-decoration: none;
    }
    .btn-comprar:hover{
        background-color: red;
    }
    h1{
        text-align: center;
        font-size: 1rem;
    }

    .container{
        max-width: 1200px;
        margin: auto;
    }
</style>

<h1>Insira um novo produto </h1>

<hr> 
    <div class ="container">
        <form method="POST">
        <label for="codigo">Código: <input type="text" name="codigo"></label>
        <label for="nome">Nome: <input type="text" name="nome"></label>
        <label for="descricao">Descrição: <input type="text" name="descricao"></label>
        <label for="valor">Valor: <input type="text" name="valor"></label>
        <button type="submit">Adicionar Produto</button>
        </form>
    </div>
<hr>

<?php

    $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';
    $valor = isset($_POST['valor']) ? $_POST['valor'] : '';

    $apagar =isset($_GET['apagar']) ? $_GET['apagar'] : '';



    //array produtos 
    $produtos = [
        ['id'=>'1','nome'=>'Notebook','valor'=>2589,'descricao'=>'Notebook que trava com campo minado'],
        ['id'=>'2','nome'=>'Impressora','valor'=>649,'descricao'=>'Impressora que emiti um som estranhamente alto ao imprimir'],
        ['id'=>'3','nome'=>'Mouse','valor'=>89.90,'descricao'=>'Mouse em bom estado, só funciona o Scrol'],
        ['id'=>'4','nome'=>'Monitor','valor'=>1500.00,'descricao'=>'Monitor usado em perfeitas condições, só não liga'],
    ];

    //Adicionando novo produto
    if ( $codigo != '' and $nome != '' and $valor !='' ){
        $novoProduto = ['id'=>$codigo, 'nome'=>$nome, 'descricao'=>$descricao,'valor'=>$valor];
        array_unshift($produtos,$novoProduto);
    }

    //Apagando Produto

    if ( $apagar == 'sim'){
        $novaLista = array_filter($produtos, function($produto){
            $codigo =$_GET['codigo'];
            return $produto['id']!=$codigo;
        });
        $produtos = $novaLista;
    }



    

    //  echo para imprimir o html usando e "\" para o php imprimir e não interpretar   
    echo " <h1>LISTA DE PRODUTOS</h1>";
    echo "<div class =\"card\">";

    //pegando valores do array e foreach usa a estrutura html para imprimir elementos do array
    foreach ($produtos as $key => $value) {
    echo "<div class =\"card-item\">";
    echo "<a href=\"desafio.php?apagar=sim&codigo={$value['id']}\">Apagar </a>";
    echo "<h3>{$value['nome']}</h3>";
    echo "<p class=\"produto-descricao\">{$value['descricao']}</p>";
    echo "<p class=\"produto-valor\"><span>R$</span>{$value['valor']}</p>";
    echo "<a href=\"\" class=\"btn-comprar\">Comprar</a>";
    echo "</div>";
    }

    echo "</div>";
?>
