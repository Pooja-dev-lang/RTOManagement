<?php
session_start();

$username = $_SESSION['username'];

if($username!="admin"){
	header("Location: index.php");
}

?>
<html>
    <head>
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
       
        <title>Quiz Module</title>
        <script src="jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/style1.css" />
        <link rel="stylesheet" href="./css/nav.css" />
        <!-- Unicons CSS -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
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
      <br><br><br><br><br>
        <div class="app-body">
      <h1 style="text-align: center; font-size: 45px;">Text Questions</h1>
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
                    
                </div>
                <br>
                    <label for="op1">A:&nbsp;&nbsp;&nbsp;<?php echo $row['option1'];?></label><br>
                    <label for="op2">B:&nbsp;&nbsp;&nbsp;<?php echo $row['option2'];?></label><br>
                    <label for="op3">C:&nbsp;&nbsp;&nbsp;<?php echo $row['option3'];?></label><br>
                    <table>
                        <tr>
                            <td>
                                <label for="op4"><b> Answer</b>: <?php echo $row['ans'];?></label><br>
                            </td>
                            <td>
                                <button class="update"><a style="color:white" href="updateQuestion.php?id=<?php echo $row['qid'];?>">update</a></button>
                            </td>
                            <td>
                                <input type="button" id="<?php echo $row['qid'];?>" class="delete" value="Delete">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <?php
                        }
                    }

                ?>
        </div>
        <script>
        $(document).ready(function(){
            $('.delete').click(function(){
                var qid = $(this).attr('id');

                if(qid!=''){
                    $.ajax({
                        url : 'delete.php',
                        method : 'post',
                        data : {
                            qid:qid,
                        },
                        success : function(data){
                            alert(data);
                            location.reload();
                        }
                    })
                }
            });
        });
    </script>
    <script src="././js/nav.js"></script>
    </body>
</html>
