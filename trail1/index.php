<?php
require('C:\smarty\libs\Smarty.class.php');
$smarty = new Smarty;
$value=" All is Well";
$smarty->assign("TrailVar",$value);
$smarty->display('index.tpl');