$(document).ready(function() {


    $("#bodytable").on("click", ".changeStatus", function() {
        // Obtener el ID de la fila
        var row = $(this).closest("tr");
        var id = row.find("td:first").text();

 // Ejemplo: obtiene el valor de la primera celda
    let secondColumnValue = row.find("td:eq(1)").text(); // Ejemplo: obtiene el valor de la segunda celda
    let thirdColumnValue = row.find("td:eq(2)").text();
    let fourColumnValue = row.find("td:eq(3)").text(); 
    console.log(id)
    console.log(secondColumnValue)
    console.log(thirdColumnValue)
    console.log(fourColumnValue)
    $.ajax({
    type: "POST",
    url: "../TSAltasSpyle/assets/php/change-status.php",
    data:{
        idQuery : id,
         statusColum:secondColumnValue,
         surnameColum :thirdColumnValue,
        nameColum :fourColumnValue,
    },
    success: function (response){
    //console.log("--> "+ response+" <--")
    
        //console.log(response)
        alert(response);
        setTimeout(function(){
            location.reload();
        }, 1000);
// Cuando el usuario cierre el cuadro de diálogo de alerta, se ejecutará esta función
// window.onbeforeunload = function() {
//     // Recargar la página
//     window.location.reload();
//         }
        
            }    
        })
    })
})
    