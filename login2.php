
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
require_once("select.php");


$sql = "SELECT * FROM loginform where User='$uname' AND Password='$password' ";
$result = $conn->query($sql);

	$rows=$result->fetch_assoc();
if($rows['User'] == $uname && $rows['Password'] ==$password && $rows['flag']==true)
	{
		  
		$sq="UPDATE loginform set flag=false where User='$uname'";
		$conn->query($sq);
		require_once("inde.php");
		
	}
/*if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["ID"]. " - Name: " . $row["User"]. " " . $row["Password"]. "<br>";
		echo "sucessful login";
    }*/
else {
    $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
  ?>