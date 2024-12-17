<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $cardType = $_POST["cardType"];
    $cardNumber = $_POST["cardNumber"];
    $cvv = $_POST["cvv"];
    $cardholderName = $_POST["cardholderName"];
    $expireDate = $_POST["expireDate"];

    if (empty($cardType) || empty($cardNumber) || empty($cvv) || empty($cardholderName) || empty($expireDate)) {
        echo "Please fill in all required fields.";
    } else {
        echo "Payment processed successfully!";
    }
} else {
    echo "Invalid request.";
}

//header("Location: Home.html");
//exit; // Ensure that no further PHP code is executed


?>
