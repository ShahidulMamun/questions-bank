<?php
 require 'database.php';
 $db = new Database();
?>


<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="responsive.css" media="screen and (max-width:90px)">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/3834b98537.js"></script>

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="css/style.css">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
  <?php
   if (isset($_GET['email'])=='POST') {
    $email=$_GET['email'];

    $query="SELECT * FROM users WHERE email='$email'";
    $select_username=$db->select($query);
    $result = mysqli_fetch_array($select_username,MYSQLI_ASSOC);
    $result['username'];
    $result['role'];



 }
 ?> 
<body>
  
<div class="main-content">
       
       <div class="websitename">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="web">
                   <a href="home.php?email=<?php echo $result['email']?>"><img src="logo.png" width="120px" height="120px" style="float: left"></a>
                   <h3 class="mt-4">State University Of Bangladesh</h3>
                </div>
            </div>
            <div class="col">
                <div class="web1">
                    <br><br><h2><i class="fa fa-user-circle-o" aria-hidden="true"></i></h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>
 

 </div> 

 <div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header  navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Dashboard</a>
      </li>
        
      

      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Department</a>
      </li>

       <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Teacher</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Question</a>
      </li>


    </ul>

  

  </nav>
  <!-- /.navbar -->

   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         
        </div>
        <div class="info ">
         
          <a href="#" class="d-block"><?php echo "<strong>"."&nbsp".$result['username']."   : </strong>"?>
            
         <?php 
           if($result['role']==1) {
            echo "As Admin";
          }elseif ($result['role']==2) {
            echo "Loged as Editor";
          }elseif ($result['role']==3) {
            echo "Loged as Teacher";
            # code...
          }else{
            echo "Loged as Student";
          } ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php if ($result['role']==1) {?>
              
     
    
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-user-cog"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_admin.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Admin</p>
                </a>
              </li>
              
            </ul>
          </li>
  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-building"></i>
              <p>
                Department
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="department.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_department.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Department</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="fas fa-users"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="alluser.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
              
   
            </ul>
          </li>


               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-user-circle"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="update_password.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
   
            </ul>
          </li>

    
          <?php }elseif ($result['role']==2) { ?>
            

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-chalkboard-teacher"></i>
              <p>
                Teacher
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="teacher.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teacher List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_teacher.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
              
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-user-graduate"></i>
              <p>
                Student
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="student.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_student.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>
              
            </ul>
          </li>
         

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="fas fa-file-image"></i>
              <p>
                Course
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="course.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Course List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_course.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Course</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-user-circle"></i>
              <p>
                Blooms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addblooms.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Blooms</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-user-circle"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="update_password.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
   
            </ul>
          </li>
    
          
          <?php } elseif($result['role']==3){?>


  

         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="fas fa-file-image"></i>
              <p>
                Course
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="mycourse.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Course</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="fas fa-file-image"></i>
              <p>
                Question
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="question.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>question List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_question.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add question</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-user-circle"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="update_password.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
   
            </ul>
          </li>


          <?php }elseif($result['role']==4){?>

             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-user-circle"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="update_password.php?email=<?php echo $result['email']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
   
            </ul>
          </li>

          <?php }?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Student</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Create Department -->

        <?php
        $db = new Database();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
                  $username   = $_POST['std_name'];
                  $email= $_POST['email'];
                  $password=  md5($_POST['password']);
                  $std_id=  $_POST['user_id'];
                  $role= $_POST['role'];
                  

                
          if ($username=="") {
            $error= "<span style=color:red;>"."Department Name Must Not Empty.</span>";
            
            
            
          }else{  
                   $checkquery  ="SELECT * FROM users WHERE email= '$email'";
                   $checkresult = $db->select($checkquery);
                   if ($checkresult!=false){
                     $error="This email alrady used! try another email";
                 
                   }else{
               
                $query ="INSERT INTO users(username,email,password,user_id,role) VALUES('$username','$email','$password','$std_id','$role')";
                $insert_userdata = $db->insert($query);
                         $msg ="Student Added Successfully !";
                         
                   }

            
          }
          }
      
      ?>


  

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="login">
          <form action="" method="post">

        <div class="alert-alart"> 
            <?php
             if (isset($error)) {  

                 echo   "<button type='button' class='btn btn-danger col-md-12'>".$error."</button>";
                   
                   }
                if (isset($msg)) {
                  echo    "<button type='button' class='btn btn-success col-md-12'>".$msg."</button>";
                   
                }
               ?>
      
       </div>


            <label for="std_name">Student Name</label>
            <input type="text" id="std_name" name="std_name" placeholder="Student..." b="white" required="">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email..." required="">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password..." required="">
            <label for="password">Student ID</label>
            <input type="text" id="user_id" name="user_id" placeholder="Student id..." required="">

              <input type="text" id="role" name="role"  value="4" hidden="">

            <input type="submit" value="Add Student" style="width: 100%; margin-top: 50px">
          </form>
        </div>

        </div>
       
      </div><!-- /.container-fluid -->
    </section>

  


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- AdminLTE App -->
<script src="js/adminlte.js"></script>


 </body>
</html>


   