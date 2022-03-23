<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="./table.css">
  <title>Display all records from Database</title>
</head>

<body>

  <h2>Employee Details</h2>

  <div className="div-1">
    <table id="emp">
      <tr>
        <td>Sr.No.</td>
        <td>Full Name</td>
        <td>Age</td>
        <td>Contact No.</td>
        <td>Address</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>

      <?php

      include './dbcon.php'; // Using database connection file here
      $query = "select * from `info`";
      $records = mysqli_query($conn, $query); // fetch data from database
      while ($data = mysqli_fetch_array($records)) {
      ?>
        <tr>
          <td><?php echo @$data['id']; ?></td>
          <td><?php echo @$data['Name']; ?></td>
          <td><?php echo @$data['Age']; ?></td>
          <td><?php echo @$data['Phone']; ?></td>
          <td><?php echo @$data['Address']; ?></td>
          <td><a href="edit.php?id=<?php echo $data['id']; ?>"> <button class="btn-edit"> Edit </button> </a></td>
          <td><a href="delete.php?id=<?php echo $data['id']; ?>"><button class="btn-del"> Delete </button></a></td>
        </tr>
      <?php
      }
      ?>
    </table>
    <br>
    <button class="btn-add" type="button"> <a href="index.php">Add a new employee</a> </button>

  </div>
</body>

</html>