$(document).ready(function () {
    // Captura el evento de cambio en los campos de búsqueda
    $('input.form-control').on('input', function () {
      // Obtén los valores de búsqueda de cada campo
      var id = $('input.form-control').eq(0).val();
      var status = $('input.form-control').eq(1).val();
      var apellido = $('input.form-control').eq(2).val();
      var nombre = $('input.form-control').eq(3).val();
      var dpto = $('input.form-control').eq(4).val();
      var email = $('input.form-control').eq(5).val();
      var interno = $('input.form-control').eq(6).val();
  
      // Realiza la petición AJAX al archivo PHP que realiza la búsqueda en la base de datos
      $.ajax({
        url: '../TSAltasSpyle/assets/php/consulta-dmc.php', // Reemplaza 'buscar_registros.php' con la ruta al archivo PHP que realiza la búsqueda en la base de datos
        method: 'POST',
        data: {
          id: id,
          status: status,
          apellido: apellido,
          nombre: nombre,
          dpto: dpto,
          email: email,
          interno: interno,
        },
        success: function (response) {
          // Actualiza el cuerpo de la tabla con los resultados de la búsqueda
          $('#bodytable').html(response);
        },
      });
    });

  });
