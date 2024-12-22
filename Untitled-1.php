<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    
    // Simple validation
    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        echo "All fields are required.";
    } else {
        // Display the submitted data
        echo "<h2>Form Submitted Successfully</h2>";
        echo "<p><strong>Name:</strong> " . $name . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Phone:</strong> " . $phone . "</p>";
        echo "<p><strong>Address:</strong> " . $address . "</p>";
    }
} else {
    echo "Invalid request.";
}
?>
