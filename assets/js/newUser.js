$(document).ready(function () {

let $dptos = document.querySelector('#dptos')
let $area = document.querySelector('#area')
function cargarDptos () {

$.ajax({
type: "GET",
url: "../TSAltasSpyle/assets/php/consultaDptos.php",
success: function (response){
//console.log("--> "+ response+" <--")
let aux = response;
    const deptos = JSON.parse(aux)
 
        let template = '<option class "form-control" selected disabled>-- Seleccione --</option><option value="otro">Otro (Agregar nuevo departamento)</option>';


        deptos.forEach(departamentos => {
            template += `<option value="${departamentos.departamentos}">${departamentos.departamentos}</option>`
        })

        $dptos.innerHTML = template;
    
    //console.log(template);
}



})}

function cargarAreas(sendDatos){

    $.ajax({
        type: "POST",
        url: "../TSAltasSpyle/assets/php/consultaDptos.php",
        data: sendDatos,
        success:  function (response){
            console.log(response)
            let aux = response;
            const area = JSON.parse(aux)
 
        let template = '<option class "form-control" selected disabled>-- Seleccione --</option><option value="otro">Otro (Agregar Area)</option>';


        area.forEach(area => {
            template += `<option value="${area.area}">${area.area}</option>`
        })

        $area.innerHTML = template;
        }
    })

}

$dptos.addEventListener('change',function (){

        const deptoName = $dptos.value;

        const sendDatos = {
            'codigoDepto' : deptoName
        }

        cargarAreas(sendDatos);
})

$("#dptos").on("change", function () {
    var otroElementoDiv = $("#otroElementoDiv");
    if ($(this).val() === "otro") {
        otroElementoDiv.show();
    } else {
        otroElementoDiv.hide();
    }
})

$("#area").on("change", function () {
    var otroElementoDiv = $("#otroAreaDiv");
    if ($(this).val() === "otro") {
        otroElementoDiv.show();
    } else {
        otroElementoDiv.hide();
    }
})


cargarDptos();
});



document.getElementById("userName").addEventListener("click",generateUserMail);
document.getElementById("enviarForm").addEventListener("click",enviarForm);

document.getElementById("nextButton").addEventListener("click",okpopUp);

function generateUserMail(){
    let checkdata = document.getElementById("userName").value;
    //console.log("-"+checkdata+"-");
    
        let name = document.getElementById("name").value;
        let surname = document.getElementById("surname").value;
        let username = name[0]+surname;
        let mail = username+"@travelservices.com";


        console.log(mail);
        document.getElementById("userName").value = username;
        document.getElementById("mail").value = mail;
      
}


function enviarForm(){
let dataUpdateUser = [];
    dataUpdateUser[0]=document.getElementById("name").value
    dataUpdateUser[1]=document.getElementById("surname").value
    dataUpdateUser[2]=document.getElementById("dptos").value
    dataUpdateUser[3]=document.getElementById("area").value
    dataUpdateUser[4]=document.getElementById("position").value
    dataUpdateUser[5]=document.getElementById("userName").value
    dataUpdateUser[6]=document.getElementById("mail").value
    dataUpdateUser[7]=document.getElementById("date").value
    dataUpdateUser[8]=document.getElementById("extension").value
    dataUpdateUser[9]=document.getElementById("ext_pw").value

    console.log(dataUpdateUser)
    $.ajax({
        type: "POST",
        url: "../TSAltasSpyle/assets/php/updateUser.php",
        data:{
            userData : dataUpdateUser,
        },
        success:  function (response){
    
            //let aux = response;
            const status = JSON.parse(response)
           // console.log(response)
            //console.log(status[0].code)

            document.getElementById("popup").style.display = "flex";
            document.getElementById("statusID").innerText = status[0].status;
            document.getElementById("codeID").innerText = status[0].code;
            document.getElementById("descriptionID").innerText = status[0].description;
            
            console.log ("punto de control")

    }
})

}


function okpopUp () {

    location.reload();


}

