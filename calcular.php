<?php 

if(isset($_POST["btncalcular"])){

    require_once 'logica/Cuestionario1.php';
    require_once 'logica/Cuestionario2.php';
    require_once 'logica/Nota1.php';
    require_once 'logica/Nota2.php';
    require_once 'logica/Proyecto.php';
    require_once 'logica/Final.php';

    $nota1 = $_POST["txttaller1"];
    $nota2 = $_POST["txttaller2"];
    $cuestionario1 = $_POST["txtcuestionario1"];
    $cuestionario2 = $_POST["txtcuestionario2"];
    $proyecto = $_POST["txtproyecto"];

    $objNota1 = new Nota1($n1, $n2, $c1, $c2, $p);
    $objNota2 = new Nota2($n1, $n2, $c1, $c2, $p);
    $objCuestionario1 = new Cuestionario1($n1, $n2, $c1, $c2, $p);
    $objCuestionario2 = new Cuestionario2($n1, $n2, $c1, $c2, $p);
    $objProyecto = new Proyecto($n1, $n2, $c1, $c2, $p);
    $objFinal = new Final ($n1, $n2, $c1, $c2, $p);

    echo "<b> La nota final es: </b>" . $objFinal->calcularFinal();

    if ($objFinal->calcularFinal()<1){

        echo "<b> Su nota es Super deficiente, materia perdida y debé pagar: 500.000. </b>";
    
    }else if ($objFinal->calcularFinal()<2){

        echo "<b> Su nota es Deficiente, materia perdida pero paga el 50%. </b>";
        $precio=500000;
        $final=$precio*0.5;
        echo "<b>Valor total: </b>".$final;

    }else if ($objFinal->calcularFinal()<3){
        
        echo "<b>Su nota es Insuficiente, materia perdida pero paga el 10%.<br>"."<br>";
        $precio=500000;
        $final=$precio*0.10;
        echo "<b>La valor a pagar :<br>".$final."<br>";
     
    }else if ($objFinal->calcularFinal()<4){
       
        echo "<b>Su nota es Aceptable, Materia aprobada.<br>"."<br>";
    }else if ($objFinal->calcularFinal()<5){
        echo "<b>Su nota es sobresaliente.<br>"."<br>";

    }else if ($objFinal->calcularFinal()==5){
        echo "<b>Su nota es Excelente y gana beca educativa.<br>"."<br>";

}else{
    echo "Error";
}

}

?>