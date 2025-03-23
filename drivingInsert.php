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
      <h1 style="text-align: center; font-size: 45px; color: black;">Add Driving School</h1><br>
    <div class="container">
	<form method="post"  enctype='multipart/form-data'>
					<div class="input-group input-group-icon">
						<input type="text" placeholder="Enter city" name="city" />
					</div>
					<div class="input-group input-group-icon">
						<input type="text" placeholder="Enter name" name="name" />
					</div>
                    <div class="input-group input-group-icon">
						<input type="number" placeholder="Enter Mobile number" name="mno" />
					</div>
                    <div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Address" name="address" />
					</div>
                    <div class="input-group input-group-icon">
						<input type="text" placeholder="Enter Area" name="area" />
					</div>
					<input type="submit" class="btn" name="submit" id="submit">
				</form>
	</div>	
	<script src="././js/nav.js"></script>
</body>
</html>

<?php
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


$city=$_POST['city'];
$name = $_POST['name'];
$mno = $_POST['mno'];
$address = $_POST['address'];
//$area = $_POST['area'];

$query = "INSERT INTO drivingschool ( city, name, mobile, address) VALUES ( '$city', '$name', '$mno', '$address');
";
$sql = mysqli_query($con,$query);
}

?>