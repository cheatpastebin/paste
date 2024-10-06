<?php
if (isset($_GET['id'])) {
    $filename = basename($_GET['id']);
    $filepath = __DIR__ . '/pastes/' . $filename;

    if (file_exists($filepath)) {
        $content = file_get_contents($filepath);
        $content = htmlspecialchars($content);
    } else {
        $content = "Error: Paste not found.";
    }
} else {
    $content = "Error: No paste ID provided.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Paste</title>
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
    <div class="container">
	    <div class="home-link">
    </div>
	
        <div class="left-pane paste-view">
            <h1>CheatPastebin</h1>
            <pre id="pasteContent"><?= $content ?></pre>
        </div>
		
    </div>
	    <footer>
        <a href="index.php">&laquo; Back to Home</a> 
    </footer>
    <script src="script.js"></script>
</body>
</html>
