<!DOCTYPE html>
<html lang="en">
<head>

    <script src="jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style1.css" />
    <link rel="stylesheet" href="./css/nav.css" />
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <title>Contact Us</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .contact-form {
            margin-top: 70px;
            background: white;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .contact-form h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form textarea {
            resize: none;
            height: 100px;
        }

        .contact-form input[type="submit"] {
            background-color: orange;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .contact-form input[type="submit"]:hover {
            background-color: darkorange;
        }

        .avatar-preview img {
            border-radius: 0%;
        }

        .question-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        .question-content {
            display: flex;
            align-items: center;
        }

        .avatar-preview {
            margin-right: 20px;
        }

        .bookmark-icon {
            font-size: 24px;
            cursor: pointer;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            font-size: 16px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            max-height: 40px;
            margin-right: 10px;
        }

        .dropdown-content {
            display: none;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        
    </style>
</head>
<body>
<nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="#" class="logo">
            <img src="uploads/rtoLogo.png" alt="Logo">
            RTOExam
        </a>
        <ul class="nav-links">
            <i class="uil uil-times navCloseBtn"></i>
            <li class="dropdown">
            <a href="#"><i class="fas fa-question-circle"></i> Question Bank</a>
                <ul class="dropdown-content">
                    <li><a href="Practice_signed.php">Sign Question</a></li>
                    <li><a href="Practice_text.php">Text Questions</a></li>
                    <li><a href="bookmarkDisplay.php">BookMark</a></li>
                </ul>
            </li>
            <li class="dropdown">
            <a href="#"><i class="fas fa-chalkboard-teacher"></i> Practice</a>
                <ul class="dropdown-content">
                    <li><a href="signPractice.php">Sign Question</a></li>
                    <li><a href="textPractice.php">Text Questions</a></li>
                    <li><a href="allPractice.php">All</a></li>
                </ul>
            </li>
            <li><a href="exam.php"><i class="fas fa-pencil-alt"></i> Take Exam</a></li>
            <li><a href="drivingDisplay.php"><i class="fas fa-car"></i> Driving Schools</a></li>
            <li class="dropdown">
            <a href="#"><i class="fas fa-cog"></i> Settings & Help</a>
                <ul class="dropdown-content">
                    <li><a href="process.php">Process of Driving License</a></li>
                    <li><a href="forms.php">Forms</a></li>
                    <li><a href="rtoOffice.php">RTO Offices</a></li>
                    <li><a href="contactUs.php">Contact US</a></li>

                </ul>
            </li>              
            <a href="<?php echo isset($_SESSION['name']) ? 'logout.php' : 'index.php'; ?>">
            <i class="fas fa-sign-in-alt"></i>

                <?php 
                    if (isset($_SESSION['name'])) {
                        echo 'Logout';
                    } else {
                        echo 'SignIn';
                    }
                ?>
            </a>
        </ul>
    </nav>
    <form action="" method="post" class="contact-form">
        <h2>Contact Us</h2>
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="cno" placeholder="Enter your contact number">
        <input type="email" name="email" placeholder="Enter your email id">
        <textarea name="queries" placeholder="Enter your queries"></textarea>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    $conn = mysqli_connect("localhost", "root", "", "rto");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactno = $_POST['cno'];
    $queries = $_POST['queries'];
    $sql = "INSERT INTO `contactus` ( `name`, `email`, `contactno`, `query`) VALUES ( '$name', '$email', '$contactno', '$queries');";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('Your Query is Submitted');</script>";
    } else {
        echo "<script>alert('Submission failed.');</script>";
    }
}
?>
