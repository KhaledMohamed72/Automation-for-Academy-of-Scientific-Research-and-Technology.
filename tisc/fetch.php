<?php
//fetch.php;
if(isset($_POST["view"]))
{
    include('../connect.php');
    $sel_user = mysqli_query($conn , 'Select * from sub_main_users where user_id = 1');
    $sub_main_user = mysqli_fetch_assoc($sel_user);
    if($_POST["view"] != '')
    {
        $update_query = "UPDATE comments SET seen_status=1 WHERE seen_status=0";
        mysqli_query($conn, $update_query);

    }
    $query = "SELECT * FROM comments where user_name = '$sub_main_user[username]' ORDER BY id DESC LIMIT 5";
    $result = mysqli_query($conn, $query);
    $output = '';


    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
   <li>
    <a href="view-patent.php?post='.$row['patent_id'].'#c">
     <p style="text-align: right">تم إضافة تعليق جديدة : :  <strong>'.substr($row["comment"],0,50).'</strong><br /></p>
     <small>بواسطة : <em>'.$row["user_name"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';

        }

    }
    else
    {
        $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
    }

    $query_1 = "SELECT * FROM comments WHERE user_name = '$sub_main_user[username]' and seen_status=0";
    $result_1 = mysqli_query($conn, $query_1);
    $count = mysqli_num_rows($result_1);



    $data = array(
        'notification'   => $output,
        'unseen_notification' => $count
    );
    echo json_encode($data);
}
?>