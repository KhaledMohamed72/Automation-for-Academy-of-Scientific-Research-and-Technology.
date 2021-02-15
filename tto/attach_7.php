<?php
include_once('../connect.php');
// file name
$filename = $_FILES['attach_7']['name'];

// Location
$location = 'posts_images/'.$filename;

// file extension
$file_extension = pathinfo($location, PATHINFO_EXTENSION);
$file_extension = strtolower($file_extension);

// Valid image extensions
$image_ext = array("jpg","png","jpeg","gif" ,"docx" ,"pdf","xlsx" , "xls");

$response = 0;
if(in_array($file_extension,$image_ext)){
    // Upload file

    if(move_uploaded_file($_FILES['attach_7']['tmp_name'],$location)){
        $response = $location;
        $insert = mysqli_query($conn , "UPDATE tto_report SET attach_7 = '$filename' WHERE report_id = 1");
    }
}

echo $response;
