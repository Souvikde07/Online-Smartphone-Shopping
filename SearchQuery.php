<!DOCTYPE html>

<!--

To change this license header, choose License Headers in Project Properties.

To change this template file, choose Tools | Templates and open the template in the editor.
-->

<html>

<head>

<title></title>
</head>
<body>
<div class="container">
<header>
<h1>Library management System</h1>
</header>
 



<article>


<form action="" method="post">
<input type="text"	placeholder="Enter Book Title" name="bname" required="">
<button type="submit"> SEARCH </button>
</form>

<?php

// Create connection
$conn = mysqli_connect("localhost","root", "root@123","library_management");

// Check connection if (!$conn) {
die("Connection failed!!!!!! " . mysqli_connect_error());

}
echo "Connected successfully";
if($_SERVER["REQUEST_METHOD"]=="POST"){

$Booktitle = $_POST['bname'];
$sql = "select * from `librarybooks` where Book_Name LIKE '%$Booktitle%'";

$result = mysqli_query($conn, $sql);
?>
<table border="1">
<tr>

<th>Name of the book</th>
<th>Book_ID</th>
<th>Author Name</th>

</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
<tr>

<td><?php echo $row['Book_Name']; ?></td>

<td><?php echo $row['Book_ID']; ?></td>

<td><?php echo $row['Author_Name']; ?></td>

</tr>

<?php

}?>

</table><?php } ?>

</article>

</div>

</body>

</html>
