<?php

        include_once("inc/header.php");
        include_once("inc/sidebar.php");
        include_once("../connect.php");


        $msg ='';

        if(isset($_GET['status']) and isset($_GET['post'])){
            
            $sql =mysqli_query($conn, "UPDATE activities SET status_ceo = '$_GET[status]' WHERE cource_id = '$_GET[post]'");
                
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
              <b style="font-size: 20px">الانشطة التدريبية</b>
          </div>

          <div class="panel-body">
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
                <tbody>
                    <?php
                    
                    
                    
                     $per_page=20;
                    
                    if(!isset($_GET['page'])){
                    $page = 1; 
                    
                    }else{
                        
                        $page= (int)$_GET['page'];
                    }
                    
                    $start_from =($page -1) * $per_page;
                    
                    $posts = mysqli_query($conn,"SELECT * FROM activities ORDER BY cource_id DESC limit $start_from,$per_page");
                    $num=1;
                    while($post = mysqli_fetch_assoc($posts)){
                        
                        echo '
                                
                            <tr>
                            <td>'.$num.'</td>    
                            <td><img src="'.($post['image'] === null ? 'posts_images/no-image.png' : '../tisc/'.$post['image']).'" class="img-rounded" width="70px"</td>    
                            <td data-toggle="tooltip"  title="'.$post['cource_name'].'">'.substr($post['cource_name'],0,40).'</td>    
                            <td>'.$post['date'].'</td>
                            <td data-toggle="tooltip" title="'.$post['donor'].'">'.substr($post['donor'],0,40).'</td>       
                            <td><a href="view_activity.php?post='.$post['cource_id'].'" class="btn btn-primary btn-xs">مشاهدة</a></td>                                  
                            </tr>

                            ';
                        $num++;
                    }
                    ?>
                </tbody>
            </table>
                 <?php 
              $page_sql =mysqli_query($conn,"SELECT * FROM activities");
              $count_page = mysqli_num_rows($page_sql);
              
              $total_page =ceil($count_page / $per_page);
              
              ?>
              <nav class="text-center" >
              <ul class="pagination">
            <?php 
              for($i= 1;$i <=$total_page; $i++){
               echo   '<li '.($page ==$i ? 'class="active"' :'').'><a href="activities.php?page='.$i.'">'.$i.'</a></li>';
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