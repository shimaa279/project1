<?php 
   include 'config.php';
   
   ?>
<html>
   <head>
      <style>
         *{
         padding: 0px;
         margin: 0px;
         box-sizing: border-box;
         }
         body{
         background-color:#e9981e52;
         }
         h2{
         background-color:#81b1a8;
         padding: 20px;
         width:auto;
         text-align: center;
         margin-bottom: 50px;
         }
         .d1{
         background-color: white;
         font-size: 21px;
         justify-content: center;
         width:500px;
         margin:auto;
         margin-bottom: 30px;
         padding:30px;
         }
         .b3{
         width: 200px;
         padding: 20px 0px;
         justify-content: center;
         margin-left: 120px;
         border-radius: 50px;
         font-size:18px;
         background-color: #81b1a8;
         font-weight: bold;
         }
         .b1{
         width:300px;
         padding: 10px;
         margin:auto;
         }
         label
         {
         padding-right:30px;
         }
      </style>
   </head>
   <body>
      <h2>Register Page</h2>
      <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $fristname = $_POST['frist_name'];
             $lastname = $_POST['last_name'];
              $user = $_POST['username'];
              $pass = $_POST['password'];
             $Email = $_POST['email'];
             $gender = $_POST["gender"];
             $birth = $_POST['birth_date'];
             $Bio = $_POST['bio'];
             $Address = $_POST['address'];
         
         
         $sql = "INSERT INTO social_usersregister (frist_name,last_name,username,password,email,gender,birth_date,bio,address)VALUES ('$fristname','$lastname','$user','$pass','$Email','$gender','$birth','$Bio','$Address')";
         if ($con->multi_query($sql) === TRUE) {
         echo "successful registration";
         } else {
         echo "please enter your data";
         }
         
         $con->close();}
         ?>
      <div class="d1">
         <form method="post" >
            frist_name
            <input class="b1"type="text" name="frist_name" placeholder="Enter name"required  autofocus name="frist_name"><br><br>
            last_name
            <input class="b1" type="text" name="last_name" placeholder="Enter name"  autofocus name="last_name"><br><br>
            Username
            <input class="b1" type="text" name="username" placeholder="Enter username"required  autofocus name="username"><br><br>
            Password
            <input class="b1" type="password" name="password" placeholder="Enter password"required  autofocus name="password"><br><br>
            email
            <input class="b1" type="email" name="email" placeholder="Enter email"required  autofocus name="email"><br><br>
            <label>gender</label>
            <input type="radio" value="male" name="gender" >Male
            <input type="radio" value="female" name="gender">Female <br><br>
            birth_date
            <input class="b1" type="date" name="birth_date"  autofocus name="birth_date"><br><br>
            bio
            <input class="b1" type="text" name="bio" placeholder="Enter bio"  autofocus name="bio"><br><br>
            address
            <input class="b1" type="text" name="address" placeholder="Enter address"  autofocus name="address"><br><br>
            <input class="b3"type="submit" value="Sign Up">
         </form>
      </div>
    </body>
</html>