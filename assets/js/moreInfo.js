$(document).ready(function() {
    // Agregar evento click usando delegación al cuerpo de la tabla
    $("#bodytable").on("click", ".moreInfo", function() {
        // Obtener el ID de la fila
        var row = $(this).closest("tr");
        var id = row.find("td:first").text();
        
        // Mostrar el ID en la consola (puedes hacer lo que necesites con él)
        console.log("ID de la fila clickeada: " + id);
        


        $.ajax({
            type: "POST",
            url: "../TSAltasSpyle/assets/php/fullRegUser.php",
            data:{
                idQuery : id,
            },
            success:  function (response){
        
                
                const status = JSON.parse(response)
                document.getElementById("popupReg").style.display = "flex";
                document.getElementById("principal").style.filter = "blur(5px)";
                //console.log(status);
                document.getElementById("idReg").value = status[0].id
                document.getElementById("statusReg").value = status[0].status
                document.getElementById("nameReg").value = status[0].name
                document.getElementById("surnameReg").value = status[0].surname
                document.getElementById("userNameReg").value = status[0].user_name
                document.getElementById("emailReg").value = status[0].email
                document.getElementById("extensionReg").value = status[0].extension
                document.getElementById("createReg").value = status[0].create_date
                document.getElementById("incomeReg").value = status[0].income_date
                document.getElementById("dptoReg").value = status[0].dpto
                document.getElementById("positionReg").value = status[0].position
                document.getElementById("pwReg").value = status[0].pw_extension
                document.getElementById("areaReg").value = status[0].area
        }
    })

        // Aquí puedes agregar más acciones con el ID capturado
    });
});


document.getElementById("closeButton").addEventListener("click",closePopUp)

function closePopUp(){
    document.getElementById("popupReg").style.display = "none";
    document.getElementById("principal").style.filter = "blur(0px)";

}