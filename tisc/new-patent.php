<?php

        include_once("inc/header.php");
        include_once("inc/sidebar.php");
        include_once("../connect.php");
        require_once("vendor/autoload.php");
        \Tinify\setKey("zOzdwnQnVIAfYPeHv8HBieTroP3O8qCI");

        $msg ='';
        $deposit_num ='';
        $inventor_name ='';
        $invent_name ='';
        $des ='';
        $date = date("Y-M-D");
    if(isset($_POST['add_post'])){

        $deposit_num =$_POST['deposit_num'];
        $inventor_name = $_POST['inventor_name'];
        $invent_name = $_POST['invent_name'];
        $des = $_POST['des'];
        $date =$_POST['date'];
        $status = $_POST['status'];

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

                      $filename_to_store = $file_name;
                      move_uploaded_file($_FILES['image']['tmp_name'][$key], getcwd(). '/posts_images/'.$filename_to_store);
           
                      // optimize image using TinyPNG
                      $source = \Tinify\fromFile(getcwd(). '/posts_images/'.$filename_to_store);
                      
                      $source->toFile(getcwd(). '/posts_images/'.$filename_to_store);
                      $image_dir = 'posts_images/' . $filename_to_store;
                      $image_db = 'posts_images/' . $filename_to_store;
                      $insert = mysqli_query($conn, "INSERT INTO patents (deposit_num ,inventor_name ,invent_name ,des ,image ,date ,status ,status_ceo ,category) VALUES
                                                            ('$deposit_num','$inventor_name','$invent_name','$des','$image_db','$date','$status','dreft','ايداع')");

                                 if(isset($insert)){
                                 $msg = '<div class="alert alert-info" role="alert">تم إضافة البراءة بنجاح جاري تحويلك الي البراءت</div>';
                                  echo  '<meta http-equiv="refresh" content="2; \'patents.php\' "/>';
                  }
                  
                
          
                            
          }
            
            
            else{
                    $insert = mysqli_query($conn, "INSERT INTO patents (deposit_num ,inventor_name ,invent_name ,des ,date ,status ,status_ceo ,category) VALUES
                                                            ('$deposit_num','$inventor_name','$invent_name','$des','$date','$status','dreft','ايداع')");

                           if(isset($insert)){
                            $msg = '<div class="alert alert-info" role="alert">تم إضافة البراءة بنجاح جاري تحويلك الي البراءت</div>';
                                  echo  '<meta http-equiv="refresh" content="2; \'patents.php\' "/>';

          
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
            <?php echo $msg; ?>
            <div class="panel panel-info">
          <div class="panel-heading"><b>إضافة براءة جديدة</b></div>
          <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                    <label for="deposit_num" class="col-sm-2 control-label">رقم الايداع</label>
                    <div class="col-sm-5">
                      <input type="number" class="form-control" id="deposit_num" name="deposit_num" value="<?php echo $deposit_num;?>" placeholder="أدخل رقم الايداع">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inventor_name" class="col-sm-2 control-label">اسم المخترع</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="inventor_name" name="inventor_name" value="<?php echo $inventor_name;?>" placeholder="أدخل اسم المخترع">
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <label for="invent_name" class="col-sm-2 control-label">مسمي الاختراع</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="invent_name" name="invent_name" value="<?php echo $invent_name;?>" placeholder="أدخل مسمي الاختراع">
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="des" class="col-sm-2 control-label">الوصف المختصر</label>
                    <div class="col-sm-10">
                        <textarea rows="8"  class="form-control" name="des"  id="des"><?php echo $des;?></textarea>
                    </div>
                    </div>

                    <div class="form-group">
                        <label for="image" class="col-sm-2 control-label">مرفق</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="image[]" name="image[]" accept="image/*" multiple>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date" class="col-sm-2 control-label">تاريخ الايداع</label>
                        <div class="col-sm-5">
                            <input type="date" id="datepicker" class="form-control" name="date"  required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-sm-2 control-label">حالة البراءة</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="status" name="status" >
                                <option value="Published">قبول</option>
                                <option value="dreft">تعليق</option>

                            </select>
                        </div>
                    </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="add_post" class="btn btn-danger">إضافة البراءة</button>
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