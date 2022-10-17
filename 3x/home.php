<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Home</title>
</head>
<body>



<?php
session_start();

if(isset($_SESSION["user"])){
  $d = $_SESSION["user"];

  ?>
<h1><?php echo $d["fname"]; ?></h1>
<?php 
}





?>
<div class="col-6">
<button type="button" onclick="logout();" class=" col-12 btn btn-dark d-grid">logout</button>
</div>


<script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
</body>
</html>