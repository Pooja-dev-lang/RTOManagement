<?php 
    
$con = mysqli_connect("localhost","id21945070_rto_exam","Rtoexme@12","id21945070_rtoexam");
$array = array();
if($con)
{
   $array['connection']=1;
}
else{

    $array['connection']= 0;
}
$oldque=$_POST['oldque'];
$que = $_POST['que'];
$op1 = $_POST['op1'];
$op2=$_POST['op2'];
$op3=$_POST['op3'];
$ans= $_POST['ans'];
$sign=$_POST['sign'];

// $realimg = base64_decode($pimg);

// $path = "Product/"."$name".rand(0,10000).rand(0,100000).".jpg";
// file_put_contents($path, $realimg);
$query = "UPDATE question SET que='$que', option1='$op1', option2='$op2', option3='$op3', ans='$ans' WHERE que='$oldque' ";
//que='$que', option1='$op1', option2='$op2', option3='$op3', ans='$ans' WHERE que='$oldque' 
$sql = mysqli_query($con,$query);

if($sql)
{
    $array['result']=1;
}
else{
    $array['result']= 0;
}
echo json_encode($array);

?>