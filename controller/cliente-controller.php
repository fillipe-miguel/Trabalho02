<?php

include "../model/cliente-class.php";

$cliente = new Cliente();

$cliente->setNome($_POST["f-nome"]);
$cliente->setRG($_POST["f-rg"]);
$cliente->setEmail($_POST["f-email"]);
$cliente->setTelefone($_POST["f-telefone"]);

$diasDeAcomodacao = $_POST["f-dias"];
$acomodacao = $_POST["f-acomodacao"];

$valorFinal = 0;

if ($acomodacao == 1) {
    $valorFinal = $diasDeAcomodacao * 100;
} elseif ($acomodacao == 2) {
    $valorFinal = $diasDeAcomodacao * 150;
} elseif ($acomodacao == 3) {
    $valorFinal = $diasDeAcomodacao * 180;
}

header("location:../view/resposta.php?nome=" . $cliente->getNome() . "&rg=" . $cliente->getRG() . "&email=" . $cliente->getEmail() . "&telefone=" . $cliente->getTelefone() . "&dias=" . $diasDeAcomodacao . "&valor=" . $valorFinal . "&acomodacao=" . $acomodacao);
