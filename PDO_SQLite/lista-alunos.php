<?php

use MyProjects\PDO_SQLite\src\Domain\Model\Student;
use MyProjects\PDO_SQLite\src\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor\autoload.php';

$pdo = ConnectionCreator::createconnection();

//statement = declaração
$statement  = $pdo->query('SELECT * FROM students;');
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);// ou FETCH_CLASS caso as classes tenha o nome = nos bancos de dados.
$studentList = [];

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable(($studentData['birth_date']))
    );
}

var_dump($studentList);

