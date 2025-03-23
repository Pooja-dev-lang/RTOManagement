<?php
session_start();

$username = $_SESSION['username'];

if($username!="admin"){
	header("Location: index.php");
}

?>


<?php
 $conn = mysqli_connect('localhost','root','','rto');
 $questions = array();
 $sql = "SELECT * FROM question";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
     // Output data of each row
     while($row = $result->fetch_assoc()) {
         $question = array(
             "question" => $row["que"],
             "options" => json_decode($row["option1"]),
             "correctAnswerIndex" => $row["ans"]
         );
         array_push($questions, $question);
     }
 } else {
     echo json_encode([]);
     exit;
 }
 
 $conn->close();
 echo json_encode($questions);
?>