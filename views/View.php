<?php

class View {
    public function render($tpl, $pageData){
        require_once VIEW_PATH."header.php";
        require_once VIEW_PATH.$tpl;
        require_once VIEW_PATH."footer.php";
    }
}

