<?php
include 'navANDhead.php';
require_once('sessonchekadmin.php');

// Connect to the database
$servername = "localhost";
$username = "sammy";
$password = "password";
$dbname = "greatmove_library";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// Retrieve the lesson ID from the form data
$lesson_id = $_POST["lessons_id"];
// Delete the lesson from the database
$sql = "DELETE FROM lessons WHERE id='$lesson_id'";
if ($conn->query($sql) === TRUE) {
	echo "lesson deleted successfully";
} else {
	echo "Error deleting lesson: " . $conn->error;
}
$conn->close();
?>
