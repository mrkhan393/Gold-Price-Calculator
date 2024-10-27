<?php

try{
	$db = new PDO("mysql:host=localhost;dbname=goldrate", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	if(isset($_POST['submit'])){
		$voriprice = $_POST['voriprice'];
		$voriquantity = $_POST['voriquantity'];
		$anaquantity = $_POST['anaquantity'];
		$rotiquantity = $_POST['rotiquantity'];
		$pointquantity = $_POST['pointquantity'];
		
		
		$query = "INSERT INTO user(voriprice, voriquantity, anaquantity, rotiquantity, pointquantity, total_tk) VALUES(:voriprice, :voriquantity, :anaquantity, :rotiquantity, :pointquantity, :result)";
		
		$statement = $db->prepare($query);
		$statement->bindValue(':voriprice', $voriprice);
		$statement->bindValue(':voriquantity', $voriquantity);
		$statement->bindValue(':anaquantity', $anaquantity);
		$statement->bindValue(':rotiquantity', $rotiquantity);
		$statement->bindValue(':pointquantity', $pointquantity);
		$statement->bindValue(':result', $result);
		
		$statement->execute();
	}
}

catch(PDOException $e){
echo "Database Error: {$e->getMessage()}";
}


?>