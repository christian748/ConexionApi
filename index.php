<?php 
if(isset($_POST['url'])):
$nombre=uniquid().".jpg";
$dir="imagenes/";
$imagen=file_get_contents(filename,data);
file_put_contents($dir, $nombre,$imagen);
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          
          <div class="form-group col-md-6">
            <h1 class="display-4">Crear publicacion</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>  
            <label >Busca tu imagen...</label>
            <input type="text" class="form-control" id="buscador" value="zapatos"  placeholder="Buscar" >
            <br>
            <button type="button" class="btn btn-primary btn-lg"value="buscar" onClick="buscarImagenes()">Buscar</button>
          </div>
          <div class=" col-md-9" class="erro" id="msj-error">
          </div>
        </div>

        <div class="row justify-content-center"> 
            <div class="col-12 p-5 row" id="listImagenes">

            </div>
            <div id="paginacion">

            </div>

        </div>

        </div>
    </div>

    <!-- SCRIPTS -->
  <script src="pixabay.js"></script>
  <!--<script src="jsCreatPub.js"></script>-->

   
</body>
</html>