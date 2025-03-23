<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTO Exam</title>
    <script src="jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style1.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            text-align: center;
        }

        #image-container {
            margin-top: 20px;
        }

        #image-container img {
            max-width: 450px;
            height: 450px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            max-height: 40px;
            margin-right: 10px;
        }



       
  

        .question-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            position: relative;
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
                    <li><a href="process.php">Proccess of Driving License</a></li>
                    <li><a href="forms.php">Forms</a></li>
                    <li><a href="rtoOffice.php">RTO Offices</a></li>
                    <li><a href="contactUs.php">Contact US</a></li>

                </ul>
            </li>              
            <a href="<?php echo isset($_SESSION['name']) ? 'logout.php' : 'index.php'; ?>">
            <i class="fas fa-sign-in-alt"></i>

                <?php 
                    if (isset($_SESSION['name']))
                    {
                        echo 'Logout';
                    }else{
                        echo 'SignIn';
                    }
                ?>
            </a>
          </li>
        </ul>
      </nav>
    <div class="container">
        <h1>Exam Result</h1>
        <div id="image-container">
            <?php
                // Retrieve URL parameters
                $rightCount = isset($_GET['rightCount']) ? intval($_GET['rightCount']) : 0;
                $wrongCount = isset($_GET['wrongCount']) ? intval($_GET['wrongCount']) : 0;

                // Display image based on results
                if ($rightCount >= 11) {
                    echo '<img src="uploads/pass.png" alt="Pass Image" width="600" height="400">';
                    echo '<p>Congratulations! You have successfully passed the exam with score: ' . $rightCount . '</p>';
                } else if ($wrongCount > 5) {
                    echo '<img src="uploads/fail.png" alt="Fail Image" width="600" height="400">';
                    echo '<p>Sorry, you have failed with score: ' . (15 - $wrongCount) . '. Try Again!</p>';
                }
            ?>
        </div>
    </div>
</body>
</html>
