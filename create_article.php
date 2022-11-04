
<?php

if (empty($_POST['fornamn'])) {
    echo "Error: Name required";
}
else {
 $fornamn = cleanInput ($_POST['fornamn']); 
}



include 'includes/config.php';

function cleanInput($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
    if(isset($_POST['submit'])){ 

    $fornamn = cleanInput ($_POST ['fornamn']);
    $efternamn= cleanInput ($_POST ['efternamn']);
    $alder= cleanInput ($_POST ['alder']);
    $stad= cleanInput ($_POST ['stad']);
    $postnummer= cleanInput ($_POST ['postnummer']);

 
    echo $fornamn . "<br>";
    echo $efternamn . "<br>";
    echo $alder . "<br>";
    echo $stad . "<br>";
    echo $postnummer . "<br>";


    $stmt_insertArticle = $conn->prepare("INSERT INTO people (fornamn, efternamn, alder, stad, postnummer) VALUES (:fornamn,:efternamn, :alder, :stad, :postnummer)");
        $stmt_insertArticle->bindParam(':fornamn', $fornamn, PDO::PARAM_STR );
        $stmt_insertArticle->bindParam(':efternamn', $efternamn, PDO::PARAM_STR );
        $stmt_insertArticle->bindParam(':alder', $alder, PDO::PARAM_STR );
        $stmt_insertArticle->bindParam(':stad', $stad, PDO::PARAM_STR );
        $stmt_insertArticle->bindParam(':postnummer', $postnummer, PDO::PARAM_STR );
     
        if ($stmt_insertArticle -> execute()){
            echo "Article created succesfully";

        }
       
    


   
    else {
        echo "no article has been sent <a href= 'from.php'" ;
    }
    
    echo "<a href ='index.php> Return </a>" ;
}

?>




