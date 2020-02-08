<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Notas</title>
        <script>
            function proceso(txttaller1,txttaller2,txtcuestionario1,txtcuestionario2,txtproyecto,boton){
            switch(boton){
                case "Calcular":
                var parametros ={
                    "txttaller1" : txttaller1,
                    "txttaller2" : txttaller2,
                    "txtcuestionario1" : txtcuestionario1,
                    "txtcuestionario2" : txtcuestionario2,
                    "txtproyecto" : txtproyecto,
                    "btncalcular" : boton
                }
                break;
            }
            $.ajax({
             
             data: parametros,
             url:'calcular.php',
             type:'post',
             beforeSend:
             function(){
                 $('#resultado').html('cargando...');
             },
             success:
             function(response){
                 $('#resultado').html(response);
             }
            });
        }
        </script>

    </head>
    <body>

        <h1>Ingrese sus notas.</h1>
        <h2>Información</h2>
        <h3>
            <p>0 a 0.99 : Super deficiente, Materia perdida y debe pagarla nuevamente.</p>
            1 a 1.99 : Deficiente, Materia perdida pero solo debe pagar el 50%.
            <p>2 a 2.99 : Insuficiente, Materia perdida pero paga el 10%.</p>
            3 a 3.99 : Aceptable, Materia aprobada.
            <p>4 a 4.99 : Sobresaliente.</p>
            5 : Excelente y gana beca educativa.
        </h3>

        <form name="form1" >
            <p>Ingrese nota del taller 1
                <input type="text" name="txttaller1" id="txttaller1">
            </p>
            <p>Ingrese nota del taller 2
                <input type="text" name="txttaller2" id="txttaller2">
            </p>
            <p>Ingrese nota del cuestionario 1
                <input type="text" name="txtcuestionario1" id="txtcuestionario1">
            </p>
            <p>Ingrese nota del cuestionario 2
                <input type="text" name="txtcuestionario2" id="txtcuestionario2">
            </p>
            <p>Ingrese nota del proyecto final
                <input type="text" name="txtproyecto" id="txtproyecto">
            </p>
            <p><input type="button" name="btncalcular" id="btncalcular" value="Calcular" 
                onclick="proceso($('#txttaller1').val(),$('#txttaller2').val(),$('#txtcuestionario1').val(),
                $('#txtcuestionario2').val(), $('#txtproyecto').val(), $('#btncalcular').val());">
            </p>
            
        </form>

        <br>
        <span id="resultado"></span>
        <script src="js/jquery-3.4.1.js"></script>
          
    </body>

</html>