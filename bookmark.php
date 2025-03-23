

<?php


$con = mysqli_connect("localhost","root","","rto");

$qid = $_POST['qid'];
$uid = $_POST['uid'];

$query = "INSERT INTO bookmark (qid,uid) VALUES ('$qid','$uid')";
$sql = mysqli_query($con,$query);


?>