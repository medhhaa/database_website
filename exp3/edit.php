<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./table.css">
    <title>Document</title>
</head>

<?php

include "dbcon.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$query = mysqli_query($conn,"select * from info where id='$id'"); // select query

$data = mysqli_fetch_array($query); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
	
    $edit = mysqli_query($conn,"update info set Name='$Name', Age='$Age', Phone='$Phone', Address='$Address' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:table.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  Name: <input type="text" name="Name" value="<?php echo @$data['Name'] ?>" placeholder="Enter Full Name" Required> <br> <br>
  Age: <input type="text" name="Age" value="<?php echo @$data['Age'] ?>" placeholder="Enter Age" Required> <br> <br>
  Phone: <input type="text" name="Phone" value="<?php echo @$data['Phone'] ?>" placeholder="Enter Age" Required> <br> <br>
  Address: <input type="text" name="Address" value="<?php echo @$data['Address'] ?>" placeholder="Enter Age" Required> <br> <br>
  <button type="button" name="back"> <a href = "table.php">Back </a> </button>
  <button type="submit" name="update" value="Update"> Update </button>
</form>

</html>