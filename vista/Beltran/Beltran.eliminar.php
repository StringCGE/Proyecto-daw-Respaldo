<?php require_once 'vista/templates/encabezado.php'; ?>

<?php
        require_once ("Beltran_04_CRUD__Conexion.php");
        if (isset($_GET['id'])) {
            $id = htmlentities($_GET['id']);
            $sql = "select * from reservacion where id_reservacion = $id";
            $resultado = mysqli_query($conex, $sql);

            while ($fila = mysqli_fetch_assoc($resultado)) {
                ?>
                <div>
                    <form method="post">
                        <label>Id:</label><input type="text" name="txtid" value="<?php echo $fila['id_reservacion'] ?>" readonly>
                       <label>Usuario:</label><input type="text" name="txtusuario" value="<?php echo $fila['apellidos_nombres'] ?>" readonly>
                        <input type="submit" value="Eliminar">
                    </form>

                </div>
            <?php
            }
        }
        ?>
        <?php
        if (isset($_POST['txtid']) && !empty($_POST['txtid'])) {
            $id = htmlentities($_POST['txtid']);

            $sql = "delete from reservacion where id_reservacion = $id ";

            mysqli_query($conex, $sql);

            header("location:Beltran_04_CRUD_Listar.php");
        }
        ?>

<?php  require_once 'vista/templates/piedepagina.php'; ?>