<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="signupvolunteer.css" />
    <script
      type="text/javascript"
      src="https://cdn.weglot.com/weglot.min.js"
	></script>

	 <script>
        Weglot.initialize({
          api_key: "wg_6595b397394b082513ae5269c8992a3d7",
        });
      </script>
    <style>


@import url("https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  background-image: linear-gradient(-225deg, #e3fdf5 0%, #ffe6fa 100%);
  background-image: linear-gradient(to top, #6be7e1 0%, #fed6e3 100%);
  background-attachment: fixed;
  background-repeat: no-repeat;

  font-family: "Vibur", cursive;
  /*   the main font */
  font-family: "Abel", sans-serif;
  opacity: 0.95;
  /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
}




select {
  background-color: rgba(0, 0, 0, 0.644);
  width: 30%;
  margin-right: 0;
  height: 50px;
  border-radius: 5px 5px 5px 5px;
  color: white;
  margin-top: 2%;
  padding: 15px;
  font-size: 16px;
  font-family: "Abel", sans-serif;
}

::placeholder {

  color: white;
}

      .volunteerlogo {
        width: 40%;
        text-align: center;
      }
     
      }
	     .viewbtn{
        display: block;
        width: 100px;
        height: 35px;
        border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #45a29e, #5bcadd, #3292be);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: 0.5s;
      }
      .viewbtn:hover {
        background-position: right;
      }

      .acceptbtn{
        display: block;
        width: 150px;
        height: 35px;
        border-radius: 25px;
        outline: none;
        border: none;
       background-image: linear-gradient(to right, #745ed8, #bcb2df);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin-top: 1rem;
        margin-left: 32%;
        cursor: pointer;
        transition: 0.5s;
      }
      .acceptbtn:hover {
        background-position: right;
        color:black;
      }


      i{
        margin-right:0.3rem;
      }

      form{
 margin-top:2rem;
      }

      @media(min-width:900px)
      {
     form{

       margin-left:25%;
       margin-top:5%;
     }

     .acceptbtn{
       display: block;
       width: 150px;
       height: 35px;
       border-radius: 25px;
       outline: none;
       border: none;
      background-image: linear-gradient(to right, #5ac5e6, #bcb2df);
       background-size: 200%;
       font-size: 1.2rem;
       color: #fff;
       font-family: "Poppins", sans-serif;
       text-transform: uppercase;
       margin-top: 1rem;
       margin-left: 39%;
       cursor: pointer;
       transition: 0.5s;
     }

      }

       #initiallyHiddenBlock {
          display: none;
      }
      .homebtn {
        border: 1px solid white;
        background-color: rgb(105, 223, 197);
        margin: 0.5rem;
        width: 90%;
        height: 5rem;
        font-size: 20px;
        font-family: "montserrat";
        font-weight: 600;
        cursor: pointer;
        border-radius: 5px;
        transition: 0.8s;
        position: relative;
        overflow: hidden;
        color: black;
        margin-left:1rem;
      }

      @media (min-width: 600px) {
        .homebtn {
          border: 1px solid white;
          border-radius: 5px;
          margin: 1rem;
          width: 80%;
          height: 5rem;
          font-size: 20px;
          font-family: "montserrat";
          font-weight: 600;
          cursor: pointer;
          color: black;
          background-color: rgb(105, 223, 197);
          transition: 0.8s;
          position: relative;
          overflow: hidden;
        }
      }

      .homebtn:hover {
        color: white;
        background: #51a09b;
      }


 .margin{
       margin-top: 15%;
      }
      @media(min-width:900px)
     {

       .buttongrid{

        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr;
        margin-left: 17%;

      }
      .margin{
       margin-top: 17%;
      }
      }

    </style>
  </head>
  <body>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <br>
    <div class="overlay">
    <div style="text-align: center;">  <img
        src="logo.png"
        class="volunteerlogo"
        style="padding-left: 2rem;"
      /></div>
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
  
  //Establishes the connection
  $conn = mysqli_init();
  mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
  if (mysqli_connect_errno($conn)) {
  die('Failed to connect to MySQL: '.mysqli_connect_error());
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
   echo '<script>alert("Email Account already exists!")</script>'; 

    die();
  }
  ?>

  <form action=""  method="post" name="google-sheet" id="HideBlock">

      <input type="text" class="form-control"
    name = "FirstName" value = "<?php echo $_POST['fname'];?>" readonly>
    <br>
     <input type="text" class="form-control"
    name = "LastName" value = "<?php echo $_POST['lname'];?>" readonly>
    <br>
     <input type="email" class="form-control"
    name = "Email" value = "<?php echo $_POST['email'];?>" readonly>
    
    <br>
    

<div style="text-align:center">
<div style="text-align: center;"> <button class ="acceptbtn":hover name="submit"  id="showHiddenBlock" >CONFIRM


      </button></div>
      </form>
<div style="text-align: center;" id="initiallyHiddenBlock" class="margin">
<br>
      <h1>Submitted!</h1>
</div>

 <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"
      ></script>


     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
     <script>
     $(document).ready(function() {
      $('#showHiddenBlock').click(function() {
          $('#initiallyHiddenBlock').show();
		  $('#HideBlock').hide();
      });
  });
  </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>
