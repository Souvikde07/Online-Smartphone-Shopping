<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library_Management_System</title>
    </head>
    <body>

        <?php
             
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $FirstName = $_POST['first_name'];
            $LastName = $_POST['last_name'];
            $Studentid = $_POST['student_id'];
            $Phoneno = $_POST['Phone_no'];
            $Emailid = $_POST['Email-id'];
		 $Passward = $_POST['Password'];
		
            $con = mysqli_connect("localhost","root","root@123","library_management");
                       
        }
			$query = "INSERT INTO student (First_name, Last_name, Student_id, Phone_no,Email_id,Passward) VALUES ('$FirstName', '$LastName', '$Studentid', '$Phoneno','$Emailid','$Passward')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo ("success");
			            }
                                    else
                                    {
                                        echo ("Fail"); 
                                    }
                        
        ?>

        <form  action="" method="post">
            <input type="text"   name="first_name"> 
            <input type="text"   name="last_name">
            <input type="text"   name="student_id">
            <input type="text"   name="Phone_no">
            <input type="text"   name="Email-id">
		 <input type="password"   name="Password">
            <button type="submit"  name="submit" value="Register" >submit</button>

        </form>

    </body>
</html>
