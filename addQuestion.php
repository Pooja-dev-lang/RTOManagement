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
    .input-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    color: #333;    
    outline: none;
    box-sizing: border-box;
    background-color: white;
    appearance: none; /* Removes default styling */
}

/* Ensure consistency with other input fields */
.input-group {
    margin-bottom: 20px;
    position: relative;
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
		  <li><a href="addQuestion.php">Add Questions</a></li>
          <li><a href="DisplayQuestion.php">Sign Questions</a></li>
          <li><a href="TextQuestion.php">Text Questions</a></li>
		  <li><a href="drivingInsert.php">Add DrivingSchool</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
      <br><br><br><br>
      <h1 style="text-align: center; font-size: 45px; color: black;">Add Questions</h1>
    <div class="container">
	<form method="post"  enctype='multipart/form-data'>

					<div class="input-group input-group-icon">
					<input type='file' id="imageUpload" name="img" value="nosign" accept=".png, .jpg, .jpeg" />
					</div>
					<div class="input-group input-group-icon">
                    <label for="questionType">Select category Type:</label>
                    <select name="questionType" id="questionType">
                        <option value="sign">Sign Question</option>
                        <option value="text">Text Question</option>

					</div>
                
                    </form>
					<div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Question" name="que" />
					</div>
                    <div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Option1" name="op1" />
					</div>
                    <div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Option2" name="op2" />
					</div>
                    <div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Option3" name="op3" />
					</div>
                    <div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Answer" name="ans" />
					</div>
					<input type="submit" class="btn" name="submit" id="submit">
				</form>
	</div>	
	<script src="././js/nav.js"></script>
</body>
</html>

<?php
$up = 'uploads/';
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $con = mysqli_connect("localhost","root","","rto");

    $array = array();
    if($con)
    {
       $array['connection']=1;
    }
    else{
    
        $array['connection']= 0;
    }


$cat=$_POST['cat'];
$que = $_POST['que'];
$option1 = $_POST['op1'];
$option2 = $_POST['op2'];
$option3 = $_POST['op3'];
$ans=$_POST['ans'];


$ipath = $up . basename($_FILES['img']['name']);

if(move_uploaded_file($_FILES['img']['tmp_name'],$ipath))
{
	$sign = $ipath;
}
else
{
	$sign = "nosign";
}

$query = "INSERT INTO question (signs,category,que,option1,option2,option3,ans) VALUES ('$sign','$cat','$que','$option1','$option2','$option3','$ans')";
$sql = mysqli_query($con,$query);
}

?>