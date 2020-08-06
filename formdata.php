

<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "login";

session_start();
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);}


if(isset($_POST['id'])) 
    {
		$id=$_POST['id'];
		$stmt = $conn->prepare("UPDATE dilini SET math= math+1 WHERE ID = ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$count = $stmt->rowCount();
		
		if($count =='0'){
			echo "Failed !";
		}
		else{
			echo "s";
		}
		

		$stmt->close();
	

		//$sq="UPDATE seats SET cal=cal+1 where candidate=$id and seatID=$_SESSION['name']";
		//$conn->query($sq);
		$conn->close();
	//SESSION_DESTROY();

	}
	else{
		echo "p";
	}
//
	


?>	
		
				
			 
