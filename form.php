<head>
<title> Massage Side </title>
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
<form method="post" action="">

  <?php
  include 'header.php';

  ?>

  <label for="Fornamn">Förnamn</label><br>
  <input class="colorstuff" type="text" id="Fornamn" name="Fornamn" value=""><br><br>


  <label for="Efternamn">Efternamn</label><br>
  <input class="colorstuff" type="text" id="Efternamn" name="Efternamn" value=""><br><br>


  <label for="Telefonnummer">Telefonnummer</label><br>
  <input class="colorstuff" type="text" id="Telefonnummer" name="Telefonnummer" value=""><br><br>

  <label for="Starttid">Starttid</label><br>
  <input class="colorstuff" type="time" id="Starttid" name="Starttid" value=""><br><br>

  <label for="Sluttid">Sluttid</label><br>
  <input class="colorstuff" type="time" id="Sluttid" name="Sluttid" value=""><br><br>
  
  <label for="messages">Typ av massage:</label><br>

<select name="massages" id="massages">
  <option value="">klassisk</option>
  <option value="">Sport massage</option>
  <option value="">Fysio therapi</option>
</select><br><br>


  
  <input id="date" type="date" name="Datum"><br><br>

  <input id="submit" type="submit" name="article-submit" value="Send"><br>

  <?php
  include 'footer.php';
?>

</form>
</div>
</div>
</div>

<?php

function cleanInput($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(isset($_POST['article-submit'])){
	
	if (empty($_POST['Fornamn'])) {
    echo 'plz put information att all tings';
  }

	else {
		
	
	$Datum = cleanInput($_POST['Datum']);
  $Starttid = cleanInput($_POST['Starttid']);
	$Sluttid = cleanInput($_POST['Sluttid']);
	$TypAvMassage = cleanInput($_POST['massages']);
  $Fornamn = cleanInput($_POST['Fornamn']);
	$Efternamn = cleanInput($_POST['Efternamn']);
	$Telefonnummer = cleanInput($_POST['Telefonnummer']);
	

	echo $Fornamn . "<br>";
  echo $Efternamn . "<br>";
  echo $Starttid . "<br>";
  echo $Sluttid . "<br>";
  echo $TypAvMassage . "<br>";
	echo $Datum . "<br>";
  echo $Telefonnummer . "<br>";
	


	$stmt_insertbokningar = $conn->prepare("INSERT INTO bokningar (Datum, Starttid, Sluttid, TypAvMassage, Fornamn, Efternamn, Telefonnummer) VALUES (:Datum, :Starttid, :Sluttid, :TypAvMassage, :Fornamn, :Efternamn, :Telefonnummer)");
	$stmt_insertbokningar->bindParam(':Datum', $Datum, PDO::PARAM_STR);
	$stmt_insertbokningar->bindParam(':Starttid', $Starttid, PDO::PARAM_STR);
	$stmt_insertbokningar->bindParam(':Sluttid', $Sluttid, PDO::PARAM_STR);
	$stmt_insertbokningar->bindParam(':TypAvMassage', $TypAvMassage, PDO::PARAM_STR);
	$stmt_insertbokningar->bindParam(':Fornamn', $Fornamn, PDO::PARAM_STR);
	$stmt_insertbokningar->bindParam(':Efternamn', $Efternamn, PDO::PARAM_STR);
  $stmt_insertbokningar->bindParam(':Telefonnummer', $Telefonnummer, PDO::PARAM_STR);

	if($stmt_insertbokningar->execute()) {
		echo "<p id='color'>Article created successfully</p>";
		
	}

		
	else {
		echo "ERORR";
		echo "<a href='from.php'>Return</a>";
	}
	}
}


?>