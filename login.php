<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Login - Smartphone_Shopping_System</title> 
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<style>
  .username {
    margin: 30px 37px 0px 350px; 
    font-family: comic sans ms;
    font-size: 20px; }
    .psd {
    margin: 20px 40px 0px 345px; 
    font-family: comic sans ms;
    font-size: 20px; }
.button {
    width: 400px; 
    height: 50px;
    font-family: Verdana; 
    font-size: 30px;
    border:1px;
    margin: 0px 0px 20px 475px;
    background-color: #8c7373;
    color: #00bfff; }
</style>
<style>
    body{
    background-image: url(" a.jpg ");
    background-repeat:no-repeat;
       background-size:cover;
    }
</style>
    <?php
    session_start();

if (isset($_POST['user_name'])) {
    $User_name = $_POST['user_name'];	
    
    $Password = $_POST['Password'];
    
    
    $con = mysqli_connect("localhost","root","root@123","Smartphone_Shopping");
    
    if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }


  $query = "SELECT * FROM users WHERE User_name='$User_name' and Password='$Password'";
                    $result = mysqli_query($con,$query);
                    $count = mysqli_num_rows($result);
                    if($count==1){
                    $_SESSION['login_user']= $User_name;
   echo ("<SCRIPT LANGUAGE='JavaScript'>

         window.alert('You are logged in successfully');
         
     window.location.href='Dashboard.php';
       </SCRIPT>");
       
              }else{
                  echo("Invalid credenatials");
              }
    }
       
          else{

    ?>
  <!--Header-->
  <div id="main-wrapper">
      <div class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <div class="logo"><h1 style="margin-left: 370px; font-size: 35px; font-family: Georgia;">Login - Smartphone Shopping Portal</h1>
            </div>
          </div>   
      </div>
    <div class="template-page-wrapper">
    <h1 style="font-size:40px; font-family: Georgia; margin-top:10px"><center>Login Page</center></h1>
    <!--Form-->

    <form role="form" action="" method="post">
      <label for="firstName" class="username">USERNAME</label>
          <input type="text" name="user_name" style="width: 400px; height: 35px" placeholder="Enter your User Name" required="">
    
      <label for="password" class="psd">PASSWORD</label>
          <input type="password" name="Password" style="width: 400px; height: 35px" placeholder="Enter your Password" required="">
     
        <div class="form-group"style="color:blue; color: red;width:130% ; margin-left:200px ">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label class="">
                  <input type="checkbox" > Remember me
                </label>
              </div>
            </div>
          </div>
        </div>

          <div class="form-group">
          <div class="col-md-12">
              <div class="col-sm-12">
                  <button type="submit" name="submit" value="Login" class="button">Login</button>
              </div>
            </div>
        </div>
        <p style="margin-left:590px;color:#ff0000;font-family:comic sans ms;font-size:15px"> New Customer?
        <a href ="registration.php" style="color:#ff0000;font-family:comic sans ms;font-size:15px"> Click Here</a></p>
    
      </form>
    </div>
  </div>
  
  <?php } ?>
</body>
</html>