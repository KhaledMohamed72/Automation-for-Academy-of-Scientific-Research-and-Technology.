<?php
//fetch.php;
if(isset($_POST["view"]))
{
    include('../connect.php');
    if($_POST["view"] != '')
    {
        $update_query = "UPDATE patents SET seen_status=1 WHERE seen_status=0";
        mysqli_query($conn, $update_query);

    }
    $query = "SELECT * FROM patents where status = 'Published' ORDER BY patent_id DESC LIMIT 5";
    $result = mysqli_query($conn, $query);
    $output = '';


    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
   <li>
    <a href="view-patent.php?post='.$row['patent_id'].'">
     <p style="text-align: right">تم إضافة براءة جديدة باسم :  <strong>'.$row["invent_name"].'</strong><br /></p>
     <small>المخترع : <em>'.$row["inventor_name"].'</em></small>
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

    $query_1 = "SELECT * FROM patents WHERE status = 'Published' and seen_status=0";
    $result_1 = mysqli_query($conn, $query_1);
    $count = mysqli_num_rows($result_1);


    $data = array(
        'notification'   => $output,
        'unseen_notification' => $count
    );
    echo json_encode($data);
}
?>