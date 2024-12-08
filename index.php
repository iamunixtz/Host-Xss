<?php // show_cookies.php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Cookies</title>
    <script>
        // Display an alert with the document cookies on page load
        window.onload = function() {
            // Check if there are any cookies stored
            if (document.cookie) {
                alert("Your cookies: " + document.cookie);
            } else {
                alert("No cookies found.");
            }
        };
    </script>
</head>
<body>
    <h1>Welcome to the Cookie Display Page</h1>
    <p>Your cookies will be displayed in an alert when the page loads.</p>
</body>
</html>
