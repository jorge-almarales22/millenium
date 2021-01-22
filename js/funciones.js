function agregar_datos(){
    var datos=$("#form_register").serialize();
    document.getElementById('mensaje-exitoso').style.display = 'block';
    $.ajax({
        method: "POST",
        url: "../proyecto/insertar.php",
        data: datos,
        success: function(e) {
            $("#tabla_registros").load('../proyecto/index.php');

        }
    });
}