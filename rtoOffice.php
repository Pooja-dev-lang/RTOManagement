<!DOCTYPE html>
<html>
<head>
    <title>RTO Office</title>
    <script src="jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style1.css">
    <link rel="stylesheet" href="./css/nav.css">
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <style>
        /* Add custom styles for search bar */
        .search-bar {
            margin: 20px 0;
            text-align: center;
            position: relative;
        }

        .search-bar input {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            padding-right: 40px; /* Make space for the button */
        }

        .search-bar button {
            position: absolute;
            right: 26%;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
        }

        .search-bar button i {
            font-size: 20px;
            color: #333;
        }

        /* Adjust the body padding to prevent the navbar from overlapping content */
        body {
            padding-top: 50px;
        }

        /* Adjust .app-body margin */
        .app-body {
            margin: 20px;
        }

        /* No results message */
        .no-results {
            text-align: center;
            font-size: 18px;
            color: red;
            margin-top: 20px;
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
<br><br>

<div class="app-body">
    <!-- Search Bar -->
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search by city..." onkeypress="handleKeyPress(event)">
        <button onclick="filterDrivingSchools()"><i class="fas fa-search"></i></button>
    </div>
    
    <div id="results">
        <?php
            $conn = mysqli_connect('localhost','root','','rto');
            $sql = "SELECT * FROM rtoOffice";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
        ?>
            <div class="question-card" data-city="<?php echo strtolower($row['address']); ?>">
                <div>
                    <table>
                        <tr onclick="openMap('<?php echo $row['address']; ?>');">
                            <td>
                                <span id='question'><?php echo $row['city']; ?></span>
                            </td>
                            <td></td>
                        </tr>
                        <tr onclick="openMap('<?php echo $row['address']; ?>');">
                            <td>
                                <i class="fa fa-map-marker-alt"></i>&nbsp;&nbsp;<label><?php echo $row['address']; ?></label>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="tel:<?php echo $row['contactno']; ?>"><?php echo $row['contactno']; ?></a>
                            </td>
                            <td></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        <?php
                }
            }
        ?>
    </div>
    <div class="no-results" id="noResults" style="display: none;">No results found</div>
</div>

<script>
    function openMap(locationName){
        var baseUrl = "https://www.google.com/maps/search/?api=1&query=";
        var encodedLocation = encodeURIComponent(locationName);
        var mapUrl = baseUrl + encodedLocation;
        window.open(mapUrl, "_blank");
    }

    function filterDrivingSchools() {
        var input, filter, cards, cardContainer, noResults, title, i, hasResults = false;
        input = document.getElementById("searchInput");
        filter = input.value.toLowerCase();
        cardContainer = document.getElementById("results");
        cards = cardContainer.getElementsByClassName("question-card");
        noResults = document.getElementById("noResults");

        for (i = 0; i < cards.length; i++) {
            city = cards[i].getAttribute("data-city");
            if (city.indexOf(filter) > -1) {
                cards[i].style.display = "";
                hasResults = true;
            } else {
                cards[i].style.display = "none";
            }
        }

        if (hasResults) {
            noResults.style.display = "none";
        } else {
            noResults.style.display = "block";
        }
    }

    function handleKeyPress(event) {
        if (event.key === 'Enter') {
            filterDrivingSchools();
        }
    }
</script>
<script src="././js/nav.js"></script>
</body>
</html>
