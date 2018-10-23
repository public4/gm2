<?php

class Controller {

public $model;
public $view;
public $currentModel;
protected $pageData = array();

public function __constuct()
{
    $this->model = new Model();
    $this->view = new View();
}

}
