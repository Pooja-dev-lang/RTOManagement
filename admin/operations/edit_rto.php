<?php
include 'db_connect.php'; // Database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing RTO details
    $sql = "SELECT * FROM rtooffice WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $city = $_POST['city'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];

    // Update query
    $update_sql = "UPDATE rtooffice SET city='$city', address='$address', contactno='$contactno' WHERE id = $id";

    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('RTO Office updated successfully!'); window.location.href='../managerto.php';</script>";
    } else {
        echo "<script>alert('Error updating RTO Office: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit RTO Office</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit RTO Office</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">City:</label>
                <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Address:</label>
                <textarea class="form-control" name="address" required><?php echo $row['address']; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Contact No:</label>
                <input type="text" class="form-control" name="contactno" value="<?php echo $row['contactno']; ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-success">Update RTO Office</button>
            <a href="../managerto.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
