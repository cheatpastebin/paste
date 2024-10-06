<?php
$pastesDir = __DIR__ . '/pastes/';

function getLast10Posts($dir) {
    $files = array_diff(scandir($dir, SCANDIR_SORT_DESCENDING), array('..', '.'));
    return array_slice($files, 0, 10);
}

$files = getLast10Posts($pastesDir);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheatPastebin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="neon-title" onclick="window.open('https://cheatglobal.com/', '_blank')">CheatGlobal Forum</h1>
    <div class="container">
        <div class="left-pane">
            <h1>Create a New Paste</h1>
            <form action="index.php" method="post" id="pasteForm">
                <input type="text" name="title" id="title" maxlength="20" placeholder="Enter title (max 20 characters)..." required>
                <textarea name="content" rows="10" cols="50" placeholder="Enter your text here..." required></textarea>
                <input type="submit" value="Submit" class="submit-button">
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $title = trim($_POST['title']);
                $content = trim($_POST['content']);

                if (!empty($title) && !empty($content)) {
                    if (strlen($title) > 20) {
                        echo "<p class='error-message'>Title cannot exceed 20 characters.</p>";
                    } else {
                        $sanitizedTitle = preg_replace('/[^A-Za-z0-9_\-]/', '_', $title);
                        $randomNumber = rand(1000, 999999);
                        $finalTitle = $sanitizedTitle . '_' . $randomNumber;

                        file_put_contents($pastesDir . $finalTitle, $content);
                        
                        header("Location: index.php");
                        exit;
                    }
                } else {
                    echo "<p class='error-message'>Please provide both a title and some content.</p>";
                }
            }
            ?>
        </div>

        <div class="right-pane">
            <h2>Last 10 Pastes</h2>
            <ul id="lastPosts">
                <?php foreach ($files as $file): ?>
                    <li><a href="view.php?id=<?= urlencode($file) ?>" class="post-link"><?= htmlspecialchars($file) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 CheatPastebin. All Rights Reserved.</p>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>
