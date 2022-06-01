<?php

// TODO: gestion de la tabla tipo participante

    include("cabecera.php");
    $pdfIcon = "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/PDF_icon.svg/896px-PDF_icon.svg.png"
?>
<main class="home__main">
    <div class="report">
        <table align="center">
            <tr>
                <td>IdAlumno</td>
                <td>Apellidos y Nombres</td>
                <td>Escuela</td>
                <td>Sexo</td>
                <td>Celular</td>
                <td>Correo</td>
                <td>Participante</td>
                <td>Certificado</td>
            </tr>
            <?php
                include("conexion.php");
                
                $query = "select a.*, e.*, p.*
                    from alumno as a inner join escuela as e
                    on a.idescuela = e.idescuela 
                    inner join participante as p
                    on a.idtipoparticipante = p.idtipoparticipante";
                    
                $f = mysql_query($query, $cn);
                
                while($r = mysql_fetch_array($f)) {
            ?>
            <tr>
                <td><?php echo $r["idalumno"] ?></td>
                <td><?php echo $r["paterno"]." ".$r["materno"]." ".$r["nombre"] ?></td>
                <td><?php echo $r["escuela"] ?></td>
                <td><?php echo $r["sexo"] ?></td>
                <td><?php echo $r["celular"] ?></td>
                <td><?php echo $r["correo"] ?></td>
                <td><?php echo $r["tipoparticipante"] ?></td>
                <td>
                    <a class="button_diploma" href="diploma.php?codigo=<?php echo $r["idalumno"]?>" target="_blank">
                        <img src="<?php echo $pdfIcon?>">
                    </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <div class="pdf-group-fieldset">
        <h2>Ver pdf por escuela</h2>
        <form action="diploma.php" method="get">
            <select name="escuela" id="form-escuela">
                <?php
                    $query = "select * from escuela";
                    $f = mysql_query($query);

                    while ($r = mysql_fetch_array($f)) {
                ?>
                    <option value="<?php echo $r["idescuela"]?>"><?php echo $r["escuela"] ?></option>
                <?php
                    }
                ?>
            </select>
            <button class="btn-form-escuela" type="submit">VER PDFs</button>
        </form>
    </div>
    <div class="pdf-group-fieldset">
        <h2>Ver pdfs por participante</h2>
        <form action="diploma.php" method="get">
            <select name="tipoparticipante" id="form-escuela">
                <?php
                    $query = "select * from participante";
                    $f = mysql_query($query);

                    while ($r = mysql_fetch_array($f)) {
                ?>
                    <option value="<?php echo $r["idtipoparticipante"]?>"><?php echo $r["tipoparticipante"] ?></option>
                <?php
                    }
                ?>
            </select>
            <button class="btn-form-escuela" type="submit">VER PDFs</button>
        </form>
    </div>
</main>