<?php


include_once("inc/header.php");
include_once("inc/sidebar.php");
include_once("../connect.php");
require_once("vendor/autoload.php");
error_reporting(0);
\Tinify\setKey("zOzdwnQnVIAfYPeHv8HBieTroP3O8qCI");
$get_post = mysqli_query($conn,"SELECT * FROM cources WHERE cource_id= '$_GET[post]'");
$post = mysqli_fetch_assoc($get_post);
if(isset($_GET['delete'])){

    $sql =mysqli_query($conn, "UPDATE cources SET image = '' WHERE cource_id = '$_GET[delete]'");

    if(isset($sql)){

        $msg  = '<div class="alert alert-danger" role="alert">تم حذف الصورة بنجاح</div>';
        echo  '<meta http-equiv="refresh" content="1; \'edit_cource.php?post='.$_GET[delete].'\' "/>';
    }
}

ini_set('display_errors', 0);
$msg ='';
if($_GET['post']){
    if(isset($_POST['add_post'])){

        $cource_name =$_POST['cource_name'];
        $donor = $_POST['donor'];
        $note = $_POST['note'];
        $date =$_POST['date'];

        if(empty($cource_name)){

            $msg = '<div class="alert alert-danger" role="alert">الرجاء إدخال رقم الايداع</div>';
        }elseif(empty($donor)){

            $msg = '<div class="alert alert-danger" role="alert">الرجاء إدخال اسم المخترع</div>';

        }elseif(empty($note)){

            $msg = '<div class="alert alert-danger" role="alert">الرجاء ادخال مسمس الاختراع</div>';

        }elseif(empty($date)){

            $msg = '<div class="alert alert-danger" role="alert">الرجاء ادخال الوصف المختصر</div>';

        }else {



            @set_time_limit(0);

            $supported_image = array('gif', 'jpg', 'jpeg', 'png');



            if (isset($_FILES['image']['name'])) {



                foreach($_FILES['image']['name'] as $key=>$val){



                    $file_name = $_FILES['image']['name'][$key];



                    // get file extension

                    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));



                    // get filename without extension

                    $filenamewithoutextension = pathinfo($file_name, PATHINFO_FILENAME);



                    if (in_array($ext, $supported_image)) {



                        if (!file_exists(getcwd(). '/posts_images')) {



                            mkdir(getcwd(). '/posts_images', 0777);

                        }



                        $filename_to_store = $file_name. '.' .$ext;

                        move_uploaded_file($_FILES['image']['tmp_name'][$key], getcwd(). '/posts_images/'.$filename_to_store);



                        // optimize image using TinyPNG

                        $source = \Tinify\fromFile(getcwd(). '/posts_images/'.$filename_to_store);



                        $source->toFile(getcwd(). '/posts_images/'.$filename_to_store);

                        $image_dir = 'posts_images/' . $filename_to_store;

                        $image_db = 'posts_images/' . $filename_to_store;

                        $insert = mysqli_query($conn, "UPDATE cources SET cource_name = '$cource_name' , donor ='$donor' , note='$note' , image='$image_db' , date = '$date'  WHERE cource_id='$_GET[post]'");

                        if(isset($insert)){

                            $msg = '<div class="alert alert-info" role="alert">تم تعديل الدورة بنجاح جاري تحويلك الي الدورات</div>';

                            echo  '<meta http-equiv="refresh" content="3; \'cources.php\' "/>';



                        }



                    }















                    else{

                        $insert = mysqli_query($conn, "UPDATE cources SET cource_name = '$cource_name' , donor ='$donor' , note='$note' , date = '$date'  WHERE cource_id='$_GET[post]'");

                        if(isset($insert)){

                            $msg = '<div class="alert alert-info" role="alert">تم تعديل الدورة بنجاح جاري تحويلك الي الدورات</div>';

                            echo  '<meta http-equiv="refresh" content="3; \'cources.php\' "/>';



                        }

                    }



                }

            }

        }

    }

}

?>


    <article class="col-lg-9">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <?php echo $msg;
                $get_post = mysqli_query($conn,"SELECT * FROM cources WHERE cource_id= '$_GET[post]'");
                $post = mysqli_fetch_assoc($get_post);
                ?>

                <div class="panel panel-info">
                    <div class="panel-heading"><b>تعديل</b></div>
                    <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="form-group">
                                <label for="cource_name" class="col-sm-2 control-label">اسم الدورة</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="cource_name" name="cource_name" value="<?php echo $post['cource_name'];?>" placeholder="أدخل اسم الدورة">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="donor" class="col-sm-2 control-label">الجهة المانحة</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="donor" name="donor" value="<?php echo $post['donor'];?>" placeholder="أدخل الجهة المانحة">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="note" class="col-sm-2 control-label">ملاحظة</label>
                                <div class="col-sm-10">
                                    <textarea rows="8"  class="form-control" name="note"  id="note"><?php echo $post['note'];?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="col-sm-2 control-label">مرفق</label>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" id="image[]" name="image[]" accept="image/*" multiple>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date" class="col-sm-2 control-label">تاريخ الدورة</label>
                                <div class="col-sm-5">
                                    <input type="date" id="datepicker" class="form-control" name="date" value="<?php echo $post['date'];?>"  required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="add_post" class="btn btn-danger">تعديل الدورة</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>

<?php
include_once("inc/footer.php");

?>