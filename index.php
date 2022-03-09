<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <title>CRUD SQL Server and PHP!</title>
  </head>
  <body>
    <center class="mt-2"><h1>Making CRUD</h1></center>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle wit   h Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container row main bg-second mt-5">
       <row class="first-one col-md-6">
           <form class="form form-pr" id="spiderR">
              <div class="name mt-2 form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" placeholder="name" id="name" value="">
              </div>
              <div class="last-name mt-2 form-group">
              <label for="">Lastname</label>
              <input type="text form-control" class="form-control" placeholder="lastname" id="lastname" value="">
              </div>
              <div class="password mt-2 form-group">
              <label for="">Passcode</label>
              <input type="password" class="form-control" placeholder="passcode" id="pass" value="">
              </div>
              <div>
                 <button class="btn bg-primary mt-2 text-white" value="real" id="send">Enviar</button>
              </div>
           </form>
       </row>
       <row class="second-one col-md-6">
             <table class="table stripe">
                <thead>
                   <tr>
                      <th class="name"><center>name</center></th>
                      <th class="lastname"><center>lastname</center></th>
                      <th class="passcode"><center>passcode</center></th>
                      <th class="passcode"><center>Choose</center></th>
                   </tr>
                </thead>
                <tbody id=viendo>
                   
                </tbody>
             </table>
       </row>
    </div>
  </body>
  <script src="js/file.js"></script>

