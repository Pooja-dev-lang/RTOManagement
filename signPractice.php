<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quiz Module</title>
        <script src="jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >
        <link rel="stylesheet" type="text/css" href="./css/style1.css" />
        <link rel="stylesheet" href="./css/nav.css" />
        <!-- Unicons CSS -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <style>

.option {
  padding: 10px;
  margin-bottom: 10px;
  cursor: pointer;
}

.correct {
  background-color: green;
}

.wrong {
  background-color: red;
}

.update{
    margin-left: 0px;
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
                    <li><a href="Practice_signed.php">Sign Questions</a></li>
                    <li><a href="Practice_text.php">Text Questions</a></li>
                    <li><a href="bookmarkDisplay.php">BookMark</a></li>
                </ul>
            </li>

            <li class="dropdown">
            <a href="#"><i class="fas fa-chalkboard-teacher"></i> Practice</a>
                <ul class="dropdown-content">
                    <li><a href="signPractice.php">Sign Questions</a></li>
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
      <br><br><br><br><br><br>      
<h1 style="text-align: center; font-size: 45px; color: black;">Sign Questions</h1>
      <div class="app-body">
<div class="question-card">
    <table>
        <tr>
            <td>
                <div class="avatar-preview">
                    <img src="" alt="dfghj" id="image">
                </div>
            </td>
            <td>
                <h2 id="question"></h2>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div id="options"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>
                <button class="update" onclick="checkAnswer()">Next Question</button>
            </td>
            <td></td>
        </tr>
    </table>
  </div>
  </div>
    <?php
            $conn = mysqli_connect('localhost','root','','rto');
            $questions = array();
            $sql = "SELECT * FROM question where category = 'sign'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    $options = array($row['option1'], $row['option2'], $row['option3']);
                    $question = array(
                        "question" => $row["que"],
                        "image" => $row["signs"],
                        "options" => $options,
                        "correctAnswerIndex" => $row["ans"]
                    );
                    array_push($questions, $question);
                }
            }

        ?>
    <script>
        let questions = <?php echo json_encode($questions);?>;
        let currentQuestionIndex = 0;
        const questionElement = document.getElementById('question');
        const optionsElement = document.getElementById('options');
        const imgElement =document.getElementById('image');

        function displayQuestion() {
        const currentQuestion = questions[currentQuestionIndex];
        questionElement.textContent = currentQuestion.question;

        // Displaying the image if available
        if (currentQuestion.image) {
            imgElement.src = currentQuestion.image;
            imgElement.alt= "ok"
            // alert(imageElement.src)
            // optionsElement.appendChild(imageElement);
        }
        optionsElement.innerHTML = '';
        currentQuestion.options.forEach((option, index) => {
            const optionElement = document.createElement('div');
            optionElement.textContent = option;
            optionElement.classList.add('option');
            optionElement.setAttribute('data-index', index);
            optionElement.onclick = () => selectOption(index);
            optionsElement.appendChild(optionElement);
        });
}

        function selectOption(selectedIndex) {
            const selectedOption = optionsElement.querySelector(`[data-index="${selectedIndex}"]`);
            const correctIndex = questions[currentQuestionIndex].correctAnswerIndex;
            if (questions[currentQuestionIndex].options[selectedIndex] === correctIndex) {
                selectedOption.classList.add('correct');
        } else {
            selectedOption.classList.add('wrong');
            let inx = questions[currentQuestionIndex].options.findIndex((el)=>el === questions[currentQuestionIndex].correctAnswerIndex);
            const correctOption = optionsElement.querySelector(`[data-index="${inx}"]`);
            correctOption.classList.add('correct');
        }
        }

        function checkAnswer() {
        const selectedOption = optionsElement.querySelector('.option.correct');
        if (selectedOption) {
            selectedOption.classList.remove('correct', 'wrong');
        }
        currentQuestionIndex++;
        displayQuestion();
        
        }

        displayQuestion();

    </script>
</body>
</html>
