<?php
require_once('../../config/db.php');
require_once('../../model/Produto.php');

// Conexão
$database = new Database();
$db = $database->getConnection();

// Instância do objeto Produto
$produto = new Produto($db);

// Lista de produtos
$stmt = $produto->readAll();
// conta qtd registro
$num = $stmt->rowCount();