<!DOCTYPE html>
<html>
<head>
    <title>Quiz Module</title>
    <script src="jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style1.css" />
    <link rel="stylesheet" href="./css/nav.css" />
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <style>
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

        body {
            font-family: Arial, sans-serif;
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
    </style>

    <?php
        session_start();
        $username = "";
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
        }
    ?>
</head>
<body>
<br><br><br><br>
<h1 style="text-align: center; font-size: 45px; color: black;">Bookmarked Questions</h1>
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
<br><br>
<div class="app-body">
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'rto');
        $sql = "SELECT distinct category,signs,que,ans FROM bookmark b , user u , question q WHERE q.qid = b.qid and u.uid = b.uid and b.uid = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
    ?>
    <div class="question-card">
        <?php
            if ($row['category'] == 'sign') {
        ?>
        <table>
            <tr>
                <td>
                    <div class="avatar-preview">
                        <img src="<?php echo $row['signs']; ?>" alt="">
                    </div>
                </td>
                <td>&nbsp;&nbsp;&nbsp;
                    <span id='question'><?php echo $row['ans']; ?></span>
                </td>
            </tr>
        </table>
        <?php
            } else {
        ?>
        <div>
            <span id='question'><?php echo $row['que']; ?></span>
        </div>
        <table>
            <tr>
                <td>
                    <label for="op4"><b> Answer</b>: <?php echo $row['ans']; ?></label><br>
                </td>
            </tr>
        </table>
    </div>
        <?php
            }
        ?>
    </div>
    <?php
            }
        }
    ?>
</div>
<script src="././js/nav.js"></script>
</body>
</html>