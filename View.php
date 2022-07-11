<?php

declare(strict_types=1);

namespace App\View;

class View
{
    public function render(string $page): void
    {
        require_once("Templates/layout.php");
    }
}
