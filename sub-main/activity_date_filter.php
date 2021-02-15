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
           SELECT * FROM activities  
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
                <th>اسم النشاط</th>
                <th>تاريخ النشاط</th>
                <th>المحاضر</th>
                <th>مشاهدة</th>
                </tr>
                    </thead>
                    <tbody> ';
    $num=1;
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
        <tr>
                            <td>'.$num.'</td>    
                            <td><img src="'.($row['image'] === null ? 'posts_images/no-image.png' : '../tisc/'.$row['image']).'" class="img-rounded" width="70px"</td>    
                            <td data-toggle="tooltip"  title="'.$row['cource_name'].'">'.substr($row['cource_name'],0,40).'</td>    
                            <td>'.$row['date'].'</td>
                            <td data-toggle="tooltip" title="'.$row['donor'].'">'.substr($row['donor'],0,40).'</td>       
                            <td><a href="view_activity.php?post='.$row['cource_id'].'" class="btn btn-primary btn-xs"><b>مشاهدة</b> </a></td>                                 
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