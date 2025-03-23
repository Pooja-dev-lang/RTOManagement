<?php
session_start();

$username = $_SESSION['username'];

if($username!="admin"){
	header("Location: index.php");
}

?>

<?php 
    
$conn = mysqli_connect('localhost','root','','rto');

$que = $_POST['qid'];

$query = "DELETE FROM question WHERE qid='$que'";
$sql = mysqli_query($conn,$query);

if($sql){
    echo 'ok';
}
?>