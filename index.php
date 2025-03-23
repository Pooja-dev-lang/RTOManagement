<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "rto");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if (isset($_POST['login'])) {
    echo "<script>alert('jhgj');</script>";
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $query = "SELECT * FROM user WHERE name='$username' AND pass='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if ($username == "admin" && $password == "admin@123") {
        $_SESSION["username"] = $username;
        header("Location: addQuestion.php");
        exit();
    } elseif (mysqli_num_rows($result) > 0) {
        $_SESSION["username"] = $row['uid'];
        $_SESSION["name"] = $row['name'];
        header("Location: Practice_text.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password.');</script>";
        
    }
}

// Registration Logic
if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $contactno = $_POST["contactno"];

    // Validate each form field
    $errors = [];

    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($contactno)) {
        $errors[] = "Mobile Number is required.";
    } elseif (!preg_match("/^[0-9]{10}$/", $contactno)) {
        $errors[] = "Invalid mobile number format.";
    }

    // Process registration if no errors
    if (empty($errors)) {
        $checkQuery = "SELECT * FROM user WHERE name='$username'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            echo "<script>alert('This username is already taken. Please choose a different username.');</script>";
        } else {
            $insertQuery = "INSERT INTO user (name, email, mobile, pass) VALUES ('$username', '$email', '$contactno', '$password')";
            if (mysqli_query($conn, $insertQuery)) {
                $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '';
        $mail->Password = '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('nemitsagar558@gmail.com');

        $mail->addAddress($email);

        $mail->isHTML(true);

        $mail->Subject = 'Thank You For Registering RTO.';
        $mail->Body = "Thank You Pooja <br><br>
                        You have Signup Successfully in RTO Management";

        $mail->send();
                echo "<script>alert('Registration successful');</script>";
                $_SESSION["username"] = $row['uid'];
                $_SESSION["name"] = $row['name'];
                if($username == "admin" && $username == "admin"){
                    header("Location: addQuestion.php");
                }else{
                    header("Location: Practice_text.php");
                }
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
            }
        }
    } else {
        echo "<script>alert('" . implode("\\n", $errors) . "');</script>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css" />
    <title>Sign in & Sign up Form</title>
    <style>
        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            max-height: 40px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <!-- <script>
        const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
    </script> -->
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
               <!-- Sign in Form -->
<!-- Sign in Form -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="sign-in-form">
    <h2 class="title">Sign in</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="username" required />
    </div>
    <div class="input-field" style="position: relative;">
        <i class="fas fa-lock"></i>
        <!-- Use a unique id for sign in password input -->
        <input type="password" placeholder="Password" name="password" id="password_id2" required />
        <!-- Unique eye icon for sign in -->
        <i class="far fa-eye" id="togglePasswordSignIn" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
    </div>
    <input type="submit" value="Login" class="btn solid" name="login" />
</form>

<!-- Sign up Form -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="sign-up-form">
    <h2 class="title">Sign up</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="username"  />
    </div>
    <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="email" placeholder="Email" name="email"  />
    </div>
    <div class="input-field">
        <i class="fas fa-phone"></i>
        <input type="text" maxlength="10" placeholder="Mobile Number" name="contactno"  />
    </div>
    <div class="input-field" style="position: relative;">
        <i class="fas fa-lock"></i>
        <!-- Unique id for sign up password input -->
        <input type="password" placeholder="Password" name="password" id="password_id" required />
        <!-- Unique eye icon for sign up -->
        <i class="far fa-eye" id="togglePasswordSignUp" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i> 
    </div>
    <input type="submit" class="btn" value="Sign up" name="submit" />
</form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Welcome To RTO Exam Management System</h3>
                    <p class="logo"><center>
                    
            <img src="\xampp\htdocs\6thSemProject\6thSemProject\uploads\rt.png" alt="Logo" type="png">
            </center></p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="https://i.ibb.co/6HXL6q1/Privacy-policy-rafiki.png" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>RTO Exam Management System</h3>
                    <p class="logo">
                     <center>
            <img src="" alt="Logo">
            </center></p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="https://i.ibb.co/nP8H853/Mobile-login-rafiki.png" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="./js/script1.js"></script>
    <script>
    // Toggle for sign in form
    const togglePasswordSignIn = document.querySelector('#togglePasswordSignIn');
    const passwordSignIn = document.querySelector('#password_id2');
    
    togglePasswordSignIn.addEventListener('click', function () {
        const type = passwordSignIn.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordSignIn.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });

    // Toggle for sign up form
    const togglePasswordSignUp = document.querySelector('#togglePasswordSignUp');
    const passwordSignUp = document.querySelector('#password_id');
    
    togglePasswordSignUp.addEventListener('click', function () {
        const type = passwordSignUp.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordSignUp.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });
</script>


</body>

</html>