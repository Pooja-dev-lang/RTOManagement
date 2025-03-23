<?php include("../includes/adminheader.php"); ?>
<?php
include '../includes/db_connect.php'; // Database connection

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    // Insert query
    $sql = "INSERT INTO drivingschool (name, city, mobile, address) 
            VALUES ('$name', '$city', '$mobile', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Driving School added successfully!'); window.location.href='managedriving.php';</script>";
    } else {
        echo "<script>alert('Error adding entry: " . $conn->error . "');</script>";
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
                            <h4><b>Add New Driving School</b></h4>
                            <br>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control" required></textarea>
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
