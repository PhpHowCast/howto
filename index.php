<?php
/**
 * Created by PhpStorm.
 * User: THINKPAD
 * Date: 25.12.13
 * Time: 18:51
 */
require_once("lib/Engine.php");
$engine = Engine::getInstance();
$page = $engine->getParam("page");
if($page != null){
    echo $page;
}
?>