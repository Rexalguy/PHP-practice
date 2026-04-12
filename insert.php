<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Form</title>
</head>
<body>
    <h1>Guest Form</h1>
    <form action="insert.php" method="post">
        <label for="firstname">Firstname:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname">Lastname:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
//Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Get form data
$firstname = $_POST['firstname'];   
$lastname = $_POST['lastname'];

//Prepare and bind
$stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname) VALUES (?, ?)");
$stmt->bind_param("ss", $firstname, $lastname);

//Execute statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

//Close statement and connection
$stmt->close();
$conn->close();
?>