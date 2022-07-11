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
    public function run(): void
    {
        $action = $this->action() . 'Action';

        $this->$action();
    }
    private function action(): string
    {
        return $action = !empty($this->request->getParam()['action'])
            ? $this->request->getParam()['action']
            : self::DEFAULT_ACTION;
    }
    private function homeAction(): void
    {
        $this->view->render('home');
    }
    private function showAction(): void
    {
        $this->view->render('show');
    }
}
