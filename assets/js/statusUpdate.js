$(document).ready(function() {
    // Agregar evento click usando delegación al cuerpo de la tabla
    $("#bodytable").on("click", ".moreInfo", function() {
        // Obtener el ID de la fila
        var row = $(this).closest("tr");
        //var id = row.find("td:first").text();
        
        // Mostrar el ID en la consola (puedes hacer lo que necesites con él)
       // console.log("ID de la fila clickeada: " + id);
        


        // Aquí puedes agregar más acciones con el ID capturado
    });
});

