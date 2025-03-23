<?php include("../includes/adminheader.php"); ?>
<?php
include '../includes/db_connect.php'; // Database connection

if (isset($_POST['submit'])) {
    $signs = $_POST['signs'];
    $category = $_POST['category'];
    $que = $_POST['que'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $ans = $_POST['ans'];

    // Insert query
    $sql = "INSERT INTO question (signs, category, que, option1, option2, option3, ans) 
            VALUES ('$signs', '$category', '$que', '$option1', '$option2', '$option3', '$ans')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Question added successfully!'); window.location.href='managequestion.php';</script>";
    } else {
        echo "<script>alert('Error adding question: " . $conn->error . "');</script>";
    }
}
?>

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-10">
                        <div class="container">
                            <h4><b>Create New Question</b></h4>
                            <br>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label>Signs</label>
                                    <input type="text" name="signs" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Category</label>
                                    <input type="text" name="category" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Question</label>
                                    <textarea name="que" class="form-control" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Option 1</label>
                                    <input type="text" name="option1" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Option 2</label>
                                    <input type="text" name="option2" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Option 3</label>
                                    <input type="text" name="option3" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Answer</label>
                                    <input type="text" name="ans" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../includes/adminfooter.php"); ?>
