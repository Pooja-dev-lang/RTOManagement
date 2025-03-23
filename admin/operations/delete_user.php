<?php
include 'db_connect.php'; // Database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete related records in the 'bookmark' table first
    $deleteBookmarksQuery = "DELETE FROM bookmark WHERE uid = '$id'";
    $conn->query($deleteBookmarksQuery);

    // Now delete the user
    $deleteUserQuery = "DELETE FROM user WHERE uid = '$id'";
    if ($conn->query($deleteUserQuery) === TRUE) {
        echo "<script>alert('User deleted successfully!'); window.location='../manageuser.php';</script>";
    } else {
        echo "<script>alert('Error deleting user.');</script>";
    }
}
?>
