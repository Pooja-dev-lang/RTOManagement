<?php
include '../includes/adminheader.php';
include '../includes/db_connect.php';


// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$admin_id = $_SESSION['admin_id'];

// Fetch admin details from the database
$query = "SELECT * FROM admin WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $admin_id);
$stmt->execute();
$result = $stmt->get_result();
$admin = $result->fetch_assoc();

if (!$admin) {
    die("User not found.");
}
?>

<div class="container mt-4">
    <h2>Admin Profile</h2>
    <div class="card p-3">
        <p><strong>USERID:</strong> <?= htmlspecialchars($admin['id']); ?></p>
        <p><strong>Username:</strong> <?= htmlspecialchars($admin['username']); ?></p>
        <p><a href="logout.php" class="btn btn-danger m-1"
        onclick="return confirm('Are you sure you want to logout ?');">Logout</a></p>
    </div>
</div>

<?php include '../includes/adminfooter.php'; ?>
