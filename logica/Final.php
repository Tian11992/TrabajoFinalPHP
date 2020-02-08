<?php 

require_once 'Notas.php';

class Final extends Notas{

    public function __construct(){
        $parametros = func_get_args();
        $numero_parametros = func_num_args();
        $funcion_constructor = '__construct' . $numero_parametros;
        if(method_exists($this, $funcion_constructor)){
            call_user_func_array(array($this, $funcion_constructor), $parametros);
        }
    }

    public function __construct2($n1, $n2, $c1, $c2, $p, $final){
        parent::__construct2($n1, $n2, $c1, $c2, $p,$final);
    }

    public function calcularFinal(){
        return $this->getNota1()*0.20+$this->getNota2()*0.15+$this->getCuestionario1()*0.22+$this->getCuestionario2()*0.10+$this->getProyecto()*0.33;
    }

}

?>