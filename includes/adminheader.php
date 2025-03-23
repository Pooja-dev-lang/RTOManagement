<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <script src="jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="././js/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <style>
        .question-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            position: relative;
        }

        .bookmark-icon {
            font-size: 24px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="uploads/rtoLogo.png" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fas fa-user"></i> Users</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../index.php">Create New User</a></li>
                            <li><a class="dropdown-item" href="manageuser.php">Manage Users</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fas fa-pencil-alt"></i> Questions</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="createquestion.php">Create New Question</a></li>
                            <li><a class="dropdown-item" href="managequestion.php">Manage Questions</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fas fa-car"></i> Driving Schools</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="createdriving.php">Create New Driving Schools</a></li>
                            <li><a class="dropdown-item" href="managedriving.php">Manage Driving Schools</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fas fa-file-alt"></i> RTO Offices</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="createrto.php">Create New RTO Office</a></li>
                            <li><a class="dropdown-item" href="managerto.php">Manage RTO Offices</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fas fa-headset"></i> Contact Us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="managequary.php">Manage Queries</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fas fa-cog"></i> Settings</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="../index.php">Main Site</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>