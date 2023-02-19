<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="reg.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <script src="Regg.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
</head>
<body>
    <form onsubmit="return validate()" method="POST">
      <div class="form">
        <h2>Registered Here</h2>
        <input id="uname"  type="text" name="myname" placeholder="Enter Your Name"><span id="nm" class="text-danger font-weight-bold"></span>
        <input id="emaill" type="email" name="email" placeholder="Enter Email ID"><span id="em"></span>
        <p class="db">DOB:</p>
        <input id="dt" type="date" name="Date" placeholder=""><span id="dat"></span>
        <input id="mble"type="tel" name="mobile" placeholder="Enter Your Mobile No."><span id="mb"></span>
        <input id="pass" type="password" name="passw" placeholder="Enter Password"><span id="pas"></span>
        <input id="cpass" type="password" name="" placeholder="Conform Password"><span id="cpas"></span>
        <button  class="btnn" name="smbt" type="submit" value="save">Submit</button>
      </div>
    </form>
</body>
</html>  

<?php
   include 'connection.php';
   
   if(isset($_POST['smbt'])){

    $name = $_POST['myname'];
    $email = $_POST['email'];
    $dob = $_POST['Date'];
    $contact = $_POST['mobile'];
    $passw = $_POST['passw'];

    $insertquery = "insert into registration(name,email,dob, mobile,password) values('$name','$email','$dob','$contact','$passw')";
    
    $check = mysqli_query($con,$insertquery);

    if($check){
        ?>
        <script>
            alert("Data inserted Successfully !!");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Something went to wrong !!");
        </script>
        <?php
    }
   }
 ?>