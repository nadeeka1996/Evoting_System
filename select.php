<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $uname=$_POST['username'];
 
 $password=$_POST['password'];
 
 
 
 
 $uname = stripslashes($uname);
$password = stripslashes($password);
$uname = mysqli_real_escape_string($conn,$uname);
$password = mysqli_real_escape_string($conn,$password);


	$q= "SELECT SeatID FROM loginform where User='$uname' AND Password='$password' ";
	$re= $conn->query($q);
	$r=$re->fetch_assoc();
	$_SESSION['name'] = $r['SeatID'];
	//require_once('new1.php');
	
	//print_r($_SESSION);
	//echo $_SESSION['name'] ;
  $sql = "SELECT * FROM loginform where User='$uname' AND Password='$password' ";
$result = $conn->query($sql);

	$rows=$result->fetch_assoc();
if($rows['User'] == $uname && $rows['Password'] ==$password && $rows['flag']==true)
	{
		  
		$sq="UPDATE loginform set flag=false where User='$uname'";
		$conn->query($sq);
		require_once("inde.php");
		//echo "sucessful";
		
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