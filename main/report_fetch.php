<?php
//report_fetch.php
include('../connect.php');
$output = '';
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "
  SELECT * FROM patents 
  WHERE deposit_num LIKE '%".$search."%'
  OR invent_name LIKE '%".$search."%' 
  OR inventor_name LIKE '%".$search."%' 
  OR date LIKE '%".$search."%'
  OR category LIKE '%".$search."%'
 ";
}
else
{
    $query = "
  SELECT * FROM patents ORDER BY patent_id desc 
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
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
                            <td><img src="'.($row['image'] === null ? 'posts_images/no-image.png' : '../tisc/'.$row['image']).'" class="img-rounded" width="70px"</td>    
                            <td data-toggle="tooltip"  title="'.$row['deposit_num'].'">'.substr($row['deposit_num'],0,40).'</td>    
                            <td>'.$row['date'].'</td>
                            <td data-toggle="tooltip" title="'.$row['inventor_name'].'">'.substr($row['inventor_name'],0,40).'</td>       
                            <td data-toggle="tooltip" title="'.$row['invent_name'].'">'.substr($row['invent_name'],0,40).'</td>               
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