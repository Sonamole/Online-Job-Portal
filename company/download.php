<?php
if (isset($_GET['image'])) {
    $imagePath = $_GET['image'];

    // Check if the file exists
    if (file_exists($imagePath)) {
        // Set the appropriate headers for the download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($imagePath) . '"');
        readfile($imagePath);
        exit;
    } else {
        echo 'File not found.';
    }
} else {
    echo 'Invalid request.';
}
?>
