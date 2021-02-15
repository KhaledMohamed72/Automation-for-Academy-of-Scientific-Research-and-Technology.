<?php

include_once("inc/header.php");
include_once("inc/sidebar.php");
include_once("../connect.php");



$msg='';
if(isset($_POST['submit'])){
    $sel_setting =mysqli_query($conn, "select * from main_users");
    if(empty($_POST['name'])){
        $msg = '<div class="alert alert-info" role="alert">الرجاء ادخال اسم المستخدم</div>';
    }
    if(empty($_POST['email'])){
        $msg = '<div class="alert alert-info" role="alert">الرجاء ادخال الايميل</div>';
    }
    if(empty($_POST['password'])){
        $msg = '<div class="alert alert-info" role="alert">الرجاء ادخال كلمة السر</div>';
    }
    if($_POST['password'] != $_POST['passwordconfirm']){
        $msg = '<div class="alert alert-info" role="alert">الرجاء اعادة تأكيد كلمة المرور</div>';
    }
    else {
        if (mysqli_num_rows($sel_setting) != 1) {

            $image = $_FILES['image'];
            $image_name = $image['name'];
            $image_tmp = $image['tmp_name'];
            $image_size = $image['size'];
            $image_error = $image['error'];
            //if 1 and 2 not empty

            if ($image_name != '') {

                $image_exe = explode('.', $image_name);
                $image_exe = strtolower(end($image_exe));


                $allowd = array('png', 'jpg', 'gif', 'jpeg');
                if (in_array($image_exe, $allowd)) {

                    if ($image_error === 0) {

                        if ($image_size <= 7000000) {

                            $new_name = $image_name;
                            $image_dir = 'posts_images/' . $new_name;
                            $image_db = 'posts_images/' . $new_name;

                            if (move_uploaded_file($image_tmp, $image_dir)) {

                                $insert = mysqli_query($conn, "INSERT INTO main_users (
                                                        image,
                                                        username,
                                                        email,
                                                        password
                                                        ) VALUES(
                                                        '$image_db',
                                                        '$_POST[name]',
                                                        '$_POST[email]',
                                                        '$_POST[password]'
                                                        
                                            ) ");


                                if (isset($insert)) {
                                    $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';

                                }
                            } else {
                                $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ اثناء رفع الصورة</div>';
                            }

                        } else {
                            $msg = '<div class="alert alert-danger" role="alert">عذراً، حجم الصورة كبير لا يجب ان يتعدي 4 MB</div>';

                        }
                    } else {
                        $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ غير متوقع أثناء رفع الصورة</div>';

                    }

                } else {

                    $msg = '<div class="alert alert-danger" role="alert">الرجاء اختيار صورة صحيحة</div>';
                }
            } //if 1 not and 2  empty

            else{


                $insert = mysqli_query($conn, "INSERT INTO main_users (
                                                        username,
                                                        email,
                                                        password
                                                        ) VALUES(
                                                        
                                                        '$_POST[name]',
                                                        '$_POST[email]',
                                                        '$_POST[password]'
                                                        
                                            ) ");
                if (isset($insert)) {
                    $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';


                }
            }
            //if 1 empty but 2 not empry

        }

        else {
            $image = $_FILES['image'];
            $image_name = $image['name'];
            $image_tmp = $image['tmp_name'];
            $image_size = $image['size'];
            $image_error = $image['error'];

            //if 1 and 2 not empty

            if ($image_name != '') {

                $image_exe = explode('.', $image_name);
                $image_exe = strtolower(end($image_exe));


                $allowd = array('png', 'jpg', 'gif', 'jpeg');
                if (in_array($image_exe, $allowd)) {

                    if ($image_error === 0) {

                        if ($image_size <= 7000000) {

                            $new_name = $image_name;
                            $image_dir = 'posts_images/' . $new_name;
                            $image_db = 'posts_images/' . $new_name;

                            if (move_uploaded_file($image_tmp, $image_dir)) {

                                $insert = mysqli_query($conn, "UPDATE main_users SET
                                                        image = '$image_db',
                                                        username = '$_POST[name]',
                                                        email = '$_POST[email]',
                                                        password = '$_POST[password]'
                                                    ");
                                if (isset($insert)) {
                                    $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';


                                }
                            } else {
                                $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ اثناء رفع الصورة</div>';
                            }

                        } else {
                            $msg = '<div class="alert alert-danger" role="alert">عذراً، حجم الصورة كبير لا يجب ان يتعدي 4 MB</div>';

                        }
                    } else {
                        $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ غير متوقع أثناء رفع الصورة</div>';

                    }

                } else {

                    $msg = '<div class="alert alert-danger" role="alert">الرجاء اختيار صورة صحيحة</div>';
                }

            } //if 1 not but 2  empty

            else{

                $insert = mysqli_query($conn, "UPDATE main_users SET
                                                        username = '$_POST[name]',
                                                        email = '$_POST[email]',
                                                        password = '$_POST[password]'
                                                    ");
                if (isset($insert)) {
                    $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';



                }

            }


            //if 1 empty but 2 not empty

        }
    }
}


$query = mysqli_query($conn,"SELECT * FROM main_users");
$user = mysqli_fetch_assoc($query);
?>

    <article class="col-lg-8" style="margin-right: 60px;">
        <?php echo $msg; ?>
        <div class="panel panel-info">

            <div class="panel-heading" style="padding-bottom: 20px">
                <b>إعدادات المستخدم</b>
                <a style="float: left" href="users.php" class="btn btn-success btn-sm">مشاهدة بيانات المستخدمين</a>
            </div>
            <div class="panel-body">


                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="image" class="col-sm-2 control-label">الصورة الشخصية للمستخدم :</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control"  name="image" id="image" value="">
                        </div>
                        <div class="col-sm-4">
                            <p><?php echo ($user['image']=='' ? '' : explode('posts_images/',$user['image'])[1]) ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="facebook" class="col-sm-2 control-label">اسم المستخدم :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php echo ($user['username']=='' ? '' : $user['username']) ?>" name="name" id="name" placeholder="ادخل هنا اسم المستخدم" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="twitter" class="col-sm-2 control-label">الايميل :</label>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" value="<?php echo ($user['email']=='' ? '' : $user['email']) ?>" name="email" id="email" placeholder="ادخل الايميل الالتروني هنا" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="google" class="col-sm-2 control-label">كلمة المرور :</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" value="<?php echo ($user['password']=='' ? '' : $user['password']) ?>" name="password" id="password" data-toggle="password" placeholder="ادخل كلمة المرور هنا" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="google" class="col-sm-2 control-label">تاكيد كلمة المرور :</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" value="" name="passwordconfirm" id="passwordconfirm" data-toggle="password" placeholder="اعد ادخال كلمة المرور هنا" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" name="submit" class="btn btn-danger">تحديث الاعدادات</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>

    <script type="text/javascript">
        $("#password").password('toggle');
    </script>

<?php

include_once("inc/footer.php");

?>