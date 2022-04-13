<?php
$conn = new PDO("mysql:host=localhost;dbname=db", "root", "");
?>
<?php

// |=-=-=-=-=-=| Printando informações na tela utilizando PDO |=-=-=-=-=-=|

$query = $conn->prepare("SELECT * FROM users");
// =-=-=-=- Prepara a consulta -=-=-=-=

$query->execute();
// =-=-=-=- Executa a query -=-=-=-=

echo $query->fetchAll()[0]['Nome'];
// =-=-=-=- Printa a primeira informação da consulta -=-=-=-=

// Output: Kauã