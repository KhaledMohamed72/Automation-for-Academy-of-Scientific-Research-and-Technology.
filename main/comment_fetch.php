<?php
//comment_fetch.php;
include('../connect.php');
$sel_user = mysqli_query($conn , 'Select * from sub_main_users where user_id = 1');
$sub_main_user = mysqli_fetch_assoc($sel_user);
$query = "SELECT * FROM comments WHERE seen_status_ceo = 0 and user_name = '$sub_main_user[username]' ORDER BY id DESC";
$result = mysqli_query($conn, $query);
$output = '';
while($row = mysqli_fetch_array($result))
{
    $output .= '
 <div class="alert alert-info" id="alert">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 <a href="view-patent.php?post='.$row['patent_id'].'">
 <h4 class="alert-heading">هناك تعليق جديد !</h4>
  <p>تم إضافة تعليق جديدة :<strong>'.substr($row["comment"],0,50).'</strong></p>
   <small>بوسطة : <em>'.$row["user_name"].'</em></small>
  </a>
 </div>
 ';
}
$update_query = "UPDATE comments SET seen_status_ceo = 1 WHERE seen_status_ceo = 0";
mysqli_query($conn, $update_query);
echo $output;
?>