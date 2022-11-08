<head>
<title> Programmering - Lånekalkylator </title>
<!-- Set charset to allow ÅÄÖ -->
<meta charset="UTF-8">
<link rel="stylesheet" href="css/FORMstyle.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>


<div id="wholeting">

<?php
include 'includes/config.php';


?>

<div id="formcss">
<form method="post" action="create_article.php">
  <label for="Fornamn">Förnamn</label><br>
  <input class="colorstuff" type="text" id="Fornamn" name="Fornamn" value=""><br><br>
  
  
  <label for="Efternamn">Efternamn</label><br>
  <input class="colorstuff" type="text" id="Efternamn" name="Efternamn" value=""><br><br>
  
  
  <label for="Telefonnummer">Telefonnummer</label><br>
  <input class="colorstuff" type="text" id="Telefonnummer" name="Telefonnummer" value=""><br><br>
  
  <label for="Tid">Tid</label><br>
  <input class="colorstuff" type="text" id="Tid" name="Tid" value=""><br><br>
  
  <label for="cars">Typ av massage:</label><br>

<select name="cars" id="massages">
  <option value="volvo">klassisk</option>
  <option value="saab">Sport massage</option>
  <option value="mercedes">Fysio therapi</option>
</select><br><br>


  
  <input id="date" type="date"><br><br>

  <input id="submit" type="submit" name="article-submit" value="Send">


</form>
</div>

</div>

