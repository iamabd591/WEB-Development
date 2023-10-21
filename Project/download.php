<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    $filePath = "uploads/" . $file;

    if (file_exists($filePath)) {
        header("Content-Disposition: attachment; filename=" . $file);
        readfile($filePath);
    } else {
        echo "File not found.";
    }
} else {
    echo "File parameter is missing.";
}
?>
