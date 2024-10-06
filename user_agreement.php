<?php
// user_agreement.php

// Simple user agreement content
$user_agreement_content = "
<h2>User Agreement</h2>
<p>Welcome to CheatPastebin! Please read the following terms and conditions carefully.</p>
<h3>1. Acceptance of Terms</h3>
<p>By accessing or using our service, you agree to comply with these terms.</p>
<h3>2. User Conduct</h3>
<p>You agree not to use the service for any illegal activities.</p>
<h3>3. Content Ownership</h3>
<p>All content submitted to CheatPastebin remains the property of the user, but we reserve the right to use it as necessary for service provision.</p>
<h3>4. Liability</h3>
<p>We are not liable for any damages resulting from the use of our service.</p>
<h3>5. Changes to Agreement</h3>
<p>We may update this agreement at any time. Your continued use of the service signifies your acceptance of any changes.</p>
<p>For more information, please contact us at <a href='mailto:cheatglobal_contact@protonmail.com'>cheatglobal_contact@protonmail.com</a>.</p>
<p>Thank you for using CheatPastebin!</p>
<footer style='text-align: center; padding: 10px;'>
    <p>&copy; " . date("Y") . " CheatPastebin. All Rights Reserved.</p>
</footer>
";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Agreement - CheatPastebin</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #121212; /* Dark background */
            color: #ffffff; /* Text color */
            font-family: Arial, sans-serif; /* Font style */
            margin: 0; /* Remove default margin */
            padding: 20px; /* Add padding */
            overflow: hidden; /* Prevent scrolling */
            position: relative; /* Position relative for children */
        }

        h2, h3 {
            color: #00bfff; /* Title color */
            margin: 10px 0; /* Space around titles */
        }

        a {
            color: #00bfff; /* Link color */
            text-decoration: none; /* Remove underline */
        }

        a:hover {
            text-decoration: underline; /* Underline on hover */
        }

        footer {
            text-align: center;
            margin-top: 20px; /* Space above footer */
            color: #cccccc; /* Footer text color */
        }

        .home-link {
            text-align: center; /* Center align */
            margin-bottom: 20px; /* Space below the link */
        }
    </style>
</head>
<body>
    <div class="home-link">
        <a href="index.php" style="font-size: 18px;">&laquo; Back to Home</a> <!-- Link to home page -->
    </div>
    <div class="agreement-content">
        <?php echo $user_agreement_content; ?>
    </div>
</body>
</html>
