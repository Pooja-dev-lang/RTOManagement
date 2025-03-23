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

        .question-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            width: 100%;
            max-width: 700px;
            text-align: left;
            position: relative;
        }

        #timer {
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 18px;
            color: #333;
        }

        #question {
            font-size: 24px;
            margin-bottom: 20px;
        }

        #options {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .update {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .option {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .option input[type="radio"] {
            display: none;
        }

        .option label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .option label::before {
            content: "";
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid #333;
            border-radius: 50%;
            margin-right: 10px;
            box-sizing: border-box;
        }

        .option input[type="radio"]:checked + label::before {
            background-color: #333;
        }

        .avatar-preview img {
            max-width: 100%;
            max-height: 200px;
            display: block;
            margin: 0 auto;
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
<div class="container">
    <div class="app-body">
        <div class="question-card">
            <div id="question"></div>
            <div class="avatar-preview">
                <img src="" alt="" id="image">
            </div>
            <div id="options"></div>
            <button class="update" id="submit">Next Question</button>
            <div id="timer"><i class="fas fa-clock"></i> <span id="time">40</span> seconds</div>
           
        </div>
    </div>
</div>

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'rto');
    $questions = array();
    $sql = "SELECT * FROM question";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
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

    shuffle($questions);
    $questions = array_slice($questions, 0, 15);
?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const questionDiv = document.getElementById("question");
    const optionsDiv = document.getElementById("options");
    const timerSpan = document.getElementById("time");
    const submitButton = document.getElementById("submit");
    const imgElement = document.getElementById('image');

    let questions = <?php echo json_encode($questions); ?>;
    let currentQuestionIndex = 0;
    let timer;
    let rightCount = 0;
    let wrongCount = 0;

    function displayQuestion() {
        resetTimer();
        const currentQuestion = questions[currentQuestionIndex];
        questionDiv.innerHTML = `Question ${currentQuestionIndex + 1}: ${currentQuestion.question}`;
        if (currentQuestion.image !== "nosign") {
            imgElement.src = currentQuestion.image;
            imgElement.style.display = "block";
        } else {
            imgElement.style.display = "none";
        }

        const correctAnswerIndex = currentQuestion.correctAnswerIndex;
        const shuffledOptions = shuffle(currentQuestion.options);

        optionsDiv.innerHTML = "";
        shuffledOptions.forEach((option, index) => {
            const optionContainer = document.createElement("div");
            optionContainer.classList.add("option");

            const label = document.createElement("label");
            label.textContent = `${String.fromCharCode(65 + index)}. `; // Add A, B, C, etc.

            const input = document.createElement("input");
            input.type = "radio";
            input.name = "option";
            input.id = "option" + index;
            input.value = option;

            const optionText = document.createElement("span");
            optionText.textContent = option;

            label.appendChild(input);
            label.appendChild(optionText);
            optionContainer.appendChild(label);
            optionsDiv.appendChild(optionContainer);
        });

        startTimer();
    }

    function checkAnswer() {
        const selectedOption = document.querySelector('input[name="option"]:checked');
        if (selectedOption) {
            const selectedValue = selectedOption.value;
            const currentQuestion = questions[currentQuestionIndex];
            const correctAnswer = currentQuestion.options[currentQuestion.correctAnswerIndex];

            if (selectedValue === currentQuestion.correctAnswerIndex) {
                rightCount++;
            } else {
                wrongCount++;
            }
        } else {
            wrongCount++;
        }
        nextQuestion();
    }

    function nextQuestion() {
        currentQuestionIndex++;
        if (currentQuestionIndex < 15) {
            displayQuestion();
        } else {
            window.location.href = `result.php?rightCount=${rightCount}&wrongCount=${wrongCount}`;
     
      
        }
    }

    function shuffle(array) {
        return array.sort(() => Math.random() - 0.5);
    }

    function startTimer() {
        let timeLeft = 40;
        timerSpan.textContent = timeLeft;
        timer = setInterval(() => {
            timeLeft--;
            timerSpan.textContent = timeLeft;
            if (timeLeft <= 0) {
                clearInterval(timer);
                checkAnswer();
            }
        }, 1000);
    }

    function resetTimer() {
        clearInterval(timer);
    }

    displayQuestion();

    submitButton.addEventListener("click", () => {
        checkAnswer();
    });
});
</script>
</body>
</html>
