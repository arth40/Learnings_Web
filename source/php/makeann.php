<?php
$facname = $_POST['facname'];
$ann = $_POST['ann'];
$expdate = $_POST['expdate'];
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
//echo($expdate);
$connection = mysqli_connect('localhost', 'root', 'arth123');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'learnings');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$query = "INSERT INTO announcements (faculty_name,ann_details,datepost,deadline) VALUES ('$facname','$ann','$date','$expdate')";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

header('Location: ../pages/homefac.html');
echo "<script type='text/javascript'>alert('Announcement made successfully');</script>"

?>

