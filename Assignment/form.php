<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">
  <title>Student Data Form - Database Display</title>
</head>
<body>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $address = $_POST["address"];
  $age = $_POST["age"];
  $nic = $_POST["nic"];
  $studentid = $_POST["studentid"];
  $email = $_POST["email"];

  // Create a database connection
  $servername = "localhost";
  $username = "your_username";
  $password = "your_password";
  $dbname = "your_database_name";
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert data into the database
  $sql = "INSERT INTO students (name, address, age, nic, student_id, email) VALUES ('$name', '$address', $age, '$nic', '$studentid', '$email')";

  if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>

</body>
</html>
