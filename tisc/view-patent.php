<?php

include_once("inc/header.php");
include_once("inc/sidebar.php");
include_once("../connect.php");

$id =intval($_GET['post']);
$username = $_SESSION['username'];
$msg = '';
$select_post = mysqli_query($conn, "SELECT * FROM patents  WHERE patent_id='$id' ");
$post =mysqli_fetch_assoc($select_post);

if(isset($_POST['submit'])){
    $comment = strip_tags($_POST['comment']);
    $date = date("Y-m-d");
    if (empty($comment)) {
        $msg = '<div class="alert alert-danger" role="alert">الرجاء إدخال التعليق</div>';
    }
    else{
        $insert = mysqli_query($conn  , "insert into comments (patent_id , user_name,comment,com_date,seen_status , seen_status_ceo) values ('$id','$username','$comment' ,'$date',0,1 )");
        if(isset($insert)) {
            $msg = '<div class="alert alert-success" role="alert">تم إضافة التعليق بنجاح </div>';
            echo  '<meta http-equiv="refresh" content="0; \'view-patent.php?post='.$id.'#c\' "/>';
        }
    }
}
?>

    <article class="col-md-9 col-lg-9 " xmlns="http://www.w3.org/1999/html">
        <div class="col-md-12" art_bg >

            <div class="cate_post" style="padding: 5px; margin: 10px 0;background: white;border: solid 1px   #E7E7E7;">

                <div class="col-md-12">
                    <h2 class="cate_h2" style="margin:0px;padding:5px;background: #719CBD;color:#fff;margin-bottom: 10px;"><?php echo $post['invent_name']; ?></h2>
                    <?php
                    if($post['image'] == ''){}else{echo '<img src="'.$post['image'].'" width="100%" style="max-height: 500px;"/>';}
                    ?>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12" style="margin: 15px;background: #f3dcd9; font-size:20px;"><p class="pull-right"><i class="fa fa-user">   اسم المخترع : <?php echo $post['inventor_name']; ?></i> | <i class="fa fa-clock-o">&ensp;</i> تاريخ الايداع :  <?php echo $post['date']; ?></p>
                        <p class="pull-left"><i class="fa fa-info" aria-hidden="true">&ensp;</i>حالة البراءة : <?php echo $post['category']; ?></p>
                    </div>
                    <div class="col-md-12">
                        <hr/>

                        <p><?php echo $post['des']; ?></p>
                        <div class="col-md-12">

                            <hr style="margin-button:0px;"/>
                        </div>

                    </div>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
        <!-- comment Area -->
        <?php
        $sel_user1 = mysqli_query($conn , 'Select * from tisc_users where user_id = 1');
        $tisc_user = mysqli_fetch_assoc($sel_user1);

        $sel_user2 = mysqli_query($conn , 'Select * from sub_main_users where user_id = 1');
        $sub_main_user = mysqli_fetch_assoc($sel_user2);

        $comm = mysqli_query($conn , "select * from comments where (patent_id = '$id' and user_name = '$sub_main_user[username]') or (patent_id = '$id' and user_name = '$tisc_user[username]') order by com_date desc");
        while($row=mysqli_fetch_assoc($comm))
        {
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="cate_post" style="   padding: 5px; margin: 10px 0;background: white;border: solid 1px   #E7E7E7;">
                        <div class="col-md-12">
                            <h4 class="cate_h2" style="margin:0px;padding:5px;background: #719CBD;color:#fff;margin-bottom: 10px;"><i class="fa fa-comments" aria-hidden="true"></i> تم التعليق بواسطة  : <?php echo $row['user_name']; ?></h4>
                            <h3><?php echo $row['comment']; ?></h3>
                            <div class="col-md-12">
                                <hr style="margin-button:0px;"/>
                                <p class="pull-left"><i class="fa fa-clock-o" aria-hidden="true"></i>   <?php echo $row['com_date']; ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>
        <a name="c"></a>
        <div class="col-lg-12 art_bg" style="margin-top:20px;padding-top:15px;">

            <h3><i class="fa fa-comment" aria-hidden="true" style="color: #4e88bb;"></i> إضافة تعليق جديد</h3>
            <hr/>
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <div class="col-md-2"></div>
                    <label for="inputEmail3" class="col-sm-2 control-label">التعليق :</label>
                    <div class="col-sm-4">

                        <textarea type="text" class="form-control" name="comment" id="inputEmail3"  rows="4"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4"></div>
                    <div class="col-sm-6">
                        <a href=""><button type="submit"  name="submit" class="btn btn-danger">إضافة تعليق</button></a>
                    </div>
                </div>
                <?php echo $msg;?>
            </form>
        </div>
    </article>

<?php
include_once("inc/footer.php");
?>