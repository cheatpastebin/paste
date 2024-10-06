<?php
if (isset($_GET['id'])) {
    $filename = basename($_GET['id']);
    $filepath = __DIR__ . '/pastes/' . $filename;

    if (file_exists($filepath)) {
        header('Content-Type: text/plain');
        readfile($filepath);
        exit;
    } else {
        echo "Error: Paste not found.";
    }
} else {
    echo "Error: No paste ID provided.";
}
?>
