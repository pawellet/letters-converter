<?php

declare(strict_types=1);

namespace App\Controllers;

require_once("View.php");
require_once("Models/ConverterModel.php");


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
    public function run()
    {
        $action = $this->action() . 'Action';
        print_r($action);
    }
    private function action(): string
    {
        return $action = $this->request->getParam() ? $this->request->getParam() : self::DEFAULT_ACTION;
    }
}
