<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Placed</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>

<?php

$name = $_POST['name'];
$flavors = $_POST['flavor'];
$quantity = count($flavors);
$cost = $quantity * 3.5;

echo "    
    <div style='border: 2px solid darkgrey'>
        <h2>Thank you $name, for your order</h2>
        <div>
            <h3>Order Summary:</h3>
            <ul>
";

for ($i = 0; $i < $quantity; $i++){
    echo "<li>$flavors[$i]</li>";
}
echo "
            </ul>
            <div>Order Total: $$cost</div>
        </div></div></body></html>";


