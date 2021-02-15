<?php
//report_fetch.php
include('../connect.php');
$output = '';
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "
  SELECT * FROM activities 
  WHERE cource_name LIKE '%".$search."%'
  OR donor LIKE '%".$search."%' 
  OR note LIKE '%".$search."%' 
  OR date LIKE '%".$search."%'
 ";
}
else
{
    $query = "
  SELECT * FROM activities ORDER BY cource_id desc 
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
                <th>اسم النشاط</th>
                <th>تاريخ النشاط</th>
                <th>الحاضر</th>
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