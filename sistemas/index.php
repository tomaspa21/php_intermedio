<?php include("header.php"); ?>


    <section class= "contenedor_carga">
        <h3> Carga de Componentes</h3>
        <form action="cargar_componente.php" method="post" class= "formulario">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="funcion" placeholder="Funcion">
            <input type="text" name="imagen" placeholder="Imagen">
            <textarea name="descripcion" id="" cols="19" rows="10"></textarea>
            <input type="submit" value="Cargar Componente">

        </form> 


    </section>
    <?php 
    if (isset ($_GET['ok'])){

        echo "<h3> Componente Cargado con Exito </h3>";
    }
    
    ?>



</body>
</html>