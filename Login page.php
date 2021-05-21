<?php 
   include 'config.php';
   
   ?>
<html>
   <head>
      <meta charset="utf-8">
      <style>
         *{
         padding: 0px;
         margin: 0px;
         box-sizing: border-box;
         }
         body{
         background-color:#d3e91e69;
         }
         h2{
         background-color:#2aad95;
         padding: 20px;
         width:auto;
         text-align: center;
         margin-bottom: 100px;
         }
         .d1{
         background-color: white;
         font-size: 21px;
         justify-content: center;
         width:500px;
         margin: auto;
         padding:30px;
         }
         .b3{
         width: 200px;
         padding: 20px;
         justify-content: center;
         margin:100px;
         border-radius: 50px;
         font-size:18px;
         background-color: #2aad95;
         font-weight: bold;
         }
         .b1{
         width:300px;
         padding: 10px;
         margin: auto;
         }
      </style>
   </head>
   <body>
      <h2>Login Page</h2>
      <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $user = $_POST['username'];
              $pass = $_POST['password']; 
              $name1="mohammed";
              $name2="shimaa";
              $name3="ali";
              $name4="nada";
              $name5="ghada";
              $p1=112233;
              $p2=12345;
              $p3=13579;
             $p4=2468;
            $p5=56789;
                  
         if ((( $user==$name1)&&($pass==$p1))|(( $user==$name2)&&($pass==$p2))|(( $user==$name3)&&($pass==$p3))|(( $user==$name4)&&($pass==$p4))|(( $user==$name5)&&($pass==$p5))){
                  echo "successful Login";
         } 
         else {
         echo "please enter valid data"; }
         
         $con->close();}
         ?>
      <div class="d1">
         <div >
            <form method="post" >
               Username
               <input class="b1"type="text" name="username" placeholder="Enter username"required   autofocus name="username"><br><br>
               Password
               <input class="b1"type="password" name="password" placeholder="Enter password"required   autofocus name="password"><br><br>
               <input class="b3"type="submit" value="Log in">
            </form>
         </div>
      </div>
   </body>
</html>
        