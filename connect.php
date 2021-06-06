
<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="main">
<div class="register">
      <h2>ICC internship page </h2>
 <form action="" method="POST" id="register">

 <input type="text" name="fullname" id="fullname" placeholder=" enter your fullname "     required>
   
   <br>
   </br>
   
    
    <input type="email" name="email" id="email" placeholder=" email-id "     required>
   
<br>
</br>
   
    <input type="password" name="password" id="password" placeholder="password"  required>
    <br>
    <br/>
   
    <input type="submit" value="Submit" name="submit">
   
    <a href="authentication.php">Login</a>
 </form>
</body>
</html>


<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) ) {
         if( isset($_POST['password'])){
        
            $fullname = $_POST['fullname'];
       
            $email = $_POST['email'];
            $password = $_POST['password'];

        
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "123456";
            $dbName = "portal";
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
            if ($conn->connect_error) {
            die('Could not connect to the database.');
            }
            else {
           
        
            $Insert = "INSERT INTO loginbase(email,password1,fullname) values('$email','$password','$fullname')";
           
             
                
             
           
                
                
                
                if ($conn->query($Insert)) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    
                    echo $mysqli ->error;
                    echo "yy";
                }
            }
        }
            
    
        else {
            echo "Please enter email-id";
            die();
        }
    }
    else{

        echo "please enter password";
        die();
    }
}
  


else {
    echo "Submit button is not set";
}

?>
