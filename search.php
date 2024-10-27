<?php

try{
		if(isset($_POST['submit'])){
			$db = new PDO("mysql:host=localhost;dbname=goldrate", "root", "");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			
			if(isset($_POST['datetosearch'])){
				$datetosearch = $_POST['datetosearch'];
				$query = "SELECT * FROM prerates WHERE date='".$datetosearch."';";
				$statement = $db->prepare($query);
				$statement->execute();
				$result = $statement->fetchAll();
				
			
				foreach($result as $results){
					echo "<table>";
					echo "<tr>";
					echo "<th>Date</th>";
					echo "<th>22 Carat PVP</th>";
					echo "<th>21 Carat PVP</th>";
					echo "<th>18 Carat PVP</th>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>$results->date </td>";
					echo "<td>$results->pervoriprice_22carat</td>";
					echo "<td>$results->pervoriprice_21carat </td>";
					echo "<td>$results->pervoriprice_18carat </td>";
					echo "</tr>";
					echo "</table>";
				}
			}
		}
}

catch(PDOException $e){
echo "Database Error: {$e->getMessage()}";
}


?>