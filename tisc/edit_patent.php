<?php


        include_once("inc/header.php");
        include_once("inc/sidebar.php");
        include_once("../connect.php");
        require_once("vendor/autoload.php");
error_reporting(0);
        \Tinify\setKey("zOzdwnQnVIAfYPeHv8HBieTroP3O8qCI");
$get_post = mysqli_query($conn,"SELECT * FROM patents WHERE patent_id= '$_GET[post]'");
$post = mysqli_fetch_assoc($get_post);
            if(isset($_GET['delete'])){

                $sql =mysqli_query($conn, "UPDATE patents SET image = '' WHERE patent_id = '$_GET[delete]'");

                if(isset($sql)){

                    $msg  = '<div class="alert alert-danger" role="alert">تم حذف الصورة بنجاح</div>';
                    echo  '<meta http-equiv="refresh" content="1; \'edit_patent.php?post='.$_GET[delete].'\' "/>';
                }
            }

ini_set('display_errors', 0);
        $msg ='';
       if($_GET['post']){
    if(isset($_POST['add_post'])){

        $deposit_num =$_POST['deposit_num'];
        $inventor_name = $_POST['inventor_name'];
        $invent_name = $_POST['invent_name'];
        $des = $_POST['des'];
        $date =$_POST['date'];
        $status = $_POST['status'];
        $category = $_POST['category'];

        if(empty($deposit_num)){

            $msg = '<div class="alert alert-danger" role="alert">الرجاء إدخال رقم الايداع</div>';
        }elseif(empty($inventor_name)){

            $msg = '<div class="alert alert-danger" role="alert">الرجاء إدخال اسم المخترع</div>';

        }elseif(empty($invent_name)){

            $msg = '<div class="alert alert-danger" role="alert">الرجاء ادخال مسمس الاختراع</div>';

        }elseif(empty($des)){

            $msg = '<div class="alert alert-danger" role="alert">الرجاء ادخال الوصف المختصر</div>';

        }elseif(empty($date)){

            $msg = '<div class="alert alert-danger" role="alert">الرجاء ادخال تاريخ الايداع</div>';

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
                        
                        $insert = mysqli_query($conn, "UPDATE patents SET deposit_num = '$deposit_num' , inventor_name ='$inventor_name' , invent_name = '$invent_name' , des='$des' , image='$image_db' , date = '$date' , category = '$category' WHERE patent_id='$_GET[post]'");
                        $insert2 = mysqli_query($conn, "INSERT INTO updated_patents (deposit_num ,inventor_name ,invent_name ,des ,image ,date ,status ,status_ceo ,category) VALUES
                                                            ('$deposit_num','$inventor_name','$invent_name','$des','$image_db','$date','$status','dreft','$category')");
                        if(isset($insert)){

                                  $msg = '<div class="alert alert-info" role="alert">تم تعديل البراءة بنجاح جاري تحويلك الي البراءات</div>';

                                echo  '<meta http-equiv="refresh" content="3; \'patents.php\' "/>';

  

                                 }

                        

                    }

                    

                  

            

                  

                

             

            

            else{

                    $insert = mysqli_query($conn, "UPDATE patents SET  deposit_num = '$deposit_num' , inventor_name ='$inventor_name' , invent_name = '$invent_name' , des='$des', date = '$date' , category = '$category' WHERE patent_id='$_GET[post]'");
                $insert2 = mysqli_query($conn, "INSERT INTO updated_patents (deposit_num ,inventor_name ,invent_name ,des ,date ,status ,status_ceo ,category) VALUES
                                                            ('$deposit_num','$inventor_name','$invent_name','$des','$date','$status','dreft','$category')");


                if(isset($insert)){

                                  $msg = '<div class="alert alert-info" role="alert">تم تحديث البراءة بنجاح جاري تحويلك الي البراءات</div>';

                                echo  '<meta http-equiv="refresh" content="3; \'patents.php\' "/>';

  

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
            $get_post = mysqli_query($conn,"SELECT * FROM patents WHERE patent_id= '$_GET[post]'");
                $post = mysqli_fetch_assoc($get_post);
            ?>
            
            <div class="panel panel-info">
          <div class="panel-heading"><b>تعديل مقال : </b><?php echo $post['invent_name'];?></div>
          <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                    <div class="form-group">
                        <label for="deposit_num" class="col-sm-2 control-label">رقم الايداع</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="deposit_num" name="deposit_num" value="<?php echo $post['deposit_num'];?>" placeholder="أدخل رقم الايداع">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inventor_name" class="col-sm-2 control-label">اسم المخترع</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inventor_name" name="inventor_name" value="<?php echo $post['inventor_name'];?>" placeholder="أدخل اسم المخترع">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="invent_name" class="col-sm-2 control-label">مسمي الايداع</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="invent_name" name="invent_name" value="<?php echo $post['invent_name'];?>" placeholder="أدخل مسمي الايداع">
                        </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="post" class="col-sm-2 control-label">الوصف المختصر</label>
                    <div class="col-sm-10">
                        <textarea rows="8"  class="form-control" name="des"  id="des"><?php echo $post['des']; ?></textarea>
                    </div>
                    </div>
                        
                    <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">صورة البراءة</label>
                    <div class="col-sm-4">
                      <input type="file" class="form-control" id="image[]" name="image[]" accept="image/*" multiple>
                    </div>
                    <div class="col-sm-3">
                         <p><?php echo  explode('posts_images/' , $post['image'])[1]; ?></p>
                    </div>
                        <?php
                        if($post['image'] != ''){
                    echo
                     '<div class="col-sm-3">
                         <a href="edit_patent.php?delete='.$post['patent_id'].'" class="btn btn-danger btn-xs">حذف الصورة</a>
                    </div>';
                        }
                        ?>
                  </div>

                       
                    <div class="form-group">
                    <label for="date" class="col-sm-2 control-label">تاريخ الايداع</label>
                    <div class="col-sm-5">
                      <input type="date" class="form-control" id="date" name="date" value="<?php echo $post['date']; ?>" placeholder="أدخل تاريخ الايداع">
                    </div>
                  </div>

                    <div class="form-group">
                        <label for="category" class="col-sm-2 control-label">إختر التصنيف</label>
                        <div class="col-sm-4">
                            <select  class="form-control" id="category" name="category">

                                <?php

                                $cat =mysqli_query($conn,"SELECT * FROM category");

                                while($cate = mysqli_fetch_assoc($cat)){
                                    echo '<option value="'.$cate['category'].'" '.($post['category'] == $cate['category'] ? 'selected' : '').'>'.$cate['category'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    </div>
                  </div>
                    
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="add_post" class="btn btn-danger">تحديث البراءة</button>
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