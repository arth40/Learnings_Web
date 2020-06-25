<?php
$connection = mysqli_connect('localhost', 'root', '12345');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'login');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

if (isset($_POST['email']) and isset($_POST['pwd'])){
	
// Assigning POST values to variables.
$username = $_POST['email'];
$password = $_POST['pwd'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `login_admin` WHERE user_id='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
header('Location: homefac.html');
}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}

}

?>