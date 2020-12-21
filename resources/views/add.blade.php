<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class=container>
      <h1>Unesite podatke o svojoj tvrtci</h1>

    </div>
  <div class=container>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <div class="mb-3">
    <label for="Ime_tvrtke" class="form-label">Ime tvrtke</label>
    <input type="text" class="form-control" id="Ime_tvrtke"name='ime' aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="oib" class="form-label">Oib tvrtke</label>
    <input type="text" class="form-control" id="oib"name='osobni' aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="mjesto_adreesa" class="form-label">Mjesto i adresa</label>
    <input type="text" class="form-control" id="mjesto_adreesa"name='mjesto' aria-describedby="emailHelp">
    
  </div>
  
  <div class="mb-3">
    <label for="po_br" class="form-label">Poštanski broj</label>
    <input type="text" class="form-control" id="po_br" name='postanski' aria-describedby="emailHelp">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php
// require 'config.php';


// $ime = mysqli_real_escape_string($link, $_REQUEST['ime']);
// $postanski = mysqli_real_escape_string($link, $_REQUEST['postanski']);
// $oib = mysqli_real_escape_string($link, $_REQUEST['osobni']);
// $mjesto_adresa = mysqli_real_escape_string($link, $_REQUEST['mjesto']);
 

// if(isset($_POST['submit']))
// {
// $sql = "INSERT INTO tvrtka (Ime_tvrtke, po_br, mjesto_adreesa, oib)
// VALUES ('$ime', '$postanski', '$mjesto_adresa', '$oib')";
// }





// mysqli_close($link);
?>