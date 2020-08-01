<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$countryCode = $_POST['countryCode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$checkbox1=$_POST['language']; 
$msg = $_POST['msg'];

 if (!empty($fname) || !empty($lname) || !empty($countryCode) || !empty($phone) || !empty($email) || !empty($gender) || !empty($Languages) || !empty($msg))
{ $host = "localhost";
  $dbusername = "root";
  $dbpassword = "root";
  $dbname = "volunteer";
  $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
  if(isset($_POST['submit']))  
{  
$conn=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string 
 
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
   $in_ch=mysqli_query($conn,"insert into request_quote(language) values ('$chk')");  
   
}  


  if (mysqli_connect_error())
  {
    die('Connect Error('.mysqli_connect_errorno().')'. mysqli_connect_error());
  }
  else {
    $SELECT = "SELECT email From resister Where email =? Limit 1 ";
    $INSERT = "INSERT Into resister (fname,lname,countryCode,phone,email,gender,Languages,msg) values(?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum= $stmt->num_rows;
    if($rnum==0){$stmt->close();
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssiissss",$fname,$lname,$countryCode,$phone,$email,$gender,$Languages,$msg);
    $stmt->execute();
   require 'thankyouvolunteer.php';
  }
  else{ echo"there exists";}
  $stmt->close();
  $conn->close();
}
}

  else{
    echo "all fields required";
    die();
  }
  ?>

 
