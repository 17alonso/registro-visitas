<!DOCTYPE html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Registro de Visitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f0cc9391cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/pruebalogin.css">
</head>
<?php
//header("location:/registro_visitas/Vista/menu.php");
require 'Controlador/C_validar_login.php';
?>

<body>
    <!-- <form method="POST">
        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
        <label for="usuario">Usuario</label>
        <div class="form-floating mb-3 contenedor">
            <input type="password" class="form-control" name="contra" id="contra" placeholder="Contraseña">
            <label for="contra">Contraseña</label>
            <i class="icono fa-solid fa-eye"></i>
        </div>

        </div>
        <center><button type="submit" id="btningresar" name="btningresar">Entrar</button></center>-->
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col d-flex  ">
                                <img src="Img/fondo_visita.jpeg">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="Img/logo_muni.png" style="width: 200px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Registro de Visitas</h4>
                                    </div>
                                    <form method="POST">
                                        <div>
                                            <?php
                                            if (!empty($_SESSION['sms_login'])) { ?>
                                                <div>
                                                    <?php echo $_SESSION['sms_login']; ?>
                                                </div>
                                                <?php
                                                unset($_SESSION['sms_login']);
                                            }
                                            ?>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="usuario" name="usuario"
                                                placeholder="Usuario">
                                            <label for="usuario">Usuario</label>
                                        </div>
                                        <div class="contenedor form-floating">
                                            <input type="password" class="form-control" name="contra" id="contra"
                                                placeholder="Contraseña">
                                            <label for="contra">Contraseña</label>
                                            <i class="icono fa-solid fa-eye"> </i>
                                        </div>
                                        <center><button type="submit" id="btningresar"
                                                name="btningresar">Acceder</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- </form> -->
</body>
<script src="Scripts/sms.js"></script>
<script src="Scripts/ver_contra.js"></script>

</html>