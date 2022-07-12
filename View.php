<?php

declare(strict_types=1);

namespace App\View;

class View
{
    public function render(string $page, string $numbers = ""): void
    {
        require_once("Templates/layout.php");
    }
}
