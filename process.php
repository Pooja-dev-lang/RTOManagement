<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="style.css" /> -->
	<title>Sign in & Sign up Form</title>
	<link rel="stylesheet" type="text/css" href="./css/form.css" />
    <link rel="stylesheet" href="././css/nav.css" />
    <link rel="stylesheet" href="././css/collapse.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <style>
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
      <br><br><br><br>
    <div class="container">
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
          
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">           
                     Process Of Licence
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>
 
    <p>An applicant is required to obtain a learning license in order to get a new driving license.</p>

    <p>An applicant is required to apply in Form No.2/4 for the purpose of both learning as well as driving license. Medical Certificate in Form No.1 (A) is also required to be attached. In case a person wants to obtain a driving license for transport goods vehicle, &amp; to get online appointment or for further details, please visit: <a href=https://parivahan.gov.in/parivahan>www.sarathi.nic.in</a>.</p>

    <h2>Eligibility</h2>

    <p>A person should have completed 16 years to obtain a license for 2 wheelers without gear.</p>
    <p>A person should have completed 18 years of age to obtain a license for 2 wheelers with gear, Motor-car, Tractor, and other non-transport vehicles.</p>
    <p>For transport vehicles, a person should have completed 20 years of age. In addition, he should be passed standard 8th pass and should have experience of 1 year driving a light motor vehicle.</p>

    <h2>Necessary Documents</h2>

    <p>- Proof of Age:</p>
    <p>School Leaving Certificate, Birth Certificate, Passport, Pan Card, L.I.C. Policy or a Certificate from Civil Surgeon or a Doctor equivalent to that can be submitted as proof of age.</p>

    <p>- Proof of Address:</p>
    <p>School Leaving Certificate, Passport, L.I.C. Policy, Electoral Voter I-Card, Light Bill, Telephone Bill, receipt of House Tax with address, Pay Slip of Central/State/Local self-Government or an Affidavit from the applicant to that effect can be submitted as proof of address.</p>

    <h2>Fee</h2>

    <p>Rs.25/- as test fee plus Rs.30/- per category of vehicle is required to be paid for Learning License.</p>
    <p>Rs.200/- for a Smart Card Driving License and Rs. 50/- per category of vehicle is required to be paid for Driving License.</p>

    <h2>Procedure Of Examination</h2>

    <p>To obtain a Learning License, a Knowledge Test through a computer is required to be passed.</p>
    <p>Subjects like Rules and Regulations of traffic, and traffic signages are included in the test.</p>
    <p>15 questions are asked in the test at random, out of which 11 questions are required to be answered correctly to pass the test.</p>
    <p>48 seconds are allowed to answer each question.</p>
    <p>A person failing in the test can appear for the re-test after a gap of 24 hours.</p>

    <p>A person who has a learning license or driving license and seeks to apply for an additional category of driving license in the existing driving license is exempted from the knowledge test on the computer.</p>

    <p>To add another category in the existing license for two-wheelers, the application should be made in form-8 attaching the original driving license with a fee of Rs.50/- for the driving license, Rs.200/- for a smart card driving license, and Rs.50/- for a driving test is required to be paid with the application.</p>
    <h2>Addition of Transport Vehicle Category in the L.M.V. License</h2>

<p>Application is made in Form No.8 attaching the original driving license.</p>
<p>Applicant should have completed 20 years of age.</p>
<p>Minimum standard 8th pass, and</p>
<p>Have a minimum of 1 year of experience of driving L.M.V.</p>
<p>Applicant should also produce a certificate of training from a recognized Motor Driving School in Form No.5.</p>
<p>A fee of Rs.50/- for driving license with Rs.200/- for a smart card and driving test fee of Rs.50/- per category of vehicle is required to be paid with the application.</p>
<p>Please note that an applicant is required to take a learning license, but he is exempted from the computer knowledge test.</p>

<h2>To Obtain Badge or Authorization for Transport Vehicle</h2>

<p>Application should be made in Form T.V.A.</p>
<p>Applicant should have completed 20 years of age and should be minimum standard 8th pass, and</p>
<p>Have a minimum of 1 year of experience of driving L.M.V.</p>
<p>Applicant should also produce a training certificate in From No.5 from an authorized Motor Driving School.</p>
<p>He should also produce a Certificate of good conduct from the concerned Police Station.</p>
<p>A fee of Rs.50/- for every category of vehicle is required to be paid for this purpose.</p>

<h2>Inclusion of Hazardous Goods Category in Transport Driving License</h2>

<p>Application can be made on plain paper specifying the particulars of the applicant.</p>
<p>The application should be accompanied by a certificate of 3 days training from a Central or State Government approved centre.</p>
<p>A fee of Rs.50/- for endorsement is required to be paid.</p>
<p>The endorsement is made for a period of one year.</p>

<h2>Renewal of Driving Licence</h2>

<p>Driving license is valid till the date as shown in the driving license.</p>
<p>A grace period of 30 days is granted for the renewal of driving license.</p>
<p>If a driving license holder comes for renewal within a period of 5 years from the date of expiry, he is exempted from the test, but the license is valid from the date of the renewed license.</p>
<p>Application in Form-9 attached with the original Driving License should be made for the renewal of the driving license.</p>
<p>Medical Certificate in Form-1-A is required to be produced if the applicant has completed 50 years of age or is applying for renewal of a driving license for a transport vehicle.</p>
<p>A fee of Rs.50/- with a smart card fee of Rs.200/- is required to be paid if the application is made within the period.</p>
<p>For delay, an additional fee of Rs. 50/- for every year of such delay is required to be paid.</p>
<p>In case the original driving license is from another R.T.O. or State, then N.O.C. of the concerned R.T.O. should be attached.</p>

<h2>For Change in Details of Driving Licence or Obtaining a Duplicate</h2>

<p>Application should be made in Form L.L.D. with details of the original driving license, and a fee of Rs.200/- should be paid.</p>
<p>In case the applicant has forgotten the number of the original smart card, then he can apply for information regarding it by making an application indicating his name, address, date of birth, and is required to pay a fee of Rs.25/-.</p>
<p>To change details of the driving license like name, address, etc., then an application on plain paper with a smart card fee of Rs.200/- is required to be made.</p>
<p>N.O.C. from the original licensing authority should be obtained and attached with the application.</p>

<h2>International Driving License or Permit</h2>

<p>To obtain an international driving license, an application in Form 4 (A) should be made along with the Medical Certificate in Form - 1 (A).</p>
<p>A copy of the existing driving license, copy of passport, visa, and three passport size photographs should be attached with the application.</p>
<p>A fee of Rs.500/- is required to be paid for this purpose.</p>
<p>A permit is issued for a period of one year or till the validity of the existing driving license, whichever is earlier.</p>
<p>Duplicate International Driving Permit is not issued or renewed after expiry.</p>
<p>After expiry of International Driving Permit it is not renewed.</p>
<p>It may be noted that such license is issued only for Indian citizens and they are required to be presented in R.T.O. in person.</p>

<h2>Driving Licenses Delivered</h2>

<p>Learning license is delivered to the applicant in person on the same day when he comes for the knowledge test.</p>
<p>Driving license is sent by speed post at the address mentioned by the applicant in his application.</p>
<p>International driving permit is delivered to the applicant in person.</p>


    


                </strong>  
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Privacy Policy
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong><h2>About Us</h2>
    <p>We built the RTO Exam app as an Ad Supported app. This SERVICE is provided by Pavans Group Techsoft Private Limited at no cost and is intended for use as is.</p>
    <p>This page is used to inform app visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decides to use our Service.</p>
    <p>If you choose to use our Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that we collect is used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.</p>
    <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at RTO Exam unless otherwise defined in this Privacy Policy.</p>

    <h3>Information Collection and Use</h3>
    <p>For a better experience, while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to Email, First Name, Last Name, State, City, Language, and Phone Number. The information that we request will be retained by us and used as described in this privacy policy.</p>
    <p>The app does use third-party services that may collect information used to identify you.</p>

    <h4>Link to privacy policy of third party service providers used by the app</h4>

    <h3>Log Data</h3>
    <p>We want to inform you that whenever you use our Service, in case of an error in the app, we collect data and information (through third-party products) on your phone called Log Data. This Log Data may include information such as your device Internet Protocol (IP) address, device name, operating system version, the configuration of the app when utilizing our Service, the time and date of your use of the Service, and other statistics.</p>

    <h3>Cookies</h3>
    <p>Cookies are files with small amount of data that is commonly used an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your device internal memory.</p>



    </p>This Service does not use these cookies explicitly. However, the app may use third party code and libraries that use cookies to collection information and to improve their services. You have the option to either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to refuse our cookies, you may not be able to use some portions of this Service.</p>
    <h3>Service Providers</h3>

<p>We may employ third-party companies and individuals due to the following reasons:</p>
<ul>
  <li>To facilitate our Service;</li>
  <li>To provide the Service on our behalf;</li>
  <li>To perform Service-related services; or</li>
  <li>To assist us in analyzing how our Service is used.</li>
</ul>
<p>We want to inform users of this Service that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>

<h3>Security</h3>

<p>We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.</p>

<h3>Links to Other Sites</h3>

<p>This Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>

<h3>Changes to This Privacy Policy</h3>

<p>We may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately after they are posted on this page.</p>

<h3>Disclaimer</h3>

<p>This test is only for public awareness. This app is not affiliated with any government body or any RTO authority of India. Though all efforts have been made to ensure the accuracy of the content, the same should be construed as a statement of law or used for any legal purposes. This application accepts no responsibility in relation to the accuracy, completeness, usefulness or otherwise. Users are advised to verify/check any information with the Transport Department.</p>

<h3>Contact Us</h3>

<p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us at <a href="mailto:contact@rtoexam.com">contact@rtoexam.com</a>.</p>

</strong> 
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Terms And Conditions
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong> <h2>About App</h2>
    <p>By installing the RTO Exam App, you agree to be bound by this Agreement and understand that there is no tolerance for objectionable content. If you do not agree with the terms and conditions of this Agreement, you are not entitled to use the RTO Exam App.</p>
    <p>In order to ensure RTO Exam provides the best experience possible for everyone, we strongly enforce a no tolerance policy for objectionable content. If you see inappropriate content, please contact us at <a href="mailto:contact@rtoexam.com">contact@rtoexam.com</a>.</p>

    <h3>Privacy Policy</h3>
    <p>RTO Exam may collect and use information about your usage of the RTO Exam App, including certain types of information from and about your device. RTO Exam may use this information, as long as it is in a form that does not personally identify you, to measure the use and performance of the RTO Exam App. Visit Our <a href="#privacy-policy">Privacy Policy</a> for more information.</p>

    <h3>Limited Licence</h3>
    <p>RTO Exam grants you a limited, non-exclusive, non-transferable, revocable license to use the RTO Exam App for your personal, non-commercial purposes.</p>

    <h3>Age Restrictions</h3>
    <p>By using the RTO Exam App, you represent and warrant that:</p>
    <ul>
        <li>you are 13 years of age or older and you agree to be bound by this Agreement;</li>
        <li>if you are under 13 years of age, you have obtained verifiable consent from a parent or legal guardian; and</li>
        <li>your use of the RTO Exam App does not violate any applicable law or regulation.</li>
    </ul>
    <p>Your access to the RTO Exam App may be terminated without warning if RTO Exam believes, in its sole discretion, that you are under the age of 13 years and have not obtained verifiable consent from a parent or legal guardian. If you are a parent or legal guardian and you provide your consent to your child's use of the RTO Exam App, you agree to be bound by this Agreement in respect to your child's use of the RTO Exam App.</p>

    <h3>Objectionable Content Policy</h3>
    <p>Content may not be submitted to RTO Exam, who will moderate all content and ultimately decide whether or not to post a submission to the extent such content includes, is in conjunction with, or alongside any, Objectionable Content. Objectionable Content includes, but is not limited to:</p>
    <ul>
        <li>sexually explicit materials;</li>
        <li>obscene, defamatory, libelous, slanderous, violent and/or unlawful content or profanity;</li>
        <li>content that infringes upon the rights of any third party, including copyright, trademark, privacy, publicity or other personal or proprietary right, or that is deceptive or fraudulent;</li>
        <li>content that promotes the use or sale of illegal or regulated substances, tobacco products, ammunition and/or firearms;</li>
        <li>gambling, including without limitation, any online casino, sports books, bingo or poker.</li>
    </ul>

    <h3>Warranty</h3>
    <p>RTO Exam disclaims all warranties about the RTO Exam App to the fullest extent permitted by law. To the extent any warranty exists under law that cannot be disclaimed, RTO Exam shall be solely responsible for such warranty.</p>

    <h3>Maintenance and Support</h3>
    <p>RTO Exam does provide minimal maintenance or support for it but not to the extent that any maintenance or support is required by applicable law, RTO Exam shall be obligated to furnish any such maintenance or support.</p>

    <h3>Product Claims</h3>
    <p>RTO Exam is responsible for addressing any claims by you relating to the RTO Exam App or use of it, including, but not limited to:</p>
    <ul>
        <li>any product liability claim;</li>
        <li>any claim that the RTO Exam App fails to conform to any applicable legal or regulatory requirement; and</li>
        <li>any claim arising under consumer protection or similar legislation.</li>
    </ul>
    <p>Nothing in this Agreement shall be deemed an admission that you may have such claims.</p>

    <h3>Third Party Intellectual Property Claims</h3>
    <p>RTO Exam shall not be obligated to indemnify or defend you with respect to any third party claim arising out or relating to the RTO Exam App. To the extent RTO Exam is required to provide indemnification by applicable law, RTO Exam shall be solely responsible for the investigation, defense, settlement and discharge of any claim that the RTO Exam App or your use of it infringes any third party intellectual property right.</p>

    <h3>Changes to This Terms and Conditions</h3>
    <p>We may update our Terms and Conditions from time to time. Thus, you are advised to review this page periodically for any changes. We will notify you of any changes by posting the new Terms and Conditions on this page. These changes are effective immediately after they are posted on this page.</p>

    <h3>Contact Us</h3>
    <p>If you have any questions or suggestions about our Terms and Conditions, do not hesitate to contact us at <a href="mailto:contact@rtoexam.com">contact@rtoexam.com</a>.</p></strong> 
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Disclaimer
            </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This test is only for public awareness. Though all efforts have been made to ensure the accuracy of the content, the same should not be construed as a statement of law or used for any legal purposes. This application accepts no responsibility in relation to the accuracy, completeness, usefulness or otherwise, of the contents. Users are advised to verify / check any information with the Transport Department</strong> 
            </div>
            </div>
        </div>
        </div>

	</div>	
	<script src="././js/nav.js"></script>
</body>
</html>