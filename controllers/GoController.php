<?php

class GoController extends Controller
{
    private $tplPath = "goView.php";
    // private $view;
    // private $model;
    
    public function __construct()
    {
        $this->view = new View();
        $this->model = new GoModel();
    }
    
    public function DefaultAction()
    {
        $pageData = $this->model->GetJ(8);
        $pageData['_title'] = 'Go';
        $this->view->Render($this->tplPath, $pageData);
        //print_r($pageData);
    }

    public function random()
    {
        $pageData = $this->model->GetRandom();
        $pageData['_title'] = 'Go Random';
        $this->view->Render($this->tplPath, $pageData);  
    }

    public function question()
    {
        echo (json_encode ($this->model->getRandomLevel(1), true));
    }

    /**
     * 
     * Вывод рандомного вопроса с указанием уровня вопроса
     */
    // public function level()
    // {
    //     $pageData = $this->model->GetRandom();
    //     $pageData['_title'] = 'Go Random';
    //     $this->view->Render($this->tplPath, $pageData);  
    // }
}