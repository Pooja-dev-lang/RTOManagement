<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_1.PDF">application form</a>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="style.css" /> -->
	<title>All Forms</title>
	<link rel="stylesheet" type="text/css" href="./css/form.css" />
    <link rel="stylesheet" href="././css/nav.css" />
    <link rel="stylesheet" href="././css/collapse.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <style>
        .container{
            max-width: 78em;
        }

        .accordion-header{
            color: black;
        }

        .accordion-button{
            background-color: #fadab5 !important;
            color: black !important;
            border: black;
        }

        .accordion-button:focus {
            color: black !important;
            border: 3px solid black !important;
            outline: none !important;
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
      <br><br><br><br>
    <div class="container">
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
          
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">           
                     Driving Licence Forms
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>
              <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_1.PDF">Form 1- Application-cum-declaration as to physical fitness </a></li><br>
              <li><a href=" https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_1A.PDF">Form 1 A - Medical certificate </a></li><br>
              <li><a href=" https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_2.pdf">Form 2 - Issue/Renewal of learner's licence</a></li><br>
              <li><a href=" https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_4.pdf">Form 4 - Issue of fresh licence</a></li><br>
              <li><a href="https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Driving_License_FORM_8E.pdf">Form 8-Addition of another class of vehicle </a></li><br>
              <li><a href="https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Driving_License_FORM_9E.pdf">Form 9 - Renewal of Driving licence</a></li><br>
              <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/lld.pdf">Form L.L.D - Issue of duplicate driving licence</a></li><br>
              <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/tva.pdf">Form T.V.A - Authorization to drive transport vehicle</a></li><br>
              <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form4a.pdf">Application for international driving permit</a></li><br>

            </strong>  
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               Registration Forms
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Registration_FORM_20-E.pdf">Form 20- Permanent Registration </a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_25.pdf">Form 25- Renewal of certificate of  Registration </a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_26.pdf">Form 26- Issue of duplicate certificate of registration </a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Registration_FORM_29-E.pdf">Form 29- Transport of ownership </a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Registration_FORM_30-E.pdf">Form 30- Transport of ownership(if covered by finance) </a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_34.pdf">Form 34- Endorsement of hire-purchase agreement </a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/mt.pdf">Form M.T.- Application for tax exemption</a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/nt.pdf">Form N.T.- Application for non use of moter vehicle</a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/ft.pdf">Form F.T.</a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/images/pdf/form/CNA-Form.pdf">CNA Form Application for obtaining choice number</a></li><br>
               

</strong> 
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Permit Forms
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong> 
                <li><a href="https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/FORM-P.TEM.A-31120.pdf">P.Tem.A- Application for temporary permit</a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/FORM-P.PU.C.A-31120.pdf">P.Pu.C.A- Application for good carriage permit</a></li><br>
                <li><a href="https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/FORM-P.CO.P.A-31120.pdf">P.Co.P.A- Application for contract carriage permit</a></li><br>
                </strong>
   
        
        </div>
                </div>  
	</div>	
	<script src="././js/nav.js"></script>
</body>
</html>