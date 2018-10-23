<?php
session_start();
require_once realpath(__DIR__.'/config/config.php');


Routing::route();