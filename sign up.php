<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=.login-box, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div>

            <?php
            if(isset($_POST['create']))
            {
                
            
                $email           = $_POST ['email'];
              
                $password      = $_POST ['password'];
            
              $sql = "INSERT INTO users ( firstname, lastname ,email, phonenumber, password) VALUES(?,?,?,?,?)";
              $stmtinsert = $db->prepare($sql);
              $result = $stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
              if($result){
                echo 'Successfully Saved';
              }else {
                echo 'There was an error ';
              }

            }


      ?>
           
       </div>

    
      <div class="cointainer">

     <div class="login-box">
      <h2>SIGN IN</h2>
       <form action="sign up.php" method="post">
        <div class="input-box">
            <input type= "text" id="email" name="email" required>
            <label>Email</label>
        </div>
        <div class="input-box">
            <input type="password" id="password" name="password" required>
            <label>Password</label>
        </div>
        <div class="forgot-pass">
            <a href="forgotpassword.html"><p>forgot password?</p></a>

        </div>
        <button type="submit"  id="register"  class="btn">Login</button>
        <div class="signup-link">
            <a href="#">Sign up</a>
        </div>

         </form>

         </div>
         <span style="--i:0;" ></span>
         <span style="--i:1;" ></span>
         <span style="--i:2;" ></span>
         <span style="--i:3;" ></span>
         <span style="--i:4;" ></span>
         <span style="--i:5;" ></span>
         <span style="--i:6;" ></span>
         <span style="--i:7;" ></span>
         <span style="--i:8;" ></span>
         <span style="--i:9;" ></span>
         <span style="--i:10;" ></span>
         <span style="--i:11;" ></span>
         <span style="--i:12;" ></span>
         <span style="--i:13;" ></span>
         <span style="--i:14;" ></span>
         <span style="--i:15;" ></span>
         <span style="--i:16;" ></span>
         <span style="--i:17;" ></span>
         <span style="--i:18;" ></span>
         <span style="--i:19;" ></span>
         <span style="--i:20;" ></span>
         <span style="--i:21;" ></span>
         <span style="--i:22;" ></span>
         <span style="--i:23;" ></span>
         <span style="--i:24;" ></span>
         <span style="--i:25;" ></span>
         <span style="--i:26;" ></span>
         <span style="--i:27;" ></span>
         <span style="--i:28;" ></span>
         <span style="--i:29;" ></span>
         <span style="--i:30;" ></span>
         <span style="--i:31;" ></span>
         <span style="--i:32;" ></span>
         <span style="--i:33;" ></span>
         <span style="--i:34;" ></span>
         <span style="--i:35;" ></span>
         <span style="--i:36;" ></span>
         <span style="--i:37;" ></span>
         <span style="--i:38;" ></span>
         <span style="--i:39;" ></span>
         <span style="--i:40;" ></span>
         <span style="--i:41;" ></span>
         <span style="--i:42;" ></span>
         <span style="--i:43;" ></span>
         <span style="--i:44;" ></span>
         <span style="--i:45;" ></span>
         <span style="--i:46;" ></span>
         <span style="--i:47;" ></span>
         <span style="--i:48;" ></span>
         <span style="--i:49;" ></span>
    </div>

</body>

</html>