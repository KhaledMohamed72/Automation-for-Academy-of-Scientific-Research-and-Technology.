<?php
//filter.php

include('../connect.php');
if(isset($_POST["from_date"], $_POST["to_date"]))
{
    $date1 = date("Y-M-D");
    $date2 = date("Y-M-D");
    $date1 = $_POST['from_date'];
    $date2 = $_POST['to_date'];

    $output = '';
    $query = "  
           SELECT * FROM patents  
           WHERE date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  ORDER BY date DESC
      ";

    $result = mysqli_query($conn, $query);
    $insert = mysqli_query($conn, "INSERT INTO date_fetch (from_date,to_date) VALUES
                                                            ('$date1','$date2')");
                                                            
    $output .= '
  <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>مرفق</th>
                        <th>رقم الايداع</th>
                        <th>تاريخ الايداع</th>
                        <th>المخترع</th>
                        <th>مسمي الاختراع</th>
                        <th>الحالة</th>
                        <th>تعديل </th>
                        <th>مشاهدة او تعليق</th>
                    </tr>
                    </thead>
                    <tbody> ';
    $num=1;
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
        <tr>
                            <td>'.$num.'</td>    
                            <td><img src="'.($row['image'] === null ? 'posts_images/no-image.png' : $row['image']).'" class="img-rounded" width="70px"</td>    
                            <td data-toggle="tooltip"  title="'.$row['deposit_num'].'">'.substr($row['deposit_num'],0,40).'</td>    
                            <td>'.$row['date'].'</td>
                            <td data-toggle="tooltip" title="'.$row['inventor_name'].'">'.substr($row['inventor_name'],0,40).'</td>       
                            <td data-toggle="tooltip" title="'.$row['invent_name'].'">'.substr($row['invent_name'],0,40).'</td>               
                            <td>'.($row['status'] == 'dreft' ? '<a href="reports.php?status=published&post='.$row['patent_id'].'" class="btn btn-success btn-xs">قبول</a>' : '<a href="reports.php?status=dreft&post='.$row['patent_id'].'" class="btn btn-info btn-xs">تعليق</a>').'</td>    
                            <td><a href="edit_patent.php?post='.$row['patent_id'].'" class="btn btn-warning btn-xs">تعديل</a></td> 
                            <td><a href="view-patent.php?post='.$row['patent_id'].'" class="btn btn-primary btn-xs"><b>مشاهدة</b> </a></td>                                 
                            </tr>
  ';
        $num++;
    }
    echo $output;
}
else
{
    echo '<div class="alert alert-danger" role="alert">لا يوجد نتائج</div>';
}

?>