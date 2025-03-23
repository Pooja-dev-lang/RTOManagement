<?php
include 'db_connect.php'; // Database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete query
    $delete_sql = "DELETE FROM question WHERE qid = $id";

    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('Question deleted successfully!'); window.location.href='../managequestion.php';</script>";
    } else {
        echo "<script>alert('Error deleting question: " . $conn->error . "'); window.location.href='../manage_questions.php';</script>";
    }
}
?>
