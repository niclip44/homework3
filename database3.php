<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Textbooks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
     <h1>Textbooks Needed</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>
      <th>Textbook Name</th>
      <th>Course ID</th>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "makingmo_datauser6";
$password = "X]kdLX*;]rEq";
$dbname = "makingmo_Database1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from Textbooks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["Textbook_id"]?></td>
    <td><?=$row["Textbook_Name"]?></td>
    <td><?=$row["Course_id"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
    <form action="handlepost.php" method="get">
    <a class="btn btn-primary" href="index.php" role="button">Courses</a>
      <a class="btn btn-primary" href="database2.php" role="button">Professors</a>
       <a class="btn btn-primary" href="database4.php" role="button">Students</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
