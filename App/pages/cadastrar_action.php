<?php
require './../config/config.php';
//$nomePizza = $_POST['nomePizza'];
//$valorPizza = $_POST['valorPizza'];
//$tamanhoPizza = $_POST['tamanhoPizza'];
//$descPizza = $_POST['descricaoPizza'];

//$_POST['nomePizza']

//echo "Dados enviados de cadastrar.php:
//Nome da Pizza:{$nomePizza}, Valor da Pizza {$valorPizza}, Tamanho da Pizza {$tamanhoPizza} e Descrição da Pizza:{$descPizza}";
//var_dump($_POST);

$nomePizza = filter_input( INPUT_POST,'nomePizza',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$valorPizza = filter_input( INPUT_POST,'valorPizza',FILTER_SANITIZE_FULL_SPECIAL_CHARS)

$tamanhoPizza = filter_input( INPUT_POST,'tamanhoPizza',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$descricaoPizza = filter_input( INPUT_POST,'descricaoPizza',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$_POST['valorPizza']

if ($nomePizza && $valorPizza && $descricaoPizza && $tamanhoPizza) {
     $sql=$pdo->prepare("INSERT INTO Pizzas(idUsuario, nomePizza, pathfoto, valor, tamanho, descricao) VALUES (:idUsuario,:nomePizza,:pathfoto,:valor,:tamanho,;descricao);");
     $sql->bindValue("idUsuario",1);
     $sql->bindValue("nomePizza",$nomePizza);
     $sql->bindValue("pathFoto","images/foto1.png");
     $sql->bindValue("valorPizza",$valorPizza);
     $sql->bindValue("tamanhoPizza",$tamanhoPizza);
     $sql->bindValue("descricaoPizza",$descricaoPizza);

     header("ocation: index.php");
     exit;

} else{
    //echo "Erro"
}
