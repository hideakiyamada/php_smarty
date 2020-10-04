<?php
require_once("../smarty-3.1.35/libs/Smarty.class.php");
$o_smarty=new Smarty();
$o_smarty->template_dir="../templates/";
$o_smarty->compile_dir="../templates_c/";
$o_smarty->assign("name", "World");
$o_smarty->display("hello.tpl");
?>