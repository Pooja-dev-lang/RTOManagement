<?php
include 'db_connect.php'; // Database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete query
    $delete_sql = "DELETE FROM rtooffice WHERE id = $id";

    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('RTO Office deleted successfully!'); window.location.href='../managerto.php';</script>";
    } else {
        echo "<script>alert('Error deleting RTO Office: " . $conn->error . "'); window.location.href='../manage_rto.php';</script>";
    }
}
?>
