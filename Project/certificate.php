<?php
    
$conn = mysqli_connect('localhost', 'root', '', 'sy_student');

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT st_id, c_file, size, downloads FROM c_intern WHERE st_id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['c_file'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['c_file']));
        readfile('uploads/' . $file['c_file']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE c_intern SET downloads=$newCount WHERE st_id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>
