<?php

namespace MyProjects\PDO_SQLite\src\Infrastructure\Repository;

use MyProjects\PDO_SQLite\src\Domain\Model\Student;
use MyProjects\PDO_SQLite\src\Domain\Repository\StudentRepository;
use PDO;

class PdoStudentRepository implements StudentRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function allStudents(): array
    {
        $sqlQuerry = 'SELECT * FROM students;';
        $stmt = $this->connection->query($sqlQuerry);

        return $this->hydrateStudentList($stmt);
    }

    public function StudentsBirthAt(\DateTimeInterface $birthDate): array
    {
        $sqlQuery = 'SELECT * FROM students WHERE  birth_date = ?;';
        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->bindValue(1, $birthDate->fotmat('y-m-d'));
        $stmt->execute();

        return $this->hydrateStudentList($stmt);
    }

    private function hydrateStudentList(\PDOStatement $stmt): array
    {
        $studentDataList = $stmt->fetchAll(PDO::FETCH_OBJ);
        $studentList = [];

        foreach ($studentDataList as $studentData) {
            $student = new Student(
                $studentData['id'],
                $studentData['name'],
                new \DateTimeImmutable($studentData['birth_date'])
                );
        }

        return $studentList;
    }
    public function save(Student $student): bool
    {
        if ($student->id() === null) {
            return $this->insert($student);
        }
        return $this->update($student);
    }
    private function insert(Student $student): bool
    {
        $insertQuery = 'INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);';
        $stmt = $this->connection->prepare($insertQuery);
        if ($stmt == false){
            throw new \RuntimeException('Erro na Query do banco');
        }

        $success = $stmt->execute([
            ':name' => $student->name(),
            'birth_date' => $student->birthDate()->format('Y-m-d'),
        ]);
        if ($success) {
            $student->definineId($this->connection->lastInsertId());
        }
        return $success;
    }
    public function update(Student $student) : bool
    {
        $updateQuery = 'UPDATE students SET name = :name, birth_date = :birth_date WHERE id = :id;';
        $stmt = $this->connection->prepare($updateQuery);
        $stmt->bindValue(':name',$student->name());
        $stmt->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
        $stmt->bindValue(':id', $student->id(),PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function remove(Student $student): bool
    {
        $stmt = $this->connection->prepare("DELETE FROM students WHERE id = ?");
        $stmt->bindValue(1, $student->id(), PDO::PARAM_INT);
        return $stmt->execute();
    }
}