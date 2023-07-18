<?php

declare(strict_types=1);

namespace App\Controller;

class CourseController extends AbstractController
{
  
    public function __construct()
    {
    }

    public function indexAction(): void
    {
        $tete = "Sabino Machado";
        
        $this->render('home/index', [
            'teste' => "TESTE TESTE TESTE",
            'tete' => $tete,
            ]);
        
    }
}