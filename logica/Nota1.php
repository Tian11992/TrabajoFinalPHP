<?php 

require_once 'Notas.php';

class Nota1 extends Notas{

    public function __construct(){
        $parametros = func_get_args();
        $numero_parametros = func_num_args();
        $funcion_constructor = '__construct' . $numero_parametros;
        if(method_exists($this, $funcion_constructor)){
            call_user_func_array(array($this, $funcion_constructor), $parametros);
        }
    }

    public function __construct2($n1, $n2, $c1, $c2, $p){
        parent::__construct2($n1, $n2, $c1, $c2, $p);
    }

    public function calcularNota1(){
        return ($this->getNota1() * 0.20);
    }

}

?>