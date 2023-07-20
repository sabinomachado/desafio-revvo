<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Course;
use App\Notification\WebNotification;
use App\Repository\CourseRepository;

class CourseController extends AbstractController
{
    private CourseRepository $courseRepository; 
    public $uploadDir = "assets/uploads/";

    

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function indexAction(): void
    {        
        $this->render('home/index', [
            'courses' => $this->repository->findAll(),
            ]);
        
    }
    public function createAction(): void
    {
        $uploadDir = "assets/uploads/";
        $action = "add";

        if (true === empty($_POST)) {
            $this->render('cursos/create', [
                'categories' => $this->repository->findAll(),
            ]);
            return;
        }

        $request = $_POST;

        $validacao = $this->repository->validacao($request, $action);

        if($validacao == true){
        $course = new Course();
        $course->setTitle($_POST['title']);
        $course->setSummary($_POST['summary']);
        $course->setLink($_POST['link']);
        $course->setUrlImage($_POST['url_image']);

        $this->repository->save($course);

        $this->render('home/index', [
            'courses' => $this->repository->findAll(),
            ]);
        }
        else{
            die("Erro! Procure o administrador do sistema!");
        }
        

        
        
    }
    public function editAction(): void
    {
        $uploadDir = "assets/uploads/";
        $action = "edit";

        $course = $this->repository->findOneById($_GET['id']);
        if (true === empty($_POST)) {
           
            $this->render('cursos/edit', [
                'courses' => $this->repository->findAll(),
                'course' => $course,
            ]);
            return;
        }else{
            $request = $_POST;
            $validacao = $this->repository->validacao($request, $action);
            
        }

        if($validacao == true){
           
            $course->setTitle($_POST['title']);
            $course->setSummary($_POST['summary']);
            $course->setLink($_POST['link']);
            $course->setUrlImage($_POST['url_image']);

            $this->repository->update($course);
    
            $this->render('home/index', [
                'courses' => $this->repository->findAll(),
                ]);
            }
            else{
                die("Erro! Procure o administrador do sistema!");
            }
            

            // $this->render('home/index', [
            //     'courses' => $this->repository->findAll(),
            //     ]);
    }
    public function removeAction(): void
    {
        var_dump("chegou aqui!");
        $this->repository->remove($_GET['id']);

        $this->render('home/index', [
            'courses' => $this->repository->findAll(),
            ]);
    }
    
}