<?php

use MyProjects\PDO_SQLite\src\Domain\Model\Student;
use MyProjects\PDO_SQLite\src\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createconnection();
$student_repository = new PdoStudentRepository($connection);

//realiza processos de definição de curso

//inserir os alunos da turma

$connection->beginTransacion();
try {
    $aStudent = new Student(null,
        'Nico Steppat',
        new DateTimeImmutable('1985-05-01')
    );
    $student_repository->save($aStudent);

    $anotherStudent = new Student(null, 'Sergio Lopes', new DateTimeImmutable('1985-05-01'));

    $student_repository->save($anotherStudent);

    $connection->commit();

} Catch (\RuntimeException $e) {
    echo $e->getMessage();
    $connection->rollback();
}
$connection->commit();
//desfaz todas as transações feitas
//$connection->rollBack();



