


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

 
   
    
    <input type="email" name="email" id="email" placeholder=" email-id "     required>
   
<br>
</br>
   
    <input type="password" name="password" id="password" placeholder="password "  required>
    <br>

    <br/>
    <label for="internship">Choose where you want to intern:</label>
  <select name="company" id="company">
    <option value="microsoft">Microsoft</option>
    <option value="google">Google</option>
    <option value="bain">Bain</option>
    <option value="BCG">BCG</option>
  </select>

    <input type="submit" value="Submit" name="submit">
   
   <a href="connect.php">Sign Up</a>
  
 </form>
 

</div>
</div>
 
 
   
    
   
  
      


</body>
</html>





































<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) ) {
         if( isset($_POST['password'])){
        
           
       
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
           
            
           
           
           
                $result = mysqli_query($conn,"SELECT email,password1,fullname FROM loginbase WHERE email='$email' AND password1='$password' ");
                
                

            if (mysqli_fetch_array($result)) {
                
                
                $row = $result->fetch_assoc();
                echo $row;
                $storename=$row["fullname"];
                
                $storeemail=$row["email"];


                if(isset($_POST['submit'])){



           

       
                    $host = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "123456";
                    $dbName1 = "portal";
                    
    
                   
                    
    if($_POST['company']=="microsoft")
    {
        $Insert = "INSERT INTO microsoft(fullname1,email) values('$storename','$storeemail')";
        if ($conn->query($Insert)) {
            echo "Internship details stored successfully";
        }
      
        
    
    
    }
    
    elseif($_POST['company']=="google")
    {
        $Insert = "INSERT INTO google(fullname1,email) values('$storename','$storeemail')";
        if ($conn->query($Insert)) {
            echo "Internship details stored successfully";
        }
    }
        elseif($_POST['company']=="bain")
    {
        $Insert = "INSERT INTO bain(fullname1,email) values('$storename','$storeemail')";
        if ($conn->query($Insert)) {
            echo "Internship details stored successfully";
        }
      }
      elseif($_POST['company']=="BCG")
      {
          $Insert = "INSERT INTO bcg(fullname1,email) values('$storename','$storeemail')";
          if ($conn->query($Insert)) {
              echo "Internship details stored successfully";
          }
        
                    
                }
            }
                
                
                
    }
            else{
                echo 'please enter correct credential';
                
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
  



?>


