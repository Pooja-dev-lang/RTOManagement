<?php
include '../includes/adminheader.php';
include '../includes/db_connect.php'; // Database connection

session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$admin_id = $_SESSION['admin_id'];
$message = "";

// Fetch admin details
$query = "SELECT * FROM admin WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $admin_id);
$stmt->execute();
$result = $stmt->get_result();
$admin = $result->fetch_assoc();

if (!$admin) {
    die("User not found.");
}

// Handle form submission for updating username
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);

    if (!empty($username)) {
        $update_query = "UPDATE admin SET username = ? WHERE id = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("si", $username, $admin_id);

        if ($stmt->execute()) {
            $message = "Profile updated successfully!";
            $_SESSION['admin_username'] = $username; // Update session
        } else {
            $message = "Error updating profile.";
        }
    } else {
        $message = "Username is required!";
    }
}

?>

<div class="container mt-4">
    <h2>Edit Profile</h2>
    
    <?php if (!empty($message)) : ?>
        <div class="alert alert-info"><?= $message; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($admin['username']); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php include '../includes/adminfooter.php'; ?>
