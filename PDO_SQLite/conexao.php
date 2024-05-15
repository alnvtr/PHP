<?php
$pdo = \MyProjects\PDO_SQLite\src\Infrastructure\Persistence\ConnectionCreator::createconnection();


echo 'conectado';

$pdo->exec('DROP TABLE students');
// exec -> EXECUTA UM COMANDO SQL (INSERT,UPDATE, DELETE)(CREATE TABLE,DROP TABLE)
$pdo->exec('CREATE TABLE students(id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');
