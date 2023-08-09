<?php

require_once 'libs/smarty_4_3_1/Smarty.class.php';

class config{
    
    private $objSmarty;
    
    public function __construct() {
      $this->objSmarty = new Smarty();
      $this->setRutas();
    }

    public function setRutas() {
     
        $this->objSmarty->template_dir = 'view/templates';
        $this->objSmarty->compile_dir = 'view/templates_c';
        $this->objSmarty->config_dir = 'control/configs';
        $this->objSmarty->cache_dir = 'control/cache';

    }
    
    public function Display($archivo) {
            $this->objSmarty->display($archivo);
    }
    
    public function Assign($variable,$valor) {
        $this->objSmarty->assign($variable,$valor);
    }
   
    
}

?>