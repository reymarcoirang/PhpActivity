<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/login.css">
    <title>Log-In Form</title>
</head>
<?php
  $arrUserType = array("admin"=>"admin","rey marco"=>"admin","pepito"=>"content manager","juan"=>"content manager","pedro"=>"system user");
  $arrPassword = array("admin"=>"Pass1234","rey marco"=>"hi1234","pepito"=>"manaloto","juan"=>"delacruz","pedro"=>"penduko");

?>

<body id="LoginForm">
<div class="container">
    <!-- Here to show to alert box when you click submit -->
    <?php
        if(isset($_POST['btnSubmit'])){
            $userType = $_POST['drpPosition'];
            $username = $_POST['txtUsername'];
            $password = $_POST['txtPassword'];
            if($userType === $arrUserType[$username] && $password === $arrPassword[$username]):
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo '<strong>Welcome to System:</strong>'. $username .'';
                echo '<button type="button"class="close"data-dismiss="alert"aria-label="Close">';
                echo '<span aria-hidden="true">&times;</span>';
                echo '</button>';
                echo '</div>';
            else:
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo '<strong>Invalid</strong> Username/Password';
                echo '<button type="button"class="close"data-dismiss="alert"aria-label="Close">';
                echo '<span aria-hidden="true">&times;</span>';
                echo '</button>';
                echo '</div>';
            endif;
        }
    
    
    ?>
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your username and password</p>
   </div>
    <form id="Login" method="post">
        <div class="form-group">
            <method="post">
        <select name="drpPosition" id="drpPosition" class="form-control">
            <option value="admin">Admin</option>
            <option value="content manager">Content Manager</option>
            <option value="system user">System User</option>

        </select>
        </div>

        <div class="form-group">


            <!-- change email type to text and placeholder and name="txtUsername"-->
            <input type="text" class="form-control" name="txtUsername" id="inputEmail" placeholder="Username">
        </div>

        <div class="form-group">

        <!-- change email type to text and placeholder and name="txtPassword"-->
        <input type="password" class="form-control" name="txtPassword" id="inputPassword" placeholder="Password">

            
        </div>
        <!--Put name="btnSubmit here" -->
        <button type="submit" class="btn btn-primary" name="btnSubmit">Login</button>

    </form>
    </div>
</div></div></div>


     <script href="/js/jquery.js"></script>
     <script href="/js/bootstrap.js"></script>

</body>
</html>