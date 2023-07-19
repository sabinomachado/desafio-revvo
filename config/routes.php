<?php

use App\Controller\CourseController;

function mountRoute(string $controllerName, string $methodName): array
{
    return [
        'controller' => $controllerName,
        'method' => $methodName.'Action',
    ];
}

return [
    '/' => mountRoute(CourseController::class, 'index'),
    '/cursos/add' => mountRoute(CourseController::class, 'create'),
    '/cursos/excluir' => mountRoute(CourseController::class, 'remove'),
    '/cursos/editar' => mountRoute(CourseController::class, 'edit'),
];