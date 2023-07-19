<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Course;
use App\Notification\WebNotification;
use App\Repository\CourseRepository;

class CourseController extends AbstractController
{
    private CourseRepository $courseRepository;
  
    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function indexAction(): void
    {
        $tete = "Sabino Machado";
        
        $this->render('home/index', [
            'courses' => $this->repository->findAll(),
            ]);
        
    }
}