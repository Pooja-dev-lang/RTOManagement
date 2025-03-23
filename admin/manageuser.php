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
                            <h5 class="card-title fw-bold text-center">Manage Users</h5>
                        </div>
                    </div>

                    <!-- User Management Table -->
                    <?php
                    include '../includes/db_connect.php'; // Ensure your database connection file is included

                    $sql = "SELECT * FROM user"; // Fetch all users
                    $result = $conn->query($sql);
                    ?>

                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th> <!-- Updated from Role to Phone -->
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $row['uid']; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['mobile']; ?></td> <!-- Updated field -->
                                        <td>
                                            <a href="operations/edit_user.php?id=<?php echo $row['uid']; ?>" class="btn btn-primary m-1">Edit</a>
                                            <a href="operations/delete_user.php?id=<?php echo $row['uid']; ?>" class="btn btn-danger m-1"
                                               onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
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