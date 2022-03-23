<?php
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include './dbcon.php';
  $name = $_POST["name"];
  $address = $_POST["address"];
  $phone = $_POST["phone"];
  $age = $_POST["age"];
  // inserting values: 
  $sql = "INSERT INTO `info` (`Name`, `Age`, `Phone`, `Address`) VALUES ('$name', '$age', '$phone', '$address')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $showAlert = true;
  }
}

?>

<head>
  <title>Interactive PHP </title>
  <link rel="stylesheet" type="text/css" href="./form.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<!-- <img class="bg" src="bg1.jpg" alt="employee"> -->

<body>
  <!-- <br> -->
  &nbsp; &nbsp; <h5>Enter employee details: </h5>
  <form action="index.php" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name"> <b> Name </b></label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
      </div>
    </div>

    <div class="form-group">
      <label for="address"> <b> Address </b> </label>
      <input type="text" name="address" class="form-control" id="address" placeholder="City">
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
        <label for="phone"> <b> Contact No. </b> </label>
        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone No.">
      </div>

      <div class="form-group col-md-2">
        <label for="age"> <b> Age </b></label>
        <input type="text" name="age" class="form-control" id="age" placeholder="Age">
      </div>
    </div>
    </div>
    <button type="submit" class="btn-add">Add</button>
    &nbsp; &nbsp; <button type="button" onclick="window.location.href = './table.php'" class="btn-view">View Records</button>
  </form>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>