<?php

declare(strict_types=1);

namespace App\Repository;

interface CourseRepositoryInterface
{
    public function findAll();

    public function countAll();
}
