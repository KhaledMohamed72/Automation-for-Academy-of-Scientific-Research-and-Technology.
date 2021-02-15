<?php
include_once("inc/header.php");
include_once("inc/sidebar.php");
include('../connect.php');
$sel_user = mysqli_query($conn , 'Select * from tto_users where user_id = 5');
$tto_user = mysqli_fetch_assoc($sel_user);
?>
    <article class="col-lg-9">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">اهلا وسهلا يك يا : <span><?php echo $tto_user['username']; ?></span></div>
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            <img width="100%" style="max-width: 150px;" src="<?php echo ($tto_user['image'] == '' ? '../panel/sub-main/posts_images/user.png' : $tto_user['image']); ?>">
                            <hr/>
                            <div class="text-right">
                                <p>الاسم : <span><?php echo $tto_user['username']; ?></span></p>
                                <p>البريد : <span><?php echo $tto_user['email']; ?></span></p>
                                <p class="text-left"><a href="user_setting.php" class="btn btn-warning btn-xs">تعديل البيانات</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
<?php
include_once("inc/footer.php");
?>