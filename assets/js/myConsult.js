 getData();

document.getElementById("form-control").addEventListener("keyup",function () {getData()},false);

function getData(){
    let input = document.getElementById("form-control").value;
    let content = document.getElementById("bodytable");
    let url = "../php/tabla-main.php"; 
    let formaData = new FormData ()

    formaData.append('form-control',input)

    fetch(url,{

        method: "POST",
        body: formaData
    }).then( response => response.json())
    .then( data => {
        content.innerHTML= data
    }).catch(err =>  console.log(err) )
}