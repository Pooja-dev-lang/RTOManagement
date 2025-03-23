<?php include("../includes/adminheader.php"); ?>
<?php
include '../includes/db_connect.php'; // Database connection

if (isset($_POST['submit'])) {
    $city = $_POST['city'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];

    // Insert query
    $sql = "INSERT INTO rtooffice (city, address, contactno) VALUES ('$city', '$address', '$contactno')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('RTO Office added successfully!'); window.location.href='managerto.php';</script>";
    } else {
        echo "<script>alert('Error adding RTO Office: " . $conn->error . "');</script>";
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
                            <h4><b>Create New RTO Office</b></h4>
                            <br>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Contact No</label>
                                    <input type="text" name="contactno" class="form-control" required>
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
