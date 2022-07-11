<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Request\Request;
use App\View\View;
use App\Model\ConverterModel;

class ConverterController
{
    private const DEFAULT_ACTION = 'home';


    private Request $request;
    private View $view;
    private ConverterModel $converterModel;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->view = new View();
        $this->converterModel = new ConverterModel();
    }
}
