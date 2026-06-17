<?php

// Cria e conecta ao banco de dados
$dbPath = '../serenatto.sqlite';
$pdo = new PDO("sqlite:$dbPath");
