<head>
<title> Massage Side </title>
<!-- Set charset to allow ÅÄÖ -->
<meta charset="UTF-8">
<link rel="stylesheet" href="css/Bokning.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<div class="k">
<?php include 'header.php';
include 'includes/config.php';
?>
<div class="margins">
<?php
$queryResult = $conn->query("SELECT * FROM bokningar");
	
	
    foreach ($queryResult as $row)
{
    echo "<div class='container'>";
    echo "<div class='row ok'><h2 id='sizechange'>" . $row['Datum'] . "</h2>";
    echo "<p class='col ok1'>" . $row['Fornamn'] . "</p>";
    echo "<p class='col ok1'>" . $row['Efternamn'] . "</p>";
    echo "<p class='col ok1'>" . $row['Telefonnummer'] . "</p>";
    echo "<p class='col ok1'>" . $row['TypAvMassage'] . "</p>";
    echo "<p class='col ok1'>" . $row['Starttid'] . "</p>";
    echo "<p class='col ok1'>" . $row['Sluttid'] . "</p>";
    echo "</div> </div>";
}
?>
</div>

<?php include 'footer.php';?>
</div>