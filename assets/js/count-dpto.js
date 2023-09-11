$(document).ready(function () {

    let $dptosGrid = document.querySelector("#gridcontainer")
    $.ajax({
        type: "GET",
        url: "../TSAltasSpyle/assets/php/count-dpto.php",
        success: function (response){
        //console.log("--> "+ response+" <--")
        
        console.log(response);
        let aux = response;
            const deptos = JSON.parse(aux)
         
                let template= "";
        

                deptos.forEach(departamentos => {
                    template += `<div id="dptoInfo"><p>${departamentos.dpto}</p><p>${departamentos.cantidad_registros}</p></div>`
                    //console.log(`<div >${departamentos.dpto} <br>${departamentos.cantidad_registros}</div>`)
                })
        
                $dptosGrid.innerHTML = template;
            
            //console.log(deptos);
            
        }
        
        
        
        })



})