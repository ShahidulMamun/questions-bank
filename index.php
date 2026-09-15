<?php
 require 'database.php';
?>

<html>
<head>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="responsive.css" media="screen and (max-width:90px)">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>QBankSystem</title>
</head>
  
<body>
<div class="main-content">
       <div class="websitename">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="web">
                    <img src="logo.png" width="120px" height="120px" style="float: left">
                   <h3 class="mt-4">State University Of Bangladesh</h3>
                </div>
            </div>
            <div class="col">
               

             



            </div>
        </div>
    </div>
</div> 
    <?php
              $db = new Database();

               if($_SERVER["REQUEST_METHOD"] == "POST"){
                  $email   = $_POST['email'];
                  $password= $_POST['password'];
                  $password= md5($password);
                  $role= $_POST['role'];
                  
       
                 $query = "SELECT * FROM users WHERE email= '$email' AND password= '$password'";
                     $select_userdata = $db->getuserData($query);
                

                 if ($select_userdata==true) {
                     $query ="SELECT * FROM users WHERE email='$email' AND password='$password'";
                     $confirmecode= $db->select($query);
                     $row = $db->select($query)->fetch_assoc();
                     if ($row['role']== $role){

                        if ($row['status']== 1){
                        header("location:home.php?email=$email");
                     }else{
                       $error ="Your account is blocked! Contact with authority";
                     
                     }

                       
                     }else{
                        $error = "Plase enter valid role";
                     
                     }
                 
                 }else{

                    $error ="Email or Password is Wrong!";
                                        
                 }
                                
                      
                }

              
            

            ?>

    </div> 

    <div class="container14">
        <div class="login">
          <form action="" method="post">

              <div class="alert-alart"> 
            <?php
             if (isset($error)) {  

                 echo   "<button type='button' class='btn btn-danger col-md-12'>".$error."</button>";
                 
                }
               ?>
      
       </div>
          

            <label for="fname">Email</label>
            <input type="Email" id="email" name="email" placeholder="Username/Email..." b="white" required="">

            <label for="lname">Password</label>
            <input type="Password" id="password" name="password" placeholder="Enter Password..." required="">

            <label for="lname">Role</label>

             <select name="role" id="role" required="">
                 <option value="">Select One</option>
                 <option value="1">Admin</option>
                 <option value="2">Dept_Admin</option>
                 <option value="3">Teacher</option>
                 <option value="4">Student</option>
            </select>
            <input type="submit" value="login" style="width: 100%; margin-top: 50px">
          </form>
        </div>
</div>






    </body>
</html>


   