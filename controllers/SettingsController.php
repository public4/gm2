<?php

class SettingsController extends Controller
{
    private $TplPath = "defaultView.php";
    
    public function __construct()
    {
        $this->view = new View();
        $this->model = new SettingsModel();
    }
    
    public function add()
    {
        for ($i=0; $i<250; $i++)
        {
            $this->model->addTestData();
            $pageData = ['message' => 'all data added successfully'];
            $pageData['_title'] = 'add action';
            $this->view->Render($this->TplPath, $pageData);
        }
    }
}