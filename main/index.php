<?php

include_once("inc/header.php");
include_once("inc/sidebar.php");
include('../connect.php');
$sel_user = mysqli_query($conn , 'Select * from main_users where user_id = 1');
$sub_main_user = mysqli_fetch_assoc($sel_user);
$sel_patents = mysqli_query($conn,"SELECT * FROM patents where status_ceo = 'Published' or status_ceo = 'published' ");
$patents = mysqli_fetch_all($sel_patents);

$sel_cources = mysqli_query($conn , 'Select * from cources');
$cources = mysqli_fetch_all($sel_cources);

$sel_activities = mysqli_query($conn , 'Select * from activities');
$activities = mysqli_fetch_all($sel_activities);
?>
    <article class="col-lg-9">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">اهلا وسهلا يك يا : <span><?php echo $sub_main_user['username']; ?></span></div>
                </div>
                <div class="panel-body">
                    <div class="text-center">
                        <img width="100%" style="max-width: 150px" src="<?php echo ($sub_main_user['image'] == '' ? 'posts_images/user.png' : $sub_main_user['image']); ?>">
                        <hr/>
                <div class="text-right">
                    <p>الاسم : <span><?php echo $sub_main_user['username']; ?></span></p>
                    <p>البريد : <span><?php echo $sub_main_user['email']; ?></span></p>
                    <p class="text-left"><a href="user_setting.php" class="btn btn-warning btn-xs">تعديل البيانات</a></p>
                </div>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading"><b>البراءات</b></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <i class="fa fa-list-alt fa-5x" style="color:#c09e62;"></i>
                        </div>
                        <div class="col-md-4">
                        <strong><?php echo count($patents); ?></strong>
                        </div>
                        </div>
                    <div class="panel-footer text-center"><i class="fa fa-eye"></i>  <a href="patents.php"><b>مشاهدة</b></a></div>
                    </div>
                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading"><b>الانشطة</b></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <i class="fa fa-users fa-5x" style="color:#62c076;"></i>
                        </div>
                        <div class="col-md-4">
                            <strong><?php echo count($activities); ?></strong>
                        </div>
                    </div>
                    <div class="panel-footer text-center"><i class="fa fa-eye"></i>  <a href="activities.php"><b>مشاهدة</b></a></div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-danger">
                        <div class="panel-heading"><b>التدريبات</b></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <i class="fa fa-chain fa-5x" style="color:#c0627c;"></i>
                        </div>
                        <div class="col-md-4">
                            <strong><?php echo count($cources) ?></strong>
                        </div>
                    </div>
                    <div class="panel-footer text-center"><i class="fa fa-eye"></i>  <a href="cources.php"><b>مشاهدة</b></a></div>
                </div>
                </div>
            </div>


        <?php
        $msg ='';

        if(isset($_GET['status']) and isset($_GET['post'])){

            $sql =mysqli_query($conn, "UPDATE patents SET status_ceo = '$_GET[status]' WHERE patent_id = '$_GET[post]'");

        }

        echo $msg;

        ?>
        <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading" style="padding-bottom: 25px">
                <b style="font-size: 20px">البراءات</b>
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
                        <th>مشاهدة </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php



                    $per_page=5;

                    if(!isset($_GET['page'])){
                        $page = 1;

                    }else{

                        $page= (int)$_GET['page'];
                    }

                    $start_from =($page -1) * $per_page;

                    $posts = mysqli_query($conn,"SELECT * FROM patents where status_ceo = 'Published' ORDER BY patent_id DESC limit $start_from,$per_page");
                    $num=1;
                    while($post = mysqli_fetch_assoc($posts)){

                        echo '
                                
                            <tr>
                            <td>'.$num.'</td>    
                            <td><img src="'.($post['image'] === null ? 'posts_images/no-image.png' : '../tisc/'.$post['image']).'" class="img-rounded" width="70px"</td>    
                            <td data-toggle="tooltip"  title="'.$post['deposit_num'].'">'.substr($post['deposit_num'],0,40).'</td>    
                            <td>'.$post['date'].'</td>
                            <td data-toggle="tooltip" title="'.$post['inventor_name'].'">'.substr($post['inventor_name'],0,40).'</td>       
                            <td data-toggle="tooltip" title="'.$post['invent_name'].'">'.substr($post['invent_name'],0,40).'</td>       
                                   
                            <td><a href="view-patent.php?post='.$post['patent_id'].'" class="btn btn-warning btn-xs">مشاهدة </a></td>                                  
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
                            echo   '<li '.($page ==$i ? 'class="active"' :'').'><a href="index.php?page='.$i.'#c">'.$i.'</a></li>';

                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
        </div>
        </div>

    </article>

<?php
include_once("inc/footer.php");
?>