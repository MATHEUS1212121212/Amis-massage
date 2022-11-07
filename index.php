<!DOCTYPE html>
<html>
<head>
	<title>Min hemsida </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" href="style.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>

<div id="wholeting">

<?php
include 'includes/config.php';


?>

<link rel="stylesheet" href="style.css">
<form method="post" action="create_article.php">
  <label for="Fornamn">Förnamn</label><br>
  <input class="colorstuff" type="text" id="Fornamn" name="Fornamn" value=""><br><br>
  
  
  <label for="Efternamn">Efternamn</label><br>
  <input class="colorstuff" type="text" id="Efternamn" name="Efternamn" value=""><br><br>
  
  
  <label for="Telefonnummer">Telefonnummer</label><br>
  <input class="colorstuff" type="text" id="Telefonnummer" name="Telefonnummer" value=""><br><br>
  
  <label for="Tid">Tid</label><br>
  <input class="colorstuff" type="text" id="Tid" name="Tid" value=""><br><br>
  
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Typ av massage
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div><br>
  
  <input id="date" type="date"><br><br>
  <input id="submit" type="submit" name="article-submit" value="Send">


</form>


</div>

</body>
</html>