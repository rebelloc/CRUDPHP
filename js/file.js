//Insertar los datos
$(document).on("submit", "#spiderR", function(e){
 e.preventDefault();
 let name = $("#name").val();
 let lsname = $("#lastname").val();
 let pass = $("#pass").val()
 
 if($("#send").val() == "real"){
   $.ajax({
    url: 'controler/send.php',
    type: 'POST',
    dataType:'json',
    data: {
       name:name,
       lsname:lsname,
       pass:pass 
    },
    success(datos){
         console.log(datos);
    },
    error(){

    }
   });
 }
});

//Traer los datos

