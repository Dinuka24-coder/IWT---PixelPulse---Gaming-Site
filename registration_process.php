
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $firstname = $_POST["firname"];
	$lastname = $_POST["lasname"];
	$DOB = $_POST["dateofb"];
	$country = $_POST["country"];
	$gender = $_POST["gen"];
    $email = $_POST["email"];
	$phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $terms = isset($_POST["terms"]) ? "Agreed" : "Not Agreed";
	$policy = isset($_POST["pol"]) ? "Agreed" : "Not Agreed";
	$verify = isset($_POST["ver"]) ? "Agreed" : "Not Agreed";
    
	echo "<h2>Registration Details:</h2>";
    echo "<ul>";
    echo "<li><strong>First Name:</strong> $firstname</li>";
	echo "<li><strong>Last Name:</strong> $lastname</li>";
	echo "<li><strong>DOB:</strong> $DOB</li>";
	echo "<li><strong>Country:</strong> $country</li>";
	echo "<li><strong>Gender:</strong> $gender</li>";
    echo "<li><strong>Email:</strong> $email</li>";
	echo "<li><strong>Phone:</strong> $phone</li>";
    echo "<li><strong>Password:</strong> $password</li>";
    echo "<li><strong>Confirm Password:</strong> $confirm_password</li>";
    echo "<li><strong>Terms and Conditions:</strong> $terms</li>";
	echo "<li><strong>Terms and Conditions:</strong> $policy</li>";
	echo "<li><strong>Terms and Conditions:</strong> $verify</li>";
    echo "</ul>";
}
?>