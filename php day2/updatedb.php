<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update DB</title>
</head>
<body>
<?php
echo ("<html><body>");
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "my_test_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
// Escape user inputs for security
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$e_mail = mysqli_real_escape_string($conn, $_POST['email']);
// attempt insert query execution

// $sql = "UPDATE Users SET lastname='schmitt' WHERE user_id = 1";
// $sql = "UPDATE Users SET firstname='$first_name' WHERE user_id = $user_id";
$sql = "UPDATE Users SET lastname='$last_name', firstname='$first_name', email='$e_mail' WHERE user_id = $user_id";
if (mysqli_query($conn, $sql)) {
    echo "<h1>User information updated</h1>";
} else {
   echo "<h1>Record updating error for: </h1>" . 
         "<p>" . $sql . "</p>" . 
         mysqli_error($conn);
}
mysqli_close($conn);
echo "</body></html>";
?>


</body>
</html>