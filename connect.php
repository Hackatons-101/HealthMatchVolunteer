<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$countryCode = $_POST['countryCode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$Languages = $_POST['Languages'];
$msg = $_POST['msg'];









if (!empty($fname) || !empty($lname) || !empty($countryCode) || !empty($phone) || !empty($email) || !empty($gender) || !empty($Languages) || !empty($msg))
{ $host = 'healthmatch-server.mysql.database.azure.com';
  $username = 'HEALTHMATCH@healthmatch-server';
  $password = 'Hackathon2020';
  $db_name = 'volunteer';
    if(isset($_POST['submit']))  
  { 
  $conn = mysqli_init();
  mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
  if (mysqli_connect_errno($conn)) {
  die('Failed to connect to MySQL: '.mysqli_connect_error());
  }
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
    $b=implode(",",$Languages);
    $stmt->bind_param("ssiissss",$fname,$lname,$countryCode,$phone,$email,$gender,$b,$msg);
    $stmt->execute();
    header("location: thankyouvolunteer.php");
    exit;
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
 
