<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM drivingschool WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $update_sql = "UPDATE drivingschool SET name='$name', city='$city', mobile='$mobile', address='$address' WHERE id=$id";

    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Record updated successfully!'); window.location.href='../managedriving.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Driving School</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Driving School</h2>
        <form method="POST">
            <div class="mb-3">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label>City:</label>
                <input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Mobile:</label>
                <input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Address:</label>
                <textarea name="address" class="form-control" required><?php echo $row['address']; ?></textarea>
            </div>
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="../managedriving.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
