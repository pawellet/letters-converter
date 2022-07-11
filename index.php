<?php

declare(strict_types=1);

namespace App;

require_once("./Request.php");
require_once("./Controllers/ConverterController.php");

use App\Controllers\ConverterController;
use App\Request\Request;




$request = new Request($_GET, $_POST, $_SERVER['REQUEST_METHOD']);


(new ConverterController($request))->run();
