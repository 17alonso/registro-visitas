$('#dni_visitante').on('keyup', function (e) {
    const largominimo = 8;
    var input2 = $('#dni_visitante').val();
    if (input2.length == largominimo) {
        $('#validar_dni').removeClass('disabled').prop('disabled', false);
        var keycode = e.keyCode || e.which;
        if (keycode == 13) {
            dni = $('#dni_visitante').val();
            Swal.fire({
                title: "Buscando...",
                showConfirmButton: false,
                focusConfirm: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                }

            });
            $.ajax({
                url: '../Controlador/buscar_dni.php',
                type: 'post',
                data: 'dni_visitante=' + $('#dni_visitante').val(),
                dataType: 'json',
                success: function (a) {
                    if (a.numeroDocumento == dni) {

                        nombreM = a.nombres.toLowerCase();
                        aPm = a.apellidoPaterno.toLowerCase();
                        aMm = a.apellidoMaterno.toLowerCase();

                        nombreC = nombreM.split(' ').map(nombreM => {
                            return nombreM[0].toUpperCase() + nombreM.slice(1);
                        }).join(' ');

                        aPc = aPm.split(' ').map(aPm => {
                            return aPm[0].toUpperCase() + aPm.slice(1);
                        }).join(' ');

                        aMc = aMm.split(' ').map(aMm => {
                            return aMm[0].toUpperCase() + aMm.slice(1);
                        }).join(' ');

                        $('#nombre_visitante').val(nombreC);
                        $('#apellido_paterno').val(aPc);
                        $('#apellido_materno').val(aMc);
                        Swal.fire({
                            icon: "success",
                            title: "Encontrado",
                            showConfirmButton: false,
                            timer: 500
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "No se encontro el N° de DNI: <br><b>" + dni + "</b>",
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }
                }
            });
        }
    }
    else {
        $('#validar_dni').addClass('disabled').prop('disabled', true);
    }
});