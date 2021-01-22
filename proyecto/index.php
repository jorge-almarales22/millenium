<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba tecnica Millenians</title>
    <script src="../librerias/materialize/jquery-3.4.0.min.js"></script>
    <script src="../js/funciones.js"></script>
    <!-- <script src="../librerias/materialize/js/materialize.min.js"></script> -->
    <!-- <link rel="stylesheet" href="../librerias/materialize/css/materialize.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .mensaje-exitoso{
            height: 45px;
            line-height: 45px;
            background-color: rgb(172, 238, 153);
            font-weight: 700;
            margin: 20px 0;
            text-align: center;
            display: none;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" id="tabla_registros">
            <div class="col-md-8">
                <div class="mensaje-exitoso" id="mensaje-exitoso">
                    Se guardo con exito el registro
                </div>
                <h5 class="text-primary my-3">Registrar Persona</h5>
                <form id="form_register" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" placeholder="Nombre..." id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apeliido</label>
                        <input class="form-control" type="text" name="apellido" placeholder="Apellido..." id="apellido">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block btn-lg" id="btn_guardar">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                        </tr>
                    </thead>
                    <?php
                    include "../conexion/conexion.php";
                    $sql = "SELECT * FROM personas";
                    $ejecutar = mysqli_query($conexion, $sql);
                    while($fila=mysqli_fetch_array($ejecutar)){
    
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $fila[0]; ?></td>
                            <td><?php echo $fila[1]; ?></td>
                            <td><?php echo $fila[2]; ?></td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
        $("#btn_guardar").on('click', function(e){
            e.preventDefault();
            agregar_datos();
        });
    });
</script>
<!-- <script>
    $(document).ready(function(){
        M.AutoInit();
    });
</script> -->
</body>
</html>