<?php
    include("cabecera.php")
?>
<main class="home__main">
    <div class="form__wrapper">
        <form action="i-lote.php" method="post" enctype="multipart/form-data">
            Escoja su archivo
            <input type="file" name="file" id="archivo_lista">
            <button type="submit">Registrarme</button>
        </form>
    </div>

</main>