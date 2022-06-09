<html>
    <head>
        <meta charset="utf-8">
        <link rel=StyleSheet href="estilos.css" type="text/css">
        <title>Sistema de Tramite Documentario</title>
    </head>
    <body>
        <br><br>
    <h1 align="center">FUT Virtual</h1>
    <p>!Bienvenido al Sistema de Tramite documentario¡ </p>
    <p>Acontinuacion registre sus datos y el documento a tramitar. </p>
    <br>
    <a class="btnInicioreg" href="index.php" target="_parent">.:  Inicio  :.  </a>
    <br><br>
    <form class="frmRegistro"  action="p_registro.php" method="post">
        <fieldset >
        <legend>Datos del paciente</legend>
        <table align="center">
            <tr>
                <td>DNI</td>
                <td><input type="text" name="txtdni" required="true" ></td></td>
            </tr>
            <tr>
                <td>AP PATERNO</td>
                <td>AP MATERNO</td>
                <td>NOMBRES</td>
            </tr>
            <tr>
                <td><input type="text" name="txtpaterno" autocomplete="off" required="true" ></td>
                <td><input type="text" name="txtmaterno" autocomplete="off" required="true" ></td>
                <td><input type="text" name="txtnombres" autocomplete="off" required="true" ></td>
            </tr>
            <tr>
                <td>GENERO</td>
                <td>EDAD</td>
                <td>FECHA DE NACIMIENTO</td>
            </tr>
            <tr>
                <td><input type="radio" name="rbtgenero" value="M">Masculino
                    <input type="radio" name="rbtgenero" value="F">Femenino</td>
                <td><input type="text" name="txtedad"></td>
                <td><input type="date" name="fechanac"></td>
            </tr>
            <tr>
                <td>CELULAR</td>
                <td colspan="2">DIRECCION</td>  
            </tr>
            <tr>
                <td><input type="text" name="txtcelular"></td>
                <td><input type="text" name="txtdireccion"></td>
            </tr>
        </table>
       </fieldset>
    <br>
    <fieldset>
        <legend>Datos Especificos</legend>
        <table align="center">
            <tr>
                <td>Dosis</td>
                <td>Fecha de Dosis</td>
                <td>Centro de Vacunacion</td>
            </tr>
            <tr>
                <td><select name="txtdosis">
                    <option value="1era Dosis">1era Dosis</option>
                    <option value="2da Dosis">2da Dosis</option>
                    <option value="3era Dosis">3era Dosis</option>
                    <option value="4ta Dosis">4ta Dosis</option>
                </select></td>
                <td><input type="date" name="fechadosis"></td>
                <td><select name="lstcentrov">
                    <option value="Hospital Regional Huacho">Hospital Regional Huacho</option>
                    <option value="Posta de Salud Huaura">Posta de Salud Huaura</option>
                    <option value="Posta de Salud Manzanares">Posta de Salud Manzanares</option>
                </select> </td>
            </tr>
            <tr>
                <td colspan="6">Factor de Riesgo</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="lstfactores" value="Normal">Normal</td>
                <td><input type="checkbox" name="lstfactores" value="Sindrome de Down">Sindrome de Down</td>
                <td><input type="checkbox" name="lstfactores" value="Dialisis">Dialisis</td>
                <td><input type="checkbox" name="lstfactores" value="60-69 años">60-69 años</td>
                <td><input type="checkbox" name="lstfactores" value="70-79 años">70-79 años</td>
                <td><input type="checkbox" name="lstfactores" value="80 a mas">80 a mas</td>
            </tr>
            
        </table>
    </fieldset>
    <br>
            <input class="btnregistrar" type="submit" value="Registrar">              
 
    </form>

    </body>

</html>