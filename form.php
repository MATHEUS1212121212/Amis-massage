<link rel="stylesheet" href="FORMstyle.css">

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

