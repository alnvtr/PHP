<?php

use MyProjects\PDO_SQLite\src\Domain\Model\Student;

require_once 'vendor\autoload.php';
//chamar a função de conexão ao SQLite
$pdo = \MyProjects\PDO_SQLite\src\Infrastructure\Persistence\ConnectionCreator::createconnection();

$student = new Student(
    null,
    "Alan Vitor",
    new \DateTimeImmutable("200-08-24")
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";

//preparando uma declaração para receber parametros e evitar um SQLInjection
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('y-m-d'));

/*OUTRA FORMA DE ESCREVER OS PARAMETROS

$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $student->name());
$statement->bindValue(2, student->birthDate()->format('y-m-d'));
echo $sqlInsert; exit();
*/

if ($statement->execute()) {
    echo "Aluno inserido com sucesso!";
}
