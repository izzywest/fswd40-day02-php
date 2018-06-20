<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>PHP Day2</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <p>Create a PHP script which will be based on browser type, include chrome.css or mozilla.css in the head section of your HTML document structure.</p>

    <?php
$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";
if(preg_match('/Chrome/i', "$viewer"))
{
$browser = 'Google Chrome'; 
}
else if( preg_match( "/Mozilla/i", "$viewer" ))
{
$browser = "Mozilla";
}


echo("You are using $browser.");
?>


    <hr>
    <h1>Exercise 2</h1>
    <p>Create a PHP script which will accept two parameters from form (name and surname). User must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname.</p>

<form method="POST">
Name: <input type="text" name="name" />
Surname: <input type="text" name="surname" />
<input type="submit" name="submit" />
</form>
<?php
if(isset($_POST['submit']))
{
if( $_POST["name"] || $_POST["surname"] )
{
echo "Welcome ". $_POST['name']. "  " . $_POST['surname'];

}
}
?>



    <hr>
    <h1>Exercise 3</h1>
    <p>Create a function which takes two integer parameters - divide them and output the result on the screen.</p>
<?php 

function addFunction($num1, $num2)
{
$sum = $num1 / $num2;
echo "The proportion of the two numbers is : $sum";
}
addFunction(10, 20);




 ?>



    <hr>
    <h1>Exercise 4</h1>
    <p>Create a Database using PHP and MySQL.</p>

<?php
/*$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "my_firstdistant_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
   echo "Database $dbname created successfully! \n";
} else {
   echo "Error creating database $dbname: " . mysqli_error($conn);
}
mysqli_close($conn);

$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
   echo "Table Users created successfully" . "\n";
} else {
   echo "Error creating table: " . mysqli_error($conn) . "\n";
}
mysqli_close($conn);*/
?>

    <hr>
    <h1>Exercise 5</h1>
    <p>Create a Table in your Database using PHP and MySQL.</p>

<?php
/*$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "my_firstdistant_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
// sql to create table
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
   echo "Table Users created successfully" . "\n";
} else {
   echo "Error creating table: " . mysqli_error($conn) . "\n";
}
mysqli_close($conn);*/
?> 

    <hr>
    <h1>Exercise 6</h1>
    <p>Insert data into MySQL table using PHP and MySQL.</p>

    <?php
/*$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "my_firstdistant_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
$sql = "INSERT INTO Users (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@doe.com')";
if (mysqli_query($conn, $sql)) {
   echo "New record created.\n";
} else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}
mysqli_close($conn);*/
?>


    <hr>
    <h1>Exercise 7</h1>
    <p>Create a form which will insert data into MySQL table using PHP and MySQL.</p>


    <hr>
    <h1>Exercise 8</h1>
    <p>Display all the records from the MySQL table using PHP and MySQL.</p>
<?php
$servername = "localhost";
$username   = "root";
$password   = ""; 
$dbname     = "my_firstdistant_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
/* sql to create table
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
*/
$sql = "SELECT user_id, lastname, firstname FROM Users";
$result = mysqli_query($conn, $sql);
// fetch a next row (as long as there are some) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("ID=%s %s (%s)<br>",
                     $row["user_id"], $row["lastname"],$row["firstname"]);
}
echo "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($conn);
?>
    <hr>
    <h1>Exercise 9</h1>
    <p>Create a form which will accept parameters from your MySQL table. When the user clicks on the form's Update button, PHP script should update records for the selected row.</p>


    
</body>
</html>