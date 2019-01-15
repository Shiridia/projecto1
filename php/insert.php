<html>
<body>
    
<?php
$name = $_POST["name"];
$rating = $_POST["rating"];
$message = $_POST["message"];
$servername = getenv('IP');
$username = "shiridia";
$password = "";
$dbname = "review";
$dbport = 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO reviews (name, rating, message)
VALUES ('" . mysqli_real_escape_string($conn, $name) . "'," .  mysqli_real_escape_string($conn, $rating) . ",'" . mysqli_real_escape_string($conn, $message) . "')";

if (mysqli_query($conn, $sql)) {
    header("Location: https://projecto1-shiridia.c9users.io/reviews.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

</body>
</html>