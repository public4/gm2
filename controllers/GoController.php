<?php

class GoController extends Controller
{
    private $TplPath = "defaultView.php";
    
    public function __construct()
    {
        $this->view = new View();
        $this->model = new GoModel();
    }
    
    public function DefaultAction()
    {
        echo "<pre>";
        $data['x'] = $this->model->GetJ(1, 'q');

        print_r($data);
    }
}