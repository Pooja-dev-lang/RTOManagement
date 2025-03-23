<?php
include 'db_connect.php'; // Database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing question details
    $sql = "SELECT * FROM question WHERE qid = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $signs = $_POST['signs'];
    $category = $_POST['category'];
    $que = $_POST['que'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $ans = $_POST['ans'];

    // Update query
    $update_sql = "UPDATE question SET signs='$signs', category='$category', que='$que', option1='$option1', option2='$option2', option3='$option3', ans='$ans' WHERE qid = $id";

    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Question updated successfully!'); window.location.href='../managequestion.php';</script>";
    } else {
        echo "<script>alert('Error updating question: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Question</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Question</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Signs:</label>
                <input type="text" class="form-control" name="signs" value="<?php echo $row['signs']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category:</label>
                <input type="text" class="form-control" name="category" value="<?php echo $row['category']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Question:</label>
                <textarea class="form-control" name="que" required><?php echo $row['que']; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Option 1:</label>
                <input type="text" class="form-control" name="option1" value="<?php echo $row['option1']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Option 2:</label>
                <input type="text" class="form-control" name="option2" value="<?php echo $row['option2']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Option 3:</label>
                <input type="text" class="form-control" name="option3" value="<?php echo $row['option3']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Answer:</label>
                <input type="text" class="form-control" name="ans" value="<?php echo $row['ans']; ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-success">Update Question</button>
            <a href="../managequestion.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
