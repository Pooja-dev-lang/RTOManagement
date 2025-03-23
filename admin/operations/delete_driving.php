<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete_sql = "DELETE FROM drivingschool WHERE id = $id";

    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('Record deleted successfully!'); window.location.href='../managedriving.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
