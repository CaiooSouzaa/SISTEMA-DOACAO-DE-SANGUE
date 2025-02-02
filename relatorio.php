<?php

$idade = isset($_POST['idade']) ? (int)$_POST['idade'] : 0; // variavel para idade, o metodo post esta sendo usado para que as informações não sejam, exibidas na URL, atribui o tipo para inteiro
$peso = isset($_POST['peso']) ? (float)$_POST['peso'] : 0; // variavel para peso, atribui o tipo para float

if ($idade > 16 && $idade < 69 && $peso > 50) { //verifica se a idade esta dentro de 16 e 69 e se o peso é superior a 50
    header('Location: index.php');
} else {
    header('Location: index.php?erro=1');
}