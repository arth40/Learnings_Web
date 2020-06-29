<?php
$connection = mysqli_connect('localhost', 'root', 'arth123');
if (!$connection) {
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'learnings');
if (!$select_db) {
    die("Database Selection Failed" . mysqli_error($connection));
}
date_default_timezone_set('Asia/Kolkata');
$day = date('d');
$month = date('m');
$year = date('Y');
$query = "SELECT * FROM announcements";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
echo $count;
$res = array();
for($i=0;$i<$count;$i++)
{
    $row = $result->fetch_assoc();
    echo ''.$row['faculty_name'].' '.$row['datepost'].'<br>'.$row['ann_details'].'<br>';
    
    #$res[$i] =''.$row['faculty_name'].' '.$row['deadline'].' '.$row['ann_details'].' ';
}
#echo "".$res[0]."";
?>
<script type="text/javascript">
function displayann(){
    var id = <?php echo json_encode($res) ?>
//document.getElementById("fetchann").innerHTML = 
alert(id[0]);
}
</script>

<html>
    <body>
        <div id="fetchann" onclick="displayann()" style="height:22vw;width:70%;background-color:aqua"></div>
    </body>
</html>

