<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Module</title>
    <script src="jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style1.css">
    <link rel="stylesheet" href="./css/nav.css">
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

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
        $bookmarked_questions = array();
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];

            $conn = mysqli_connect('localhost','root','','rto');
            $sql = "SELECT qid FROM bookmark WHERE uid = '$username'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $bookmarked_questions[] = $row['qid'];
                }
            }
        }
    ?>
</head>
<body>
<br><br><br><br>
<h1 style="text-align: center; font-size: 45px; color: black;">Text Questions</h1>
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
                    <li><a href="admin/index.php">Admin Penal</a></li>
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
        $conn = mysqli_connect('localhost','root','','rto');
        $sql = "SELECT * FROM question WHERE category='text'";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc())
            {
    ?>
    <div class="question-card">
        <div>
            <span id='question'><?php echo $row['que'];?></span>
            <i id="<?php echo $row['qid'];?>" class="icon far fa-bookmark bookmark-icon"></i>
        </div>
        <table>
            <tr>
                <td>
                    <label for="op4"><b> Answer</b>: <?php echo $row['ans'];?></label><br>
                </td>
            </tr>
        </table>
    </div>
    <?php
            }
        }
    ?>
</div>
<script>
$(document).ready(function(){
    var bookmarkedQuestions = <?php echo json_encode($bookmarked_questions); ?>;
    $('.icon').each(function(){
        var qid = $(this).attr('id');
        if(bookmarkedQuestions.includes(qid)){
            $(this).removeClass('far fa-bookmark').addClass('fas fa-bookmark');
        }
    }); 
    $('.icon').click(function(){
        var qid = $(this).attr('id');
        var uid = '<?php echo $username;?>';
        if(uid === ""){
            if (window.confirm("You have to login first for bookmarking questions!!")) {
                window.location.href="index.php";
            }else{
                $('.icon').addClass('far fa-bookmark');
                alert('you can not bookmark the questions.!!')
            }
        }
        else{
            var isBookmarked = $(this).hasClass('fas fa-bookmark');

            if(!isBookmarked){
                if(qid!='' && uid!=''){
                    $.ajax({
                        url : 'bookmark.php',
                        method : 'post',
                        data : {
                            qid:qid,
                            uid:uid,
                        },
                        success : function(data){
                            location.reload();
                        }
                    })
                }
            }else{
                if(qid!='' && uid!=''){
                    $.ajax({
                        url : 'deletebookmark.php',
                        method : 'post',
                        data : {
                            qid:qid,
                            uid:uid,
                        },
                        success : function(data){
                            location.reload();
                        }
                    })
                }
            }
        }
    });
});
</script>
<script src="././js/nav.js"></script>
</body>
</html>