<?php

class DefaultController extends Controller{
    private $TplPath = "defaultView.php";
    public function __construct(){
        $this->view = new View();
        $this->model = new DefaultModel();
    }

    public function DefaultAction(){

        $pageData = ['key1' => 'val1', 'key2' => 'val2'];
        $pageData['_title'] = 'Default action';
        $this->view->Render($this->TplPath, $pageData);
    }

}
