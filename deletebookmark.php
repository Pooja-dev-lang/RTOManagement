<?php
session_start();

$username = $_SESSION['username'];

if($username!="admin"){
	header("Location: index.php");
}

?>
<?php 
    
$conn = mysqli_connect('localhost','root','','rto');

$qid = $_POST['qid'];
$uid = $_POST['uid'];

$query = "DELETE FROM bookmark WHERE qid='$qid' and uid='$uid'";
$sql = mysqli_query($conn,$query);

if($sql){
    echo 'ok';
}
?>