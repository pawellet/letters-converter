<?php

declare(strict_types=1);

namespace App;

use App\Controllers\ConverterController;
use App\Request\Request;

$request = new Request($_GET, $_POST, $_SERVER['REQUEST_METHOD']);


(new ConverterController($request));
