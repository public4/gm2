<?php

class Routing {

    public static function route(){

        $route = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        //print_r($route);
        // echo "<hr>";
        // exit;


            $controller = "DefaultController";
            $model      = "DefaultModel";
            $action     = "DefaultAction";
            $param      = "";
        $i = count($route)-1;

        while($i>0) {
            if($route[$i] != '') {
                if(file_exists(CONTROLLER_PATH . ucfirst($route[$i]) . "Controller.php")) {
                    $controller = ucfirst($route[$i]) . "Controller";
                    if (file_exists(MODEL_PATH . ucfirst($route[$i]) . "Model.php")) 
                    {
                        $model =  ucfirst($route[$i]) . "Model";
                    }
                    if (isset($route[$i+1]) and (!empty($route[$i+1])))
                    {
                        $action = $route[$i+1];
                    }
                    if (isset($route[$i+2]))
                    {
                        $param = $route[$i+2];
                    }
                    break;
                } else {
                    // $action = $route[$i];
                    // $param = $route[$i+1];
                }
            }
            $i--;
        }
        // print "Ctrl: ".$controller."<br>";
        // print "Model: ".$model."<br>";
        // print "Action: ".$action."<br>";
        // print "Param: ".$param."<br>";
        // exit;
        require_once CONTROLLER_PATH.$controller.".php";
        require_once MODEL_PATH.$model.".php";

        $currentController = new $controller;
        //$currentController -> $action();
        if (method_exists($currentController, $action))
        {
            $currentController -> $action();
        }
    }

}
