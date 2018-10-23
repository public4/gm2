<?php
ERROR_REPORTING(E_ALL);

$DIR = "/game";
$scheme = isset($_SERVER['HTTPS']) ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
DEFINE("URL", $scheme."://".$host);
DEFINE("DIR", $DIR);
DEFINE("ROOT", $_SERVER['DOCUMENT_ROOT'].$DIR);
DEFINE("MODEL_PATH", ROOT."/models/");
DEFINE("UPLOAD_PATH", ROOT."/upload/");
DEFINE("CONTROLLER_PATH", ROOT."/controllers/");
DEFINE("VIEW_PATH", ROOT."/views/");

//echo (realpath((ROOT.'/config/route.php')));

require_once realpath(ROOT."/config/route.php");
require_once realpath(ROOT."/config/dbconnect.php");
require_once realpath((CONTROLLER_PATH.'Controller.php'));
require_once realpath((MODEL_PATH.'Model.php'));
require_once realpath((VIEW_PATH.'View.php'));