<?php
echo ("<html><body>");
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "my_firstdistant_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
// attempt insert query execution
$sql = "UPDATE Users SET lastname='John' WHERE firstname='John'";
if (mysqli_query($conn, $sql)) {
   echo "<h1>record updated.<h1>";
} else {
   echo "<h1>Record creation error for: </h1>" . 
         "<p>" . $sql . "</p>" . 
         mysqli_error($conn);
}
mysqli_close($conn);
echo "</body></html>";
?>