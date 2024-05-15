<?php

namespace MyProjects\PDO_SQLite\src\Domain\Repository;

use MyProjects\PDO_SQLite\src\Domain\Model\Student;

Interface StudentRepository
{
    public function allStudents(): array;
    public function StudentsBirthAt(\DateTimeInterface $birthDate): array;
    public function save(Student $student): bool;
    public function remove(Student $student): bool;
}