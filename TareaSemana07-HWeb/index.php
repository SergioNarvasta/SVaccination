<?php
    include("cabecera.php")
?>
<main class="home__main">
    <div class="form__wrapper">
        <form action="i-alumno.php" method="post">
            <input type="text" name="paterno" placeholder="apellido paterno">
            <input type="text" name="materno" placeholder="apellido materno">
            <input type="text" name="nombre" placeholder="nombre">
            <select name="escuela" id="">
                <?php
                    include("conexion.php");
                    $sqle = "select * from escuela";
                    $fila = mysql_query($sqle, $cn);

                    while($r=mysql_fetch_array($fila)) {
                ?>
                    <option value="<?php echo $r["idescuela"] ?>">
                        <?php echo $r["escuela"] ?>
                    </option>
                <?php
                    }
                ?>
            </select>
            <input type="radio" name="sexo" value="M" selected>masculino
            <input type="radio" name="sexo" value="F">femenino
            <input type="tel" placeholder="celular" name="celular">
            <input type="email" placeholder="correo" name="mail">
            <select name="tipoparticipante">
                <?php
                    $sqle = "select * from participante";
                    $fila = mysql_query($sqle, $cn);

                    while($r=mysql_fetch_array($fila)) {
                ?>
                    <option value="<?php echo $r["idtipoparticipante"] ?>">
                        <?php echo $r["tipoparticipante"] ?>
                    </option>
                <?php
                    }
                ?>
            </select>
            
            <button type="submit">Registrarme</button>
        </form>
    </div>

</main>