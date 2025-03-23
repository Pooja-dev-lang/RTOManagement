<?php
include 'db_connect.php'; // Database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete query
    $delete_sql = "DELETE FROM contactus WHERE id = $id";

    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('Query deleted successfully!'); window.location.href='../managequary.php';</script>";
    } else {
        echo "<script>alert('Error deleting query: " . $conn->error . "'); window.location.href='../manage_queries.php';</script>";
    }
}
?>
