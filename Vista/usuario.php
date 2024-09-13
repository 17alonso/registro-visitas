<?php
include "../Vista/menu.php";
require_once '../Modelo/M_usuario.php';
if (empty($_SESSION['id'])) {
    //header("location:/registro_visitas");
    echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas'>";
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!--Inicio mensaje Toast Sweet alert-->
    <div>
        <?php
        if (!empty($_SESSION['sms_registro'])) { ?>
            <div>
                <?php echo $_SESSION['sms_registro']; ?>
            </div>
            <?php
            unset($_SESSION['sms_registro']);
        }
        ?>
    </div>
    <center><h3>MANTENIMIENTO USUARIOS</h3></center>
    <form action="../Controlador/C_agregar_usuario.php" method="POST">
        <div>
            <div class="d-grid gap-2  mx-auto p-2" style="width:21%">
                <input type="text" class="form-control " name="nombre_usuario" id="nombre_usuario" placeholder="Nombre"
                    required>
            </div>
            <div class="d-grid gap-2  mx-auto p-2" style="width:21%">
                <input type="text" class="form-control " name="apellido_usuario" id="apellido_usuario"
                    placeholder="Apellidos" required>
            </div>
            <div class="d-grid gap-2  mx-auto p-2" style="width:21%">
                <input type="text" class="form-control " name="usuario" id="usuario" placeholder="Usuario" required>
            </div>
            <div class="d-grid gap-2  mx-auto p-2" style="width:21%">
                <input type="text" class="form-control " name="contra" id="contra" placeholder="Contraseña" required>
            </div>
            <div class="mx-auto p-2">
                <select class="form-select mx-auto p-2" style="width:21%" name="nivel" id="nivel" required>
                    <option selected value="" disabled>Seleccione nivel de acceso</option>
                    <option value="2">Editor</option>
                    <option value="3">Observador</option>
                </select>
            </div>
        </div>
        <div class="d-grid gap-2 col-1 mx-auto">
            <button type="submit" class="btn btn-success btn-sm" name="btn_guardar" id="btn_guardar"
                value="ok">Registrar Usuario</button>
        </div>
    </form>
    <div style="margin-left:250px;margin-right:50px;">
        <table class="table table-striped table-hover table-sm" id="mitabla">
            <thead class="table-dark">
                <tr>
                    <th hidden scope="col" style="width: fit-content;">
                        <center>ID</center>
                    </th>
                    <th scope="col" style="width: fit-content">
                        <center>N°</center>
                    </th>
                    <th scope="col" style="width: fit-content">
                        <center>NOMBRE</center>
                    </th>
                    <th scope="col" style="width: fit-content">
                        <center>APELLIDOS</center>
                    </th>
                    <th scope="col" style="width: fit-content">
                        <center>USUARIO</center>
                    </th>
                    <th scope="col" style="width: fit-content">
                        <center>ACCESO</center>
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $consulta = new M_usuario();
                $resultado = $consulta->traer_usuario();
                $num = 1;
                while ($datos = $resultado->fetch_object()) { ?>
                    <tr>
                        <td hidden style="width: fit-content">
                            <center><?php echo $datos->id ?></center>
                        </td>
                        <td style="width: fit-content">
                            <center><?php echo $num; ?></center>
                        </td>
                        <td style="width: fit-content">
                            <center><?php echo $datos->nombre; ?></center>
                        </td>
                        <td style="width: fit-content">
                            <center><?php echo $datos->apellidos; ?></center>
                        </td>
                        <td style="width: fit-content">
                            <center><?php echo $datos->usuario; ?></center>
                        </td>
                        <td style="width: fit-content">
                            <center>
                                <?php 
                                if($datos->nivel == 2){
                                    echo "Editor";
                                }elseif($datos->nivel == 3){
                                    echo "Observador";
                                }
                                ?>
                            </center>
                        </td>
                        <td style="width: fit-content;">
                            <center> <a href="editar.php?id=<?php echo $datos->id ?>" class="btn btn-small btn-warning"
                                    title="Editar"><i class="fa-regular fa-pen-to-square"></i></a>
                            </center>
                        </td>
                    </tr>
                    <?php $num = $num + 1;
                } ?>
            </tbody>
        </table>
    </div>
</body>