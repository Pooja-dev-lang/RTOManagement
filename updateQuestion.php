<?php
session_start();

$username = $_SESSION['username'];

if($username!="admin"){
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="style.css" /> -->
	<title>Sign in & Sign up Form</title>
	<link rel="stylesheet" type="text/css" href="./css/form.css" />
    <link rel="stylesheet" href="././css/nav.css" />
        <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <style>
        .avatar-preview {
            border: 6px solid #f0a500;
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
    <?php
    
        $conn = mysqli_connect('localhost','root','','rto');

        $id = $_GET['id'];

        $sql = "SELECT * FROM question WHERE qid = '$id'";
        $result = $conn->query($sql);

        $data = $result->fetch_array();

    ?>
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
		  <li><a href="addQuestion.php">Add Questions</a></li>
          <li><a href="DisplayQuestion.php">Sign Questions</a></li>
          <li><a href="TextQuestion.php">Text Questions</a></li>
          <li><a href="drivingInsert.php">Add DrivingSchool</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
      <br><br><br><br>
    <div class="container">
	<form method="post"  enctype='multipart/form-data'>
                <div class="avatar-upload">
                    <div class="avatar-preview">
                        <img src="<?php echo $data['signs'];?>" alt="">
                    </div>
                </div>
					<div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Category" name="cat" value="<?php echo $data['category'];?>" readonly/>
					</div>
					<div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Question" name="que" value="<?php echo $data['que'];?>"/>
					</div>
                    <div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Option1" name="op1" value="<?php echo $data['option1'];?>"/>
					</div>
                    <div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Option2" name="op2" value="<?php echo $data['option2'];?>"/>
					</div>
                    <div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Option3" name="op3" value="<?php echo $data['option3'];?>"/>
					</div>
                    <div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Answer" name="ans" value="<?php echo $data['ans'];?>" />
					</div>
					<input type="submit" class="btn" name="submit" id="submit">
				</form>
	</div>	

    <script src="././js/form.js"></script>
    <script src="././js/nav.js"></script>
</body>
</html>

<?php 

$up = 'Signs/';
if($_SERVER['REQUEST_METHOD']=="POST")
{
$con = mysqli_connect("localhost","root","","rto");

$que = $_POST['que'];
$op1 = $_POST['op1'];
$op2=$_POST['op2'];
$op3=$_POST['op3'];
$ans= $_POST['ans'];

$query = "UPDATE question SET que='$que', option1='$op1', option2='$op2', option3='$op3', ans='$ans' WHERE qid='$id' ";

$sql = mysqli_query($con,$query);

if($sql){
    if($data['category']=='sign'){
        header("location:DisplayQuestion.php");
    }else{
        header("location:TextQuestion.php");
    }
}
}   
?>
