
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $email = $_POST["mail"];
    $password = $_POST["password"];
	
	
	echo "<li><strong>Email:</strong> $email</li>";
	echo "<li><strong>Password:</strong> $password</li>";
}
?>