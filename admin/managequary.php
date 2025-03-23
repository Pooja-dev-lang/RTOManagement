<?php include '../includes/adminheader.php'; ?>

<br><br>

<div class="container-fluid"> 
<!-- Row 1 -->
<div class="container-fluid"> 
<!-- Row 1 -->
<div class="row">
    <div class="col-lg d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-10">
                    <div class="card-title fw-bold text-center">
                        <h5 class="card-title fw-bold text-center">Manage Quaries</h5>
                    </div>
                </div>

                <!-- User Management Table -->
                <?php
                include '../includes/db_connect.php'; // Ensure your database connection file is included

                $sql = "SELECT * FROM contactus"; // Fetch all users
                $result = $conn->query($sql);
                ?>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Quary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['contactno']; ?></td>
                                    <td><?php echo $row['query']; ?></td> <!-- Updated field -->
                                    <td>
                                        <a href="operations/delete_quary.php?id=<?php echo $row['id']; ?>" class="btn btn-danger m-1"
                                           onclick="return confirm('Are you sure you want to delete this Quary?');">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- End User Management Table -->

            </div>
        </div>
    </div>
</div>
</div>

<?php include '../includes/adminfooter.php'; ?>