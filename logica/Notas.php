<?php 

class Notas{

    private $nota1;
    private $nota2;
    private $cuestinario1;
    private $cuestionario2;
    private $proyecto;
    private $final;

    public function __construct(){
        $parametros = func_get_args();
        $numero_parametros = func_num_args();
        $funcion_constructor = '__construct' . $numero_parametros;
        if(method_exists($this,$funcion_constructor)){
            call_user_func_array(array($this, $funcion_constructor), $parametros);
        }
      }

    public function __construct2($n1, $n2, $c1, $c2, $p){
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->cuestionario1 = $c1;
        $this->cuestionario2 = $c2;
        $this->proyecto = $p;
    }

    public function setNota1($valor){
        $this->nota1 =$valor;
    }

    protected function getNota1(){
        return $this->nota1;
    }

    public function setNota2($valor){
        $this->nota2 =$valor;
    }

    protected function getNota2(){
        return $this->nota2;
    }

    public function setCuestionario1($valor){
        $this->cuestionario1 =$valor;
    }

    protected function getCuestionario1(){
        return $this->cuestinario1;
    }

    public function setCuestionario2($valor){
        $this->cuestionario2 =$valor;
    }

    protected function getCuestionario2(){
        return $this->cuestionario2;
    }

    public function setProyecto($valor){
        $this->proyecto =$valor;
    }

    protected function getProyecto(){
        return $this->proyecto;
    }

    public function setFinal($valor){
        $this->final=$valor;
    }

    protected function getFinal(){
        return $this->final;
    }

}

?>