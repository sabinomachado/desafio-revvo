<?php

declare(strict_types=1);

namespace App\Repository;

use App\Connection\DatabaseConnection;
use App\Entity\Course;
use PDO;

class CourseRepository implements CourseRepositoryInterface
{
    private PDO $pdo;
    public const TABLE = 'courses';

    public function __construct()
    {
        $this->pdo = DatabaseConnection::open();
    }

    public function findAll(): array
    {        $query = 'SELECT * FROM '.self::TABLE.' where deleted_at is null';

        

        $result = $this->pdo->query($query);
        $result->execute();
        // var_dump($result->fetchAll());
        

        return $result->fetchAll(PDO::FETCH_CLASS);
    }

    public function countAll(): int
    {
        $query = 'SELECT COUNT(*) FROM '.self::TABLE;

        return $this->pdo->query($query)->fetchColumn();
    }

    public function findOneById(string $id): Course
    {
        $query = 'SELECT * FROM '.self::TABLE." WHERE id='{$id}';";

        $result = $this->pdo->query($query);
        $result->execute();

        return $result->fetchObject(Course::class);
    }

    public function save(Course $category): void
    {
        $query = 'INSERT INTO '.self::TABLE."(name) VALUES('{$category->getName()}')";

        $this->pdo->query($query);
    }

    public function update(Course $category): void
    {
        $query = 'UPDATE '.self::TABLE." SET name='{$category->getName()}' WHERE id={$category->getId()}";

        $this->pdo->query($query);
    }

    public function remove(string $id): void
    {
        $query = 'DELETE FROM '.self::TABLE." WHERE id={$id};";

        $this->pdo->query($query);
    }
}