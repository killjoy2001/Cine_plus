<!-- metodos -->
<?php

require_once 'conn/conn.php';  //base de datos

class model{
    private $db;
    
    public function __construct() {
        $this->db = new conn();
    }
 
    //Funcion para probar conexion
    public function bd_conectar() {
        $this->db->conectar();

        echo "Conexion exitosa";
    }
    public function bd_asignar_asiento($ava,$seat,$movie) {
        $this->db->conectar();
        
        // insertar en (oppenheimer, barbie, spiderman etc...) en el asiento (a1,a2 a3, b1, b2 atc) el valor 'true, false', si está ocupado o no

        $sql = "insert into ".$movie." (".$seat.") value (".$ava.");";
        $rs = $this->db->ejecutarSql($sql);
        
        
        $this->db->desconectar();
        return $arrUsuario;    
    }

    public function m_datosForm($datos){

        $this->db->conectar();

        try {
            
            $sql = "insert into contacto (nombre, email, telefono, mensaje) values('".$datos['nombre']."','".$datos['email']."','".$datos['telefono']."','".$datos['mensaje']."');";
            $rs = $this->db->ejecutarSql($sql);
            //Para porbar que datos lleva el objeto a la db.
            // echo $sql;
            // exit();
            $this->db->ejecutarCommit();
            $this->db->desconectar();
        } catch (\Throwable $th) {
            throw $th;
        }

        return $rs;
    }
}

?>