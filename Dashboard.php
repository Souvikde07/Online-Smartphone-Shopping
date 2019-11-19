<?php
    session_start();
    $var= $_SESSION['login_user'];
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $con = mysqli_connect("localhost","root","root@123","Smartphone_Shopping");
        
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .phonename {
    margin: 20px 50px 0px 330px;  
    font-family: comic sans ms;
    font-size: 20px; 
    
</style>
<style>
    body{
    background-image: url(" i.jpg ");
    background-repeat:no-repeat;
       background-size:cover;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    
	      <a class="navbar-brand" href="Dashboard.php"> <h2>Smartphone Shopping Portal </h2></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
			  <li class="nav-item"><a href="Dashboard.php" class="nav-link"><span>Home</span></a></li>
			  <li class="nav-item"><a href="login.php" class="nav-link"><span> Login </span></a></li>
			  <li class="nav-item"><a href="registration.php" class="nav-link"><span>Registration</span></a></li>
              <li class="nav-item"><a href="login.php" class="nav-link"><span>Logout</span></a></li>
	        </ul>
	      </div>
	  </nav>



    <h2 style="font-family:Georgia"><center> Welcome <?php echo $var;?> </center></h2>
    
    <div class="template-page-wrapper">
      <form role="form" action="" method="post">
      
      <label for="phonename" class="phonename">PHONE NAME</label>
          <input type="text" style="width: 400px; height: 35px" placeholder="Enter Smartphone Name" name="phonename" required="">
<br><br>
       <center> <button type="submit" name="Search" value="search" class="btn btn-success">SEARCH</button>
</center>        
</form>
</div>
<?php
// Create connection
$conn = mysqli_connect("localhost","root", "root@123","Smartphone_Shopping");

    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
//echo "Connected successfully";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    error_reporting(E_ERROR);
$Phonename = $_POST['phonename'];
$sql = "select * from `item_smartphone` where Smartphone_name LIKE '%$Phonename%' and Status = '0'";

$result = mysqli_query($conn, $sql);
?>
<br>
<center>
<?php if(($row = mysqli_num_rows($result))!=0){ ?>
<h5><p style ="color:red;font-family:'verdana'">Details of Phones Available in the Store</p>

<div class="" style="overflow-y:scroll; height:226px; width:1000px">
  <table style=" font-family:'Courier New';  position: relative"
   class="table table-bordered table-striped mb-0">
  <tr style="postion:fixed; border: 3px solid red">
    <th style ="background-color: pink;border: 3px solid red">Brand Name</th>
    <th style ="background-color: pink;border: 3px solid red">Model Name</th>
    <th style ="background-color: pink;border: 3px solid red">IMEI Number</th>
    <th style ="background-color: pink;border: 3px solid red">Storage(in GB) </th>
    <th style ="background-color: pink;border: 3px solid red">RAM(in GB)</th>
    <th style ="background-color: pink;border: 3px solid red">Phone Color</th>
</tr>  <?php }?> 
<tbody>
<?php  if(($row = mysqli_num_rows($result))!=0){ 
while($row = mysqli_fetch_assoc($result)){ ?>
<tr>

<td style="border: 1px solid red"><?php echo $row['Brand_name']; ?></td>

<td style="border: 1px solid red"><?php echo $row['Smartphone_name']; ?></td>

<td style="border: 1px solid red"><?php echo $row['Imei_no']; ?></td>

<td style="border: 1px solid red"><?php echo $row['Storage']; ?></td>

<td style="border: 1px solid red"><?php echo $row['RAM']; ?></td>

<td style="border: 1px solid red"><?php echo $row['Smartphone_color']; ?></td>

</tr>

<?php
} } else{?>
    <p style="font-family:verdana; text-align: center;font-size:35px;">
"<?php echo $Phonename?>"is not available</p><?php }?>

</table>
</div> 
<?php } ?>
</h5></center><br><br>
<div class="template-page-wrapper">
      <form role="form" action="" method="post">
      
      <label for="Phone_name" class="phonename">PHONE NAME</label>
          <input type="text" name="reservephone" style="width: 400px; height: 35px" placeholder="Enter Smartphone Name to Buy/Register" required="">
<br><br>
    <center><button type="submit" name="submit" value="search" class="btn btn-danger">RESERVE</button>
</center><br>               
</form>
</div>

<center>
<?php
$conn1 = mysqli_connect("localhost","root", "root@123","Smartphone_Shopping");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['reservephone'])){
    error_reporting(E_ERROR);
        $reservephone = $_POST['reservephone'];
        $sql2 = "select * from `item_smartphone` where Status = '0' and Smartphone_name = '$reservephone'";
        $result2 = mysqli_query($conn1,$sql2);
        $count = mysqli_num_rows($result2);
        if ($count!=0){
		$sql = "update `item_smartphone` set Status ='1', User_name = '$var' where Smartphone_name = '$reservephone' ";
        $result = mysqli_query($conn, $sql);
        $sql1 = "update `users` set Smartphone_name ='$reservephone' where User_name= '$var'";
        $result1 = mysqli_query($conn, $sql1);
                
            echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Phone is successfully Reserved');
       </SCRIPT>");
                
            }else{
              echo  ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Reservation Unsuccessfull');
       </SCRIPT>");
            } 
        }
?>
<br><br><br>
</center>
</article>

</div>

</body>

</html>