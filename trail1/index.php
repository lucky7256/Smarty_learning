<?php
require('C:\smarty\libs\Smarty.class.php');
$smarty = new Smarty;
$value=" All is Wellxcxcxc";
$value2=" All is all ok with that";
$smarty->assign("Trailvar",$value);
$smarty->assign("Trailvar2",$value2);
$smarty->display('index.tpl');