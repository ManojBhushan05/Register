<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    echo "<h2>Registration Successful</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
} else {
    echo "<p class='error'>Invalid Request</p>";
}
?>
