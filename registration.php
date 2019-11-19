<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Smartphone_Shopping_System</title>
        <link rel="stylesheet" href="css/templatemo_main.css">
    </head>
    <style type="text/css">
  .username {
    margin: 30px 36px 0px 350px;  
    font-family: comic sans ms;
    font-size: 20px; }
  .Userid {
    margin: 20px 43px 0px 370px; 
    font-family: comic sans ms;
    font-size: 20px; }
    .mail {
    margin: 20px 40px 0px 395px; 
    font-family: comic sans ms;
    font-size: 20px; }
  .pNumber {
    margin: 20px 40px 0px 295px; 
    font-family: comic sans ms;
    font-size: 20px; }
  .address {
    margin: 20px 40px 0px 365px; 
    font-family: comic sans ms;
    font-size: 20px;
  }
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
    background-color: #80ff00;
    color: Red; }
</style>
    <style>
    body{
    background-image: url(" a.jpg ");
    background-repeat:no-repeat;
       background-size:cover;
    }
</style>
  
  <!--
    <div class="template-page-wrapper">
      <form class="form-horizontal templatemo-signin-form" role="form" action="" method="POST">

      <div class="form-group" style="color: white;width:130% ; margin-left:-100px">
          <div class="col-md-12"><br>
            <label for="username" class="col-sm-2 control-label" style="font-family:Verdana;font-color:red; margin-top:0px;">User Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" placeholder="Enter your User Name" name = "user_name"required=""><br>
            </div>
          </div>              
        </div>

        <div class="form-group" style="color: white;width:130% ; margin-left:-100px">
          <div class="col-md-12"><br>
            <label for="username" class="col-sm-2 control-label" style="font-family:Verdana; margin-top:0px">User Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" placeholder="Enter your ID (Aadhar Id/Pan No/any govt. Id)" name = "user_id"required=""><br>
            </div>
          </div>              
        </div>

        <div class="form-group" style=" color: white;width:130% ; margin-left:-100px">
          <div class="col-md-12"><br>
            <label for="username" class="col-sm-2 control-label" style="font-family:Verdana; margin-top:0px;">Email Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" placeholder="Enter your Email ID" name = "email_id"required=""><br>
            </div>
          </div>              
        </div>

        <div class="form-group" style=" color: white;width:130% ; margin-left:-100px">
          <div class="col-md-12"><br>
            <label for="username" class="col-sm-2 control-label" style="font-family:Verdana; margin-top:-10px">Shipping Address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" placeholder="Enter your Shipping Address" name = "shipping_address"required=""><br>
            </div>
          </div>              
        </div>

        <div class="form-group" style=" color: white;width:130% ; margin-left:-100px">
          <div class="col-md-12"><br>
            <label for="username" class="col-sm-2 control-label" style="font-family:Verdana; margin-top:-10px">Phone Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" placeholder="Enter your Phone Number" name = "phone_no"required=""><br>
            </div>
          </div>              
        </div>

        <div class="form-group" style=" color: white;width:130% ; margin-left:-100px">
          <div class="col-md-12"><br>
            <label for="username" class="col-sm-2 control-label" style="font-family:Verdana; margin-top:0px">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="username" placeholder="Enter your Password" name = "Password" required=""><br>
              
            </div>
          </div>              
        </div>

        

        <div class="form-group"style="color:blue; color: white;width:130% ; margin-left:-100px">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label class="btn btn-default">
                  <input type="checkbox" > Remember me
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group"style=" color: white;width:130% ; margin-left:-100px">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" value="Register" class="btn btn-default">
            </div>
          </div>
        </div>
  -->
  <div id="main-wrapper">
      <div class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <div class="logo"><h1 style="margin-left: 300px; font-size: 35px; font-family: Verdana;">Registrations - Smartphone Shopping Portal</h1>
            </div>
          </div>   
      </div>

      <h1 style="font-size:40px; font-family:Georgia; margin-top:10px"><center>Sign Up Page</center></h1>

      <div class="template-page-wrapper">
      <form role="form" action="" method="post">
      
      <label for="firstName" class="username">USERNAME</label>
          <input type="text" name="user_name" style="width: 400px; height: 35px" placeholder="Enter your User Name" required="">
    
      <label for="lastName" class="Userid">USER ID</label>
          <input type="text" name="user_id" style="width: 400px; height: 35px" placeholder="Enter your User ID (Aadhar ID, Pan ID or any other govt. ID)" required="">
    
      <label for="email" class="mail">EMAIL</label>
          <input type="text" name="email_id" style="width: 400px; height: 35px" placeholder="Enter your Email ID" required="">
    
    <label for="email" class="address">ADDRESS</label>
          <input type="text" name="shipping_address" style="width: 400px; height: 35px" placeholder="Enter your Shipping Address" required="">
    
    <label for="phoneNumber" class="pNumber">PHONE NUMBER</label>
          <input type="text" name="phone_no" style="width: 400px; height: 35px" placeholder="Enter your Phone Number" required="">
    
    <label for="password" class="psd">PASSWORD</label>
          <input type="password" name="Password" style="width: 400px; height: 35px" placeholder="Enter your Password" required="">
     
          <div class="form-group"style="color:blue; color: white;width:130% ; margin-left:200px ">
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
                  <button type="submit" name="submit" value="signup" class="button">Sign Up</button>
              </div>
            </div>
        </div>
        <p style="margin-left:590px;color:Red;font-family:comic sans ms;font-size:15px"> Already a Customer?<a href ="login.php" style="color:Red;font-family:comic sans ms;font-size:15px"> Click Here</a></p>
    </form>
        </div>
    </div>
<center>
    <?php
              error_reporting(E_ERROR);
        if($_SERVER["REQUEST_METHOD"]=="POST"){
          
            $User_name = $_POST['user_name'];
            $User_id = $_POST['user_id'];
            $Email_id = $_POST['email_id'];
            $Shipping_address = $_POST['shipping_address'];
            $Phone_no = $_POST['phone_no'];
		        $Password = $_POST['Password'];

            $con = mysqli_connect("localhost","root","root@123","Smartphone_Shopping");
                       
        }
			$query = "INSERT INTO users (User_name, User_id, Email_id, Shipping_address,Phone_no,Password)
       VALUES ('$User_name', '$User_id', '$Email_id', '$Shipping_address','$Phone_no','$Password')";
                        $result = mysqli_query($con,$query);
                        if($result){
                        echo ("You have Successfully Registered");
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                    window.alert('You have successfully registered into Smartphone Shopping Portal');
         
     window.location.href='login.php';
       </SCRIPT>");
			                            }
                        else
                                    {
                                       // echo ("Fail"); 
                                    }
                                    
          
        ?><br><br>
        
</center>
  </body>
</html>
