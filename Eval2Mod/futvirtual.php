<?php
$codigo = 656446;
$codigoT=$codigo+1;

?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel=StyleSheet href="estilos.css" type="text/css">
        <title>Sistema de Tramite Documentario</title>
    </head>
    <body>
        <br>
    <h1 align="center">FUT Virtual</h1><br>
    <p>!Bienvenido al Sistema de Tramite documentario¡ </p>
    <p>Acontinuacion registre sus datos y el documento a tramitar. </p> 
    <p>Si ya tiene un tramite  <a class="btnConsulta" href="mesavirtual.php" target="_parent">Consulte</a>  el estado actual! </p>
    <br>
    
    <form class="frmRegistro"  action="p_futvirtual.php" method="post">
        <fieldset >
        <legend>Datos del Usuario</legend>
        <table align="center" class="tabl">
            <tr>
                <td>Tipo de Documento</td>
                <td>Nro de Documento</td>   
            </tr>
            <tr>
            <td><select name="lstTipoDoc">
                    <option value="Hospital Regional Huacho">Rectificacion de Matricula</option>
                    <option value="Posta de Salud Huaura">Servicios Medicos</option>
                    <option value="Posta de Salud Manzanares">Matricula Ingresantes</option>
                    <option value="Posta de Salud Manzanares">Matricula Pregrado</option>
                    <option value="Posta de Salud Manzanares">Matricula Posgrado</option>
                    <option value="Posta de Salud Huaura">Certificado de Estudios</option>
                </select> </td>  
            <td><input type="text" name="txtNroDoc" required="true" value="<?php echo $codigoT ?>  " readonly="readonly"></td>
            </tr>
            <tr>
                <td>APELLIDOS</td>
                <td>NOMBRES</td>
                <td>GMAIL</td>
                <td>CELULAR</td>
            </tr>
            <tr>
                <td><input type="text" name="txtapellidos" autocomplete="on" required="true" ></td>
                <td><input type="text" name="txtnombres" autocomplete="on" required="true" ></td>
                <td><input type="text" name="txtcorreo" autocomplete="on" required="true" ></td>
                <td><input type="text" name="txtcelular" autocomplete="on" required="true" ></td>
            </tr>
        </table>
       </fieldset>
    <br>
    <fieldset>
        <legend>Datos del Tramite</legend>
        <table align="center">
            <tr>
                <td>Titulo de Tramite</td>
                <td>Dependencia del tramite</td>
            </tr>
            <tr>
                <td><input type="text" name="txtTitulo" autocomplete="on" required="true" ></td>    
                <td><select name="lstArea">
                    <option value="Vicerrectorado Academico">Vicerrectorado Academico</option>
                    <option value="Vicerrectorado de Invetigacion">Vicerrectorado de Invetigacion</option>
                    <option value="Oficina de Servicios Informaticos">Oficina de Servicios Informaticos</option>
                    <option value="Oficina de Registros Academicos">Oficina de Registros Academicos</option>
                    <option value="Decanato de FIISI">Decanato de FIISI</option>
                </select> </td>  
            </tr>
            <tr> 
            <td>Descripcion del tramite</td>
            </tr>
            <tr> 
            <td><input type="text" name="txtdesc" autocomplete="on" required="true" ></td> 
            </tr>
        </table>
    </fieldset>
    <br>
            <input class="btnRegistrar" type="submit" value="Registrar">              
 
    </form>

    </body>

</html>
