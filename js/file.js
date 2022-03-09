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
     location.reload();
    //  $("#viendo").load(location.href + " #viendo");
    },
    error(){

    }
   });
 }
});

lista();
function lista(){
   $.ajax({
    url: 'controler/fetch.php', 
    type: 'POST',
    success: function(data){
      lista = JSON.parse(data)
      html = '';
      for(let i in lista.fila){
          html +=`<tr><td class=""><center>${lista.fila[i].nombre}</center></td>
          <td class=""><center>${lista.fila[i].passcode}</center></td>
          <td class=""><center>${lista.fila[i].lastname}</center></td>
          <td class="">
          <center>
            <button type="button" class="btn bg-warning" date-id="">Update</button>
            <button type="button" class="btn bg-warning" date-id="">Delete</button>
          </center>
          </td></tr>`;
      }
      $("#viendo").html(html);
    },
    error: function(){
      console.log("Wrong.....");
    }
   })
}



