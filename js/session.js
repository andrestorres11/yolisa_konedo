function login(){
    alert("tratando de iniciar sesion");
}

function cerrarSession(){
    //se hace ajax al modelo usuario
    let data = {
        "op":2,
        "ajax": "on"
    }
    $.ajax({
        url: "session.php",
        data: data,
        success: function(result){
            if (result) {
                window.location.reload();
            }else{
                alert("ocurrio un error al cerrar session");
            }
        }
    });
}

$( document ).ready(function() {
     //se hace ajax al modelo usuario
    //  let data = {
    //     "op":"1",
    //     "ajax": "on"
    // }
    // $.ajax({
    //     url: "principal.php",
    //     data: data,
    //     success: function(result){
    //         console.log(result);
    //         if (result) {
    //             console.log("hola");
    //             $("#container-principal").html(result);
    //         }else{
    //             alert("ocurrio un al pintar la información");
    //         }
    //     }
    // });
});
