<?php

    require_once 'libs/Smarty.class.php' ;
    $Smarty = new Smarty() ;
    $varphp = "Bonjour" ;
    $Smarty->assign('vartpl', $varphp) ;
    $Smarty->display('template/test.tpl') ;
    

?>
