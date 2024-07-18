<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Prompt</title>
</head>
<body>

<form method="post" action="">
    <label for="username">Please enter your username:</label>
    <input type="text" id="username" name="username" required>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    echo "Hello, " . $username . "!";
}
?>

</body>
</html>
