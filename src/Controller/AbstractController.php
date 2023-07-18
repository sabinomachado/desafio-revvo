<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    public function render(string $viewName): void
    {
        include dirname(__DIR__, 2).'/views/_partials/header.php';
        include dirname(__DIR__, 2)."/views/{$viewName}.php";
        include dirname(__DIR__, 2).'/views/_partials/footer.php';
    }

    public function redirect(string $routeName): void
    {
        header('location: '.$routeName);
    }
}
