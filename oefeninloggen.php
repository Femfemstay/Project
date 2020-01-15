<!DOCTYPE html>
<html>
<head>
	<title>oefeninloggen</title>
</head>
<body>

	<form method ="POST" action ="oefeninloggen.php">
		<h3>Naam:</h3>
		<input type="text" name="gebruikersnaam">
		<br>
		<h3>Wachtwoord:	</h3>
		<input type="text" name="wachtwoord">
		<br>
		<button type ="submit" name = "submit">aanmelden</button>
		<br>
		<br>
		<button type ="submit" name="login">inloggen</button>
	</form>

	<?php
  // connectie naar database maken

   $dbServername = "localhost";
   $dbGebruikersnaam = "root";
   $dbWachtwoord = "";
   $dbNaam = "oefenen2";
    $conn = mysqli_connect($dbServername, $dbGebruikersnaam, $dbWachtwoord, $dbNaam);


    // controleren of de database is geconnect

       if ($conn) {
                echo 'connected';
     } else {
           echo 'not connected';
            }

    //database is geconnect
 

       if (isset($_POST['submit'])){
          $gebruikersnaam = $_POST ['gebruikersnaam'];
          $wachtwoord = $_POST['wachtwoord'];  


    $sql = "INSERT INTO naamenwachtwoord(gebruikersnaam, wachtwoord) 
           VALUES('$gebruikersnaam', '$wachtwoord');";

      
               mysqli_query($conn, $sql);

                
       }else if (isset($_POST['login'])){

            $gebruikersnaam = $_POST['gebruikersnaam'];
            $wachtwoord = $_POST['wachtwoord'];

            $query = "SELECT gebruikersnaam, wachtwoord"   	

       } else{

       	echo'<br>';
       	echo "Vul de velden in en druk op submit!";
       }


       

	?>

</body>
</html>