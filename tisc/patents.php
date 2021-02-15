<?php
        include_once("inc/header.php");
        include_once("inc/sidebar.php");
        include_once("../connect.php");


        $msg ='';

        if(isset($_GET['status']) and isset($_GET['post'])){
            
            $sql =mysqli_query($conn, "UPDATE patents SET status = '$_GET[status]' WHERE patent_id = '$_GET[post]'");
                
        }

        if(isset($_GET['delete'])){
            
            $sql =mysqli_query($conn, "DELETE FROM patents WHERE patent_id = '$_GET[delete]'");
        
            if(isset($sql)){
                
                $msg  = '<div class="alert alert-danger" role="alert">تم حذف البراءة بنجاح</div>';
            }
        }
        
        ?>
      
    <article class="col-lg-9">

        <?php echo $msg; ?>
        <div class="panel panel-info">
          <div class="panel-heading" style="padding-bottom: 25px">
              <b style="font-size: 20px">البراءات</b>
              <a style="float: left" href="new-patent.php" class="btn btn-success btn-lg">اضافة براءة جديدة</a>
          </div>

          <div class="panel-body">
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
                <th>مشاهدة</th>
                </tr>
                    </thead> 
                <tbody>
                    <?php
                    
                    
                    
                     $per_page=20;
                    
                    if(!isset($_GET['page'])){
                    $page = 1; 
                    
                    }else{
                        
                        $page= (int)$_GET['page'];
                    }
                    
                    $start_from =($page -1) * $per_page;
                    
                    $posts = mysqli_query($conn,"SELECT * FROM patents ORDER BY patent_id DESC limit $start_from,$per_page");
                    $num=1;
                    while($post = mysqli_fetch_assoc($posts)){
                        
                        echo '
                                
                            <tr>
                            <td>'.$num.'</td>    
                            <td><img src="'.($post['image'] == null ? 'posts_images/no-image.png' : $post['image']).'" class="img-rounded" width="70px"</td>    
                            <td data-toggle="tooltip"  title="'.$post['deposit_num'].'">'.substr($post['deposit_num'],0,40).'</td>    
                            <td>'.$post['date'].'</td>
                            <td data-toggle="tooltip" title="'.$post['inventor_name'].'">'.substr($post['inventor_name'],0,40).'</td>       
                            <td data-toggle="tooltip" title="'.$post['invent_name'].'">'.substr($post['invent_name'],0,40).'</td>       
                            <td>'.($post['status'] == 'dreft' ? '<a href="patents.php?status=published&post='.$post['patent_id'].'&page='.$page.'" class="btn btn-success btn-xs">قبول</a>' : '<a href="patents.php?status=dreft&post='.$post['patent_id'].'&page='.$page.'" class="btn btn-info btn-xs">تعليق</a>').'</td>    
                            <td><a href="edit_patent.php?post='.$post['patent_id'].'" class="btn btn-warning btn-xs">تعديل</a></td> 
                            <td><a href="view-patent.php?post='.$post['patent_id'].'" class="btn btn-primary btn-xs">مشاهدة او تعليق</a></td>                                  
                            </tr>

                            ';
                        $num++;
                    }
                    ?>
                </tbody>
            </table>
                 <?php 
              $page_sql =mysqli_query($conn,"SELECT * FROM patents");
              $count_page = mysqli_num_rows($page_sql);
              
              $total_page =ceil($count_page / $per_page);
              
              ?>
              <nav class="text-center" >
              <ul class="pagination">
            <?php 
              for($i= 1;$i <=$total_page; $i++){
               echo   '<li '.($page ==$i ? 'class="active"' :'').'><a href="patents.php?page='.$i.'">'.$i.'</a></li>';
              }
              ?>              
             </ul>
              </nav>
          </div>
</div>      
              
    </article>
     <?php
include_once("inc/footer.php");

    ?>