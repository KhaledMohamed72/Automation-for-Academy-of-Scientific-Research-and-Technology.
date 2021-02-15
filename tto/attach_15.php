<?php
$conn=  mysqli_connect("localhost","root","","tico");
if(!$conn){
    die('Could not connect: ' . mysqli_connect_error());
}
// file name
$filename = $_FILES['attach_15']['name'];

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

    if(move_uploaded_file($_FILES['attach_15']['tmp_name'],$location)){
        $response = $location;
        $insert = mysqli_query($conn , "UPDATE tto_report SET attach_15 = '$filename' WHERE report_id = 1");
    }
}

echo $response;
