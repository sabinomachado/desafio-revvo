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
    {        
        $query = 'SELECT * FROM '.self::TABLE.' where deleted_at is null';

        $result = $this->pdo->query($query);
        $result->execute();
        
        return $result->fetchAll(PDO::FETCH_CLASS);
    }

    public function countAll(): int
    {
        $query = 'SELECT COUNT(*) FROM '.self::TABLE;

        return $this->pdo->query($query)->fetchColumn();
    }

    public function findOneById(string $id): Course
    {
        $query = 'SELECT * FROM '.self::TABLE." WHERE id='{$id}'";
 
        $result = $this->pdo->query($query);
        $result->execute();

        return $result->fetchObject(Course::class);
    }

    public function save(Course $course): void
    {
        $query = 'INSERT INTO '.self::TABLE."(title, summary, link, url_image) VALUES('{$course->getTitle()}', '{$course->getSummary()}', '{$course->getLink()}', '{$course->getUrlImage()}')";
        
        $this->pdo->query($query);
    }

    public function update(Course $course): void
    {
        if($course->getUrlImage() != null){
            $query = "UPDATE " . self::TABLE . " SET 
            title = '{$course->getTitle()}', 
            summary = '{$course->getSummary()}', 
            link = '{$course->getLink()}'
            url_image = '{$course->getUrlImage()}'
            WHERE id = {$course->getId()}";
        //$query = 'UPDATE '.self::TABLE." SET title='{$course->getTitle()}' WHERE id={$course->getId()}";
        }
        else {
           
            $query = "UPDATE " . self::TABLE . " SET 
            title = '{$course->getTitle()}', 
            summary = '{$course->getSummary()}', 
            link = '{$course->getLink()}'
            WHERE id = {$course->getId()}";
        }
        
        $this->pdo->query($query);
    }


    public function remove(string $id): void
    {
        $query = "UPDATE " . self::TABLE . " SET 
            deletado = '1'
            WHERE id = {$id}";

        $this->pdo->query($query);
    }

    public function validacao($request, $action){
        $validacao = true;
        
        if (!empty($request['title'])) {
            $title = $request['title'];
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request['title'])));
        } else {
            $titleError = 'Por favor digite o título do curso!';
            $validacao = false;
           
            
        }
        //summary
        if (!empty($request['summary'])) {
            $summary = $request['summary'];
        } else {
            $summaryError = 'Por favor digite o sumário do curso!';
            $validacao = false;
           
        }

      

        if (!empty($request['url_image']) && $action == "add") {
            $urlImage = $request['url_image'];
            
        } 
        if (empty($request['url_image']) && $action == "add") {
            $urlImageError = 'Por favor insira uma imagem!';
            $validacao = false;    
        }
        if ($validacao != false){
            return true;
        }else {
           return false;
        }
      
    }

    }
