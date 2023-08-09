
<!-- display -->
<?php

require_once './libs/smarty_4_3_1/config.php';
require_once 'model/model.php';

class control {
    private $objModel;
    private $objsmarty;

    function __construct(){
        $this->objModel = new model();
        $this->objsmarty = new config();
    }

    public function getObjModel(){
        return $this->objModel;
    }

    public function setObjModel($objModel){
        $this->setObjModel + $objModel;
    }

    //metodo ejecutar procesos
    public function ejecutar_procesos(){
        //Probando conexión
        //$this->objModel->bd_conectar();

        if(isset($_REQUEST['accion'])){
            $accion = $_REQUEST['accion'];

            switch ($accion) {
                case 'datosForm':
                $this->datosForm();
                break;
            
            }
        }else{
            
            $this->objsmarty->display("mainpage.tpl");

        }
    }

    public function datosForm(){

        $nombre    = $_REQUEST['nombre'];
        $email     = $_REQUEST['email'];
        $telefono  = $_REQUEST['telefono'];
        $mensaje   = $_REQUEST['mensaje'];

        $arrDatos = array();

        $arrDatos['nombre'] = $nombre;
        $arrDatos['email'] = $email;
        $arrDatos['telefono'] = $telefono;
        $arrDatos['mensaje'] = $mensaje;

        $rs = $this->objModel->m_datosForm($arrDatos);


        if($rs){
            echo '<script>alert("Mensaje enviado correctamente")</script>';
            $this->objsmarty->display("contacto.tpl");
        }else{
            echo '<script>alert("Error al enviar mensaje")</script>';
            $this->objsmarty->display("contacto.tpl");
        }
            
    }
   
    // este método crea el "enlace" entre los .tpl
    public function paginaInicio(){
        
        if (isset($_REQUEST['accion'])) {

            $accion = $_REQUEST['accion'];

            switch ($accion) {
                case 'home':
                    $this->ver_home();                
                    break;
                case 'contacto':
                    $this->ver_contacto();                
                    break;

                case 'ver_oppen':
                    $this->ver_oppen();                
                    break;
                
                case 'ver_barbie':
                   $this->ver_barbie();                
                   break;     

                case 'ver_bladerunner':
                    $this->ver_bladerunner();                
                    break; 

                case 'ver_indiana':
                    $this->ver_indiana();                
                    break;  

                case 'ver_johnwick':
                    $this->ver_johnwick();                
                    break; 

                case 'ver_misionimposible':
                    $this->ver_misionimposible();                
                   break; 

                case 'ver_sirenas':
                    $this->ver_sirenas();                
                    break; 

                case 'ver_spiderman':
                    $this->ver_spiderman();                
                    break;

            }
        } else{$this->objsmarty->display("mainpage.tpl");}
        

    }



    public function ver_home(){
        $this->objsmarty->display("mainpage.tpl");
    }
    public function ver_contacto(){
        $this->objsmarty->display("contacto.tpl");
    }
    
    public function ver_oppen(){
        $this->objsmarty->display("oppen.tpl");
    }
    public function ver_barbie(){
        $this->objsmarty->display("barbie.tpl");
    }

    public function ver_bladerunner(){
        $this->objsmarty->display("bladerunner.tpl");
    }

    public function ver_indiana(){
        $this->objsmarty->display("indiana.tpl");
    }

    public function ver_johnwick(){
        $this->objsmarty->display("johnwick.tpl");
    }

    public function ver_misionimposible(){
        $this->objsmarty->display("misionimposible.tpl");
    }

    public function ver_sirenas(){
        $this->objsmarty->display("sirenas.tpl");
    }

    public function ver_spiderman(){
        $this->objsmarty->display("spiderman.tpl");
    }    

}



?>