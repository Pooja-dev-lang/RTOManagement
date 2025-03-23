<?php
include 'db_connect.php'; // Database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE uid = '$id'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $updateQuery = "UPDATE user SET name='$name', email='$email', mobile='$mobile' WHERE uid='$id'";
    if ($conn->query($updateQuery) === TRUE) {
        echo "<script>alert('User updated successfully!'); window.location='../manageuser.php';</script>";
    } else {
        echo "<script>alert('Error updating user.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Edit User</h2>
        <form method="POST">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?= $user['name'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="mobile" class="form-control" value="<?= $user['mobile'] ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="../manageuser.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
