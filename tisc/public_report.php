<?php

include_once("inc/header.php");
include_once("inc/sidebar.php");
include_once("../connect.php");
error_reporting(0);


$msg='';
if(isset($_POST['submit'])){
    $checkbox1 = $_POST['ch1'] ;
    $chk = "";
    foreach($checkbox1 as $ch1)
    {
        $chk .= $ch1.",";
    }
    $sel_setting =mysqli_query($conn, "select * from report");
    if(mysqli_num_rows($sel_setting) != 1){

        $image =$_FILES['image'];
        $image3 =$_FILES['image3'];
        $image_name =$image['name'];
        $image_name3 =$image3['name'];
        $image_tmp =$image['tmp_name'];
        $image_tmp3 =$image3['tmp_name'];
        $image_size =$image['size'];
        $image_size3 =$image3['size'];
        $image_error =$image['error'];
        $image_error3 =$image3['error'];
        //if 1 and 2 not empty

        if($image_name != '' && $image_name3 != ''){

            $image_exe= explode('.',$image_name);
            $image_exe3= explode('.',$image_name3);
            $image_exe= strtolower(end($image_exe));
            $image_exe3= strtolower(end($image_exe3));


            $allowd =array('png','jpg','gif','jpeg' ,'docx' ,'pdf','xlsx' , 'xls');
            if(in_array($image_exe , $allowd) && in_array($image_exe3 , $allowd)){

                if($image_error === 0 && $image_error3 === 0){

                    if($image_size <= 7000000 &&  $image_size3 <= 7000000 ){

                        $new_name =$image_name;
                        $new_name3 =$image_name3;
                        $image_dir = 'posts_images/' . $new_name;
                        $image_dir3 = 'posts_images/' . $new_name3;
                        $image_db = 'posts_images/' . $new_name;
                        $image_db3 = 'posts_images/' . $new_name3;

                        if(move_uploaded_file($image_tmp, $image_dir) && move_uploaded_file($image_tmp3, $image_dir3)){

                            $insert = mysqli_query($conn, "INSERT INTO report(
                                                        entity_name,
                                                        num_of_workers,
                                                        name,
                                                        unit,
                                                        email,
                                                        phone,
                                                        patent_registered,
                                                        patent_granted,
                                                        patent_utility_granted,
                                                        patent_granted_utitlty,
                                                        num_visits,         
                                                        ch1,
                                                        problem_solved,
                                                        training_cources,
                                                        num_of_qualified,
                                                        num_1,
                                                        num_2,
                                                        num_3,
                                                        num_4,
                                                        num_5,
                                                        num_6,
                                                        num_7,
                                                        num_8,
                                                        num_9,
                                                        num_10,
                                                        num_11,
                                                        num_12,
                                                        num_13,
                                                        num_14,
                                                        num_15,
                                                        c_1,
                                                        c_2,
                                                        c_3,
                                                        c_4,
                                                        c_5,
                                                        c_6,
                                                        c_7,
                                                        c_8,
                                                        c_9,
                                                        c_10,
                                                        c_11,
                                                        c_12,
                                                        c_13,
                                                        c_14,
                                                        c_15,
                                                        image,
                                                        image3,
                                                        policy,
                                                        activities
                                                        ) VALUES(
                                                        '$_POST[entity_name]',
                                                        '$_POST[num_of_workers]',
                                                        '$_POST[name]',
                                                        '$_POST[unit]',
                                                        '$_POST[email]',
                                                        '$_POST[phone]',
                                                        '$_POST[patent_registered]',
                                                        '$_POST[patent_granted]',
                                                        '$_POST[patent_utility_granted]',
                                                        '$_POST[patent_granted_utitlty]',
                                                        '$_POST[num_visits]',
                                                        '$chk',
                                                        '$_POST[problem_solved]',
                                                        '$_POST[training_cources]',
                                                        '$_POST[num_of_qualified]',
                                                        '$_POST[num_1]',
                                                        '$_POST[num_2]',
                                                        '$_POST[num_3]',
                                                        '$_POST[num_4]',
                                                        '$_POST[num_5]',
                                                        '$_POST[num_6]',
                                                        '$_POST[num_7]',
                                                        '$_POST[num_8]',
                                                        '$_POST[num_9]',
                                                        '$_POST[num_10]',
                                                        '$_POST[num_11]',
                                                        '$_POST[num_12]',
                                                        '$_POST[num_13]',
                                                        '$_POST[num_14]',
                                                        '$_POST[num_15]',
                                                        '$_POST[c_1]',
                                                        '$_POST[c_2]',
                                                        '$_POST[c_3]',
                                                        '$_POST[c_4]',
                                                        '$_POST[c_5]',
                                                        '$_POST[c_6]',
                                                        '$_POST[c_7]',
                                                        '$_POST[c_8]',
                                                        '$_POST[c_9]',
                                                        '$_POST[c_10]',
                                                        '$_POST[c_11]',
                                                        '$_POST[c_12]',
                                                        '$_POST[c_13]',
                                                        '$_POST[c_14]',
                                                        '$_POST[c_15]',
                                                        '$image_db',
                                                        '$image_db3',
                                                        '$_POST[policy]',
                                                        '$_POST[activities]'
                                            ) ");

                            if(isset($insert)){
                                $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';
                                echo  '<meta http-equiv="refresh" content="2; \'tisc_report.php\' "/>';

                            }
                        }else{
                            $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ اثناء رفع الصورة</div>';
                        }

                    }else{
                        $msg = '<div class="alert alert-danger" role="alert">عذراً، حجم الصورة كبير لا يجب ان يتعدي 4 MB</div>';

                    }
                }else{
                    $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ غير متوقع أثناء رفع الصورة</div>';

                }

            }else{

                $msg = '<div class="alert alert-danger" role="alert">الرجاء اختيار صورة صحيحة</div>';
            }
        }



        //if 1 not and 2  empty

        elseif($image_name != ''){
            $image_exe= explode('.',$image_name);
            $image_exe= strtolower(end($image_exe));


            $allowd =array('png','jpg','gif','jpeg' ,'docx' ,'pdf','xlsx' , 'xls');
            if(in_array($image_exe , $allowd)){

                if($image_error === 0){

                    if($image_size <= 7000000){

                        $new_name =$image_name;
                        $image_dir = 'posts_images/' . $new_name;
                        $image_db = 'posts_images/' . $new_name;

                        if(move_uploaded_file($image_tmp, $image_dir)){

                            $insert = mysqli_query($conn, "INSERT INTO report(
                                                        entity_name,
                                                        num_of_workers,
                                                        name,
                                                        unit,
                                                        email,
                                                        phone,
                                                        patent_registered,
                                                        patent_granted,
                                                        patent_utility_granted,
                                                        patent_granted_utitlty,
                                                        num_visits,   
                                                        ch1,        
                                                        problem_solved,
                                                        training_cources,
                                                        num_of_qualified,
                                                        num_1,
                                                        num_2,
                                                        num_3,
                                                        num_4,
                                                        num_5,
                                                        num_6,
                                                        num_7,
                                                        num_8,
                                                        num_9,
                                                        num_10,
                                                        num_11,
                                                        num_12,
                                                        num_13,
                                                        num_14,
                                                        num_15,
                                                        c_1,
                                                        c_2,
                                                        c_3,
                                                        c_4,
                                                        c_5,
                                                        c_6,
                                                        c_7,
                                                        c_8,
                                                        c_9,
                                                        c_10,
                                                        c_11,
                                                        c_12,
                                                        c_13,
                                                        c_14,
                                                        c_15,
                                                        image,
                                                        
                                                        policy,
                                                        activities
                                                        ) VALUES(
                                                        '$_POST[entity_name]',
                                                        '$_POST[num_of_workers]',
                                                        '$_POST[name]',
                                                        '$_POST[unit]',
                                                        '$_POST[email]',
                                                        '$_POST[phone]',
                                                        '$_POST[patent_registered]',
                                                        '$_POST[patent_granted]',
                                                        '$_POST[patent_utility_granted]',
                                                        '$_POST[patent_granted_utitlty]',
                                                        '$_POST[num_visits]',
                                                        '$chk',
                                                        '$_POST[problem_solved]',
                                                        '$_POST[training_cources]',
                                                        '$_POST[num_of_qualified]',
                                                        '$_POST[num_1]',
                                                        '$_POST[num_2]',
                                                        '$_POST[num_3]',
                                                        '$_POST[num_4]',
                                                        '$_POST[num_5]',
                                                        '$_POST[num_6]',
                                                        '$_POST[num_7]',
                                                        '$_POST[num_8]',
                                                        '$_POST[num_9]',
                                                        '$_POST[num_10]',
                                                        '$_POST[num_11]',
                                                        '$_POST[num_12]',
                                                        '$_POST[num_13]',
                                                        '$_POST[num_14]',
                                                        '$_POST[num_15]',
                                                        '$_POST[c_1]',
                                                        '$_POST[c_2]',
                                                        '$_POST[c_3]',
                                                        '$_POST[c_4]',
                                                        '$_POST[c_5]',
                                                        '$_POST[c_6]',
                                                        '$_POST[c_7]',
                                                        '$_POST[c_8]',
                                                        '$_POST[c_9]',
                                                        '$_POST[c_10]',
                                                        '$_POST[c_11]',
                                                        '$_POST[c_12]',
                                                        '$_POST[c_13]',
                                                        '$_POST[c_14]',
                                                        '$_POST[c_15]',
                                                        '$image_db',

                                                        '$_POST[policy]',
                                                        '$_POST[activities]'
                                            ) ");
                            if(isset($insert)){
                                $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';
                                echo  '<meta http-equiv="refresh" content="2; \'tisc_report.php\' "/>';

                            }
                        }else{
                            $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ اثناء رفع الصورة</div>';
                        }

                    }else{
                        $msg = '<div class="alert alert-danger" role="alert">عذراً، حجم الصورة كبير لا يجب ان يتعدي 4 MB</div>';

                    }
                }else{
                    $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ غير متوقع أثناء رفع الصورة</div>';

                }

            }else{

                $msg = '<div class="alert alert-danger" role="alert">الرجاء اختيار صورة صحيحة</div>';
            }
        }
        //if 1 empty but 2 not empry


        elseif($image_name3 != ''){
            $image3 =$_FILES['image3'];
            $image_name3 =$image3['name'];
            $image_tmp3 =$image3['tmp_name'];
            $image_size3 =$image3['size'];
            $image_error3 =$image3['error'];
            $image_exe3= explode('.',$image_name3);
            $image_exe3= strtolower(end($image_exe3));


            $allowd =array('png','jpg','gif','jpeg' ,'docx' ,'pdf','xlsx' , 'xls');
            if(in_array($image_exe3 , $allowd)){

                if($image_error3 === 0){

                    if($image_size3 <= 7000000){

                        $new_name3 =$image_name3;
                        $image_dir3 = 'posts_images/' . $new_name3;
                        $image_db3 = 'posts_images/' . $new_name3;

                        if(move_uploaded_file($image_tmp3, $image_dir3)){

                            $insert = mysqli_query($conn, "INSERT INTO report(
                                                        entity_name,
                                                        num_of_workers,
                                                        name,
                                                        unit,
                                                        email,
                                                        phone,
                                                        patent_registered,
                                                        patent_granted,
                                                        patent_utility_granted,
                                                        patent_granted_utitlty,
                                                        num_visits,
                                                        ch1,          
                                                        problem_solved,
                                                        training_cources,
                                                        num_of_qualified,
                                                        num_1,
                                                        num_2,
                                                        num_3,
                                                        num_4,
                                                        num_5,
                                                        num_6,
                                                        num_7,
                                                        num_8,
                                                        num_9,
                                                        num_10,
                                                        num_11,
                                                        num_12,
                                                        num_13,
                                                        num_14,
                                                        num_15,
                                                        c_1,
                                                        c_2,
                                                        c_3,
                                                        c_4,
                                                        c_5,
                                                        c_6,
                                                        c_7,
                                                        c_8,
                                                        c_9,
                                                        c_10,
                                                        c_11,
                                                        c_12,
                                                        c_13,
                                                        c_14,
                                                        c_15,
                                                        
                                                        image3,
                                                        policy,
                                                        activities
                                                        ) VALUES(
                                                        '$_POST[entity_name]',
                                                        '$_POST[num_of_workers]',
                                                        '$_POST[name]',
                                                        '$_POST[unit]',
                                                        '$_POST[email]',
                                                        '$_POST[phone]',
                                                        '$_POST[patent_registered]',
                                                        '$_POST[patent_granted]',
                                                        '$_POST[patent_utility_granted]',
                                                        '$_POST[patent_granted_utitlty]',
                                                        '$_POST[num_visits]',
                                                        '$chk',
                                                        '$_POST[problem_solved]',
                                                        '$_POST[training_cources]',
                                                        '$_POST[num_of_qualified]',
                                                        '$_POST[num_1]',
                                                        '$_POST[num_2]',
                                                        '$_POST[num_3]',
                                                        '$_POST[num_4]',
                                                        '$_POST[num_5]',
                                                        '$_POST[num_6]',
                                                        '$_POST[num_7]',
                                                        '$_POST[num_8]',
                                                        '$_POST[num_9]',
                                                        '$_POST[num_10]',
                                                        '$_POST[num_11]',
                                                        '$_POST[num_12]',
                                                        '$_POST[num_13]',
                                                        '$_POST[num_14]',
                                                        '$_POST[num_15]',
                                                        '$_POST[c_1]',
                                                        '$_POST[c_2]',
                                                        '$_POST[c_3]',
                                                        '$_POST[c_4]',
                                                        '$_POST[c_5]',
                                                        '$_POST[c_6]',
                                                        '$_POST[c_7]',
                                                        '$_POST[c_8]',
                                                        '$_POST[c_9]',
                                                        '$_POST[c_10]',
                                                        '$_POST[c_11]',
                                                        '$_POST[c_12]',
                                                        '$_POST[c_13]',
                                                        '$_POST[c_14]',
                                                        '$_POST[c_15]',
                                                        
                                                        '$image_db3',
                                                        '$_POST[policy]',
                                                        '$_POST[activities]'
                                            ) ");
                            if(isset($insert)){
                                $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';
                                echo  '<meta http-equiv="refresh" content="2; \'tisc_report.php\' "/>';

                            }
                        }else{
                            $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ اثناء رفع الصورة</div>';
                        }

                    }else{
                        $msg = '<div class="alert alert-danger" role="alert">عذراً، حجم الصورة كبير لا يجب ان يتعدي 4 MB</div>';

                    }
                }else{
                    $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ غير متوقع أثناء رفع الصورة</div>';

                }

            }else{

                $msg = '<div class="alert alert-danger" role="alert">الرجاء اختيار صورة صحيحة</div>';
            }
        }



        else{
            $insert = mysqli_query($conn, "INSERT INTO report(
                                                        entity_name,
                                                        num_of_workers,
                                                        name,
                                                        unit,
                                                        email,
                                                        phone,
                                                        patent_registered,
                                                        patent_granted,
                                                        patent_utility_granted,
                                                        patent_granted_utitlty,
                                                        num_visits,     
                                                        ch1,      
                                                        problem_solved,
                                                        training_cources,
                                                        num_of_qualified,
                                                        num_1,
                                                        num_2,
                                                        num_3,
                                                        num_4,
                                                        num_5,
                                                        num_6,
                                                        num_7,
                                                        num_8,
                                                        num_9,
                                                        num_10,
                                                        num_11,
                                                        num_12,
                                                        num_13,
                                                        num_14,
                                                        num_15,
                                                        c_1,
                                                        c_2,
                                                        c_3,
                                                        c_4,
                                                        c_5,
                                                        c_6,
                                                        c_7,
                                                        c_8,
                                                        c_9,
                                                        c_10,
                                                        c_11,
                                                        c_12,
                                                        c_13,
                                                        c_14,
                                                        c_15,

                                                        policy,
                                                        activities
                                                        ) VALUES(
                                                        '$_POST[entity_name]',
                                                        '$_POST[num_of_workers]',
                                                        '$_POST[name]',
                                                        '$_POST[unit]',
                                                        '$_POST[email]',
                                                        '$_POST[phone]',
                                                        '$_POST[patent_registered]',
                                                        '$_POST[patent_granted]',
                                                        '$_POST[patent_utility_granted]',
                                                        '$_POST[patent_granted_utitlty]',
                                                        '$_POST[num_visits]',
                                                        '$chk',
                                                        '$_POST[problem_solved]',
                                                        '$_POST[training_cources]',
                                                        '$_POST[num_of_qualified]',
                                                        '$_POST[num_1]',
                                                        '$_POST[num_2]',
                                                        '$_POST[num_3]',
                                                        '$_POST[num_4]',
                                                        '$_POST[num_5]',
                                                        '$_POST[num_6]',
                                                        '$_POST[num_7]',
                                                        '$_POST[num_8]',
                                                        '$_POST[num_9]',
                                                        '$_POST[num_10]',
                                                        '$_POST[num_11]',
                                                        '$_POST[num_12]',
                                                        '$_POST[num_13]',
                                                        '$_POST[num_14]',
                                                        '$_POST[num_15]',
                                                        '$_POST[c_1]',
                                                        '$_POST[c_2]',
                                                        '$_POST[c_3]',
                                                        '$_POST[c_4]',
                                                        '$_POST[c_5]',
                                                        '$_POST[c_6]',
                                                        '$_POST[c_7]',
                                                        '$_POST[c_8]',
                                                        '$_POST[c_9]',
                                                        '$_POST[c_10]',
                                                        '$_POST[c_11]',
                                                        '$_POST[c_12]',
                                                        '$_POST[c_13]',
                                                        '$_POST[c_14]',
                                                        '$_POST[c_15]',

                                                        '$_POST[policy]',
                                                        '$_POST[activities]'
                                            ) ");
            if(isset($insert)){
                $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';
                echo  '<meta http-equiv="refresh" content="2; \'tisc_report.php\' "/>';

            }
        }

    }




    else {
        $image =$_FILES['image'];
        $image3 =$_FILES['image3'];
        $image_name =$image['name'];
        $image_name3 =$image3['name'];
        $image_tmp =$image['tmp_name'];
        $image_tmp3 =$image3['tmp_name'];
        $image_size =$image['size'];
        $image_size3 =$image3['size'];
        $image_error =$image['error'];
        $image_error3 =$image3['error'];

        //if 1 and 2 not empty

        if($image_name != ''  && $image_name3 != ''){

            $image_exe= explode('.',$image_name);
            $image_exe3= explode('.',$image_name3);
            $image_exe= strtolower(end($image_exe));
            $image_exe3= strtolower(end($image_exe3));


            $allowd =array('png','jpg','gif','jpeg' ,'docx' ,'pdf','xlsx' , 'xls');
            if(in_array($image_exe , $allowd) && in_array($image_exe3 , $allowd)){

                if($image_error === 0 && $image_error3 === 0){

                    if($image_size <= 7000000 &&  $image_size3 <= 7000000 ){

                        $new_name =$image_name;
                        $new_name3 =$image_name3;
                        $image_dir = 'posts_images/' . $new_name;
                        $image_dir3 = 'posts_images/' . $new_name3;
                        $image_db = 'posts_images/' . $new_name;
                        $image_db3 = 'posts_images/' . $new_name3;

                        if(move_uploaded_file($image_tmp, $image_dir) &&  move_uploaded_file($image_tmp3, $image_dir3)){

                            $insert = mysqli_query($conn, "UPDATE report SET
                                                        entity_name ='$_POST[entity_name]',
                                                        num_of_workers ='$_POST[num_of_workers]',
                                                        name ='$_POST[name]',
                                                        unit ='$_POST[unit]',
                                                        email ='$_POST[email]',
                                                        phone = '$_POST[phone]',
                                                        patent_registered = '$_POST[patent_registered]',
                                                        patent_granted = '$_POST[patent_granted]',
                                                        patent_utility_granted =  '$_POST[patent_utility_granted]',
                                                        patent_granted_utitlty = '$_POST[patent_granted_utitlty]',
                                                        num_visits = '$_POST[num_visits]',
                                                        ch1 = '$chk',
                                                        problem_solved = '$_POST[problem_solved]',
                                                        training_cources =  '$_POST[training_cources]',
                                                        num_of_qualified = '$_POST[num_of_qualified]',
                                                        num_1 = '$_POST[num_1]',
                                                        num_2 = '$_POST[num_2]',
                                                        num_3 = '$_POST[num_3]',
                                                        num_4 = '$_POST[num_4]',
                                                        num_5 = '$_POST[num_5]',
                                                        num_6 = '$_POST[num_6]',
                                                        num_7 = '$_POST[num_7]',
                                                        num_8 = '$_POST[num_8]',
                                                        num_9 = '$_POST[num_9]',
                                                        num_10 = '$_POST[num_10]',
                                                        num_11 = '$_POST[num_11]',
                                                        num_12 = '$_POST[num_12]',
                                                        num_13 = '$_POST[num_13]',
                                                        num_14 = '$_POST[num_14]',
                                                        num_15 = '$_POST[num_15]',
                                                        c_1 = '$_POST[c_1]',
                                                        c_2 = '$_POST[c_2]',
                                                        c_3 = '$_POST[c_3]',
                                                        c_4 = '$_POST[c_4]',
                                                        c_5 = '$_POST[c_5]',
                                                        c_6 = '$_POST[c_6]',
                                                        c_7 = '$_POST[c_7]',
                                                        c_8 = '$_POST[c_8]',
                                                        c_9 = '$_POST[c_9]',
                                                        c_10 = '$_POST[c_10]',
                                                        c_11 = '$_POST[c_11]',
                                                        c_12 = '$_POST[c_12]',
                                                        c_13 = '$_POST[c_13]',
                                                        c_14 = '$_POST[c_14]',
                                                        c_15 = '$_POST[c_15]',
                                                        image = '$image_db',
                                                        image3 = '$image_db3',
                                                        policy ='$_POST[policy]',
                                                        activities = '$_POST[activities]'
                                                    ");
                            if(isset($insert)){
                                $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';
                                echo  '<meta http-equiv="refresh" content="2; \'tisc_report.php\' "/>';

                            }
                        }else{
                            $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ اثناء رفع الصورة</div>';
                        }

                    }else{
                        $msg = '<div class="alert alert-danger" role="alert">عذراً، حجم الصورة كبير لا يجب ان يتعدي 4 MB</div>';

                    }
                }else{
                    $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ غير متوقع أثناء رفع الصورة</div>';

                }

            }else{

                $msg = '<div class="alert alert-danger" role="alert">الرجاء اختيار صورة صحيحة</div>';
            }
        }


        //if 1 not but 2  empty

        elseif($image_name != '' ){

            $image_exe= explode('.',$image_name);
            $image_exe= strtolower(end($image_exe));


            $allowd =array('png','jpg','gif','jpeg' ,'docx' ,'pdf','xlsx' , 'xls');
            if(in_array($image_exe , $allowd)){

                if($image_error === 0 ){

                    if($image_size <= 7000000){

                        $new_name =$image_name;
                        $image_dir = 'posts_images/' . $new_name;
                        $image_db = 'posts_images/' . $new_name;

                        if(move_uploaded_file($image_tmp, $image_dir)){

                            $insert = mysqli_query($conn, "UPDATE report SET
                                                        entity_name ='$_POST[entity_name]',
                                                        num_of_workers ='$_POST[num_of_workers]',
                                                        name ='$_POST[name]',
                                                        unit ='$_POST[unit]',
                                                        email ='$_POST[email]',
                                                        phone = '$_POST[phone]',
                                                        patent_registered = '$_POST[patent_registered]',
                                                        patent_granted = '$_POST[patent_granted]',
                                                        patent_utility_granted =  '$_POST[patent_utility_granted]',
                                                        patent_granted_utitlty = '$_POST[patent_granted_utitlty]',
                                                        num_visits = '$_POST[num_visits]',
                                                        ch1 = '$chk',
                                                        problem_solved = '$_POST[problem_solved]',
                                                        training_cources =  '$_POST[training_cources]',
                                                        num_of_qualified = '$_POST[num_of_qualified]',
                                                        num_1 = '$_POST[num_1]',
                                                        num_2 = '$_POST[num_2]',
                                                        num_3 = '$_POST[num_3]',
                                                        num_4 = '$_POST[num_4]',
                                                        num_5 = '$_POST[num_5]',
                                                        num_6 = '$_POST[num_6]',
                                                        num_7 = '$_POST[num_7]',
                                                        num_8 = '$_POST[num_8]',
                                                        num_9 = '$_POST[num_9]',
                                                        num_10 = '$_POST[num_10]',
                                                        num_11 = '$_POST[num_11]',
                                                        num_12 = '$_POST[num_12]',
                                                        num_13 = '$_POST[num_13]',
                                                        num_14 = '$_POST[num_14]',
                                                        num_15 = '$_POST[num_15]',
                                                        c_1 = '$_POST[c_1]',
                                                        c_2 = '$_POST[c_2]',
                                                        c_3 = '$_POST[c_3]',
                                                        c_4 = '$_POST[c_4]',
                                                        c_5 = '$_POST[c_5]',
                                                        c_6 = '$_POST[c_6]',
                                                        c_7 = '$_POST[c_7]',
                                                        c_8 = '$_POST[c_8]',
                                                        c_9 = '$_POST[c_9]',
                                                        c_10 = '$_POST[c_10]',
                                                        c_11 = '$_POST[c_11]',
                                                        c_12 = '$_POST[c_12]',
                                                        c_13 = '$_POST[c_13]',
                                                        c_14 = '$_POST[c_14]',
                                                        c_15 = '$_POST[c_15]',
                                                        image = '$image_db',
                                                        
                                                        policy ='$_POST[policy]',
                                                        activities = '$_POST[activities]'
                                                    ");
                            if(isset($insert)){
                                $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';
                                echo  '<meta http-equiv="refresh" content="2; \'tisc_report.php\' "/>';


                            }
                        }else{
                            $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ اثناء رفع الصورة</div>';
                        }

                    }else{
                        $msg = '<div class="alert alert-danger" role="alert">عذراً، حجم الصورة كبير لا يجب ان يتعدي 4 MB</div>';

                    }
                }else{
                    $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ غير متوقع أثناء رفع الصورة</div>';

                }

            }else{

                $msg = '<div class="alert alert-danger" role="alert">الرجاء اختيار صورة صحيحة</div>';
            }
        }


        //if 1 empty but 2 not empty

        elseif($image_name3 != ''){

            $image_exe3= explode('.',$image_name3);
            $image_exe3= strtolower(end($image_exe3));


            $allowd =array('png','jpg','gif','jpeg' ,'docx' ,'pdf','xlsx' , 'xls');
            if(in_array($image_exe3 , $allowd)){

                if($image_error3 === 0){

                    if($image_size3 <= 7000000 ){

                        $new_name3 =$image_name3;
                        $image_dir3 = 'posts_images/' . $new_name3;
                        $image_db3 = 'posts_images/' . $new_name3;

                        if(move_uploaded_file($image_tmp3, $image_dir3)){

                            $insert = mysqli_query($conn, "UPDATE report SET
                                                        entity_name ='$_POST[entity_name]',
                                                        num_of_workers ='$_POST[num_of_workers]',
                                                        name ='$_POST[name]',
                                                        unit ='$_POST[unit]',
                                                        email ='$_POST[email]',
                                                        phone = '$_POST[phone]',
                                                        patent_registered = '$_POST[patent_registered]',
                                                        patent_granted = '$_POST[patent_granted]',
                                                        patent_utility_granted =  '$_POST[patent_utility_granted]',
                                                        patent_granted_utitlty = '$_POST[patent_granted_utitlty]',
                                                        num_visits = '$_POST[num_visits]',
                                                        ch1 = '$chk',
                                                        problem_solved = '$_POST[problem_solved]',
                                                        training_cources =  '$_POST[training_cources]',
                                                        num_of_qualified = '$_POST[num_of_qualified]',
                                                        num_1 = '$_POST[num_1]',
                                                        num_2 = '$_POST[num_2]',
                                                        num_3 = '$_POST[num_3]',
                                                        num_4 = '$_POST[num_4]',
                                                        num_5 = '$_POST[num_5]',
                                                        num_6 = '$_POST[num_6]',
                                                        num_7 = '$_POST[num_7]',
                                                        num_8 = '$_POST[num_8]',
                                                        num_9 = '$_POST[num_9]',
                                                        num_10 = '$_POST[num_10]',
                                                        num_11 = '$_POST[num_11]',
                                                        num_12 = '$_POST[num_12]',
                                                        num_13 = '$_POST[num_13]',
                                                        num_14 = '$_POST[num_14]',
                                                        num_15 = '$_POST[num_15]',
                                                        c_1 = '$_POST[c_1]',
                                                        c_2 = '$_POST[c_2]',
                                                        c_3 = '$_POST[c_3]',
                                                        c_4 = '$_POST[c_4]',
                                                        c_5 = '$_POST[c_5]',
                                                        c_6 = '$_POST[c_6]',
                                                        c_7 = '$_POST[c_7]',
                                                        c_8 = '$_POST[c_8]',
                                                        c_9 = '$_POST[c_9]',
                                                        c_10 = '$_POST[c_10]',
                                                        c_11 = '$_POST[c_11]',
                                                        c_12 = '$_POST[c_12]',
                                                        c_13 = '$_POST[c_13]',
                                                        c_14 = '$_POST[c_14]',
                                                        c_15 = '$_POST[c_15]',
                                                        image3 = '$image_db3',
                                                        policy ='$_POST[policy]',
                                                        activities = '$_POST[activities]'
                                                    ");
                            if(isset($insert)){
                                $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';
                                echo  '<meta http-equiv="refresh" content="2; \'tisc_report.php\' "/>';


                            }
                        }else{
                            $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ اثناء رفع الصورة</div>';
                        }

                    }else{
                        $msg = '<div class="alert alert-danger" role="alert">عذراً، حجم الصورة كبير لا يجب ان يتعدي 4 MB</div>';

                    }
                }else{
                    $msg = '<div class="alert alert-danger" role="alert">عذراً، حدث خطأ غير متوقع أثناء رفع الصورة</div>';

                }

            }else{

                $msg = '<div class="alert alert-danger" role="alert">الرجاء اختيار صورة صحيحة</div>';
            }
        }



        else{
            $insert = mysqli_query($conn, "UPDATE report SET
                                                        entity_name ='$_POST[entity_name]',
                                                        num_of_workers ='$_POST[num_of_workers]',
                                                        name ='$_POST[name]',
                                                        unit ='$_POST[unit]',
                                                        email ='$_POST[email]',
                                                        phone = '$_POST[phone]',
                                                        patent_registered = '$_POST[patent_registered]',
                                                        patent_granted = '$_POST[patent_granted]',
                                                        patent_utility_granted =  '$_POST[patent_utility_granted]',
                                                        patent_granted_utitlty = '$_POST[patent_granted_utitlty]',
                                                        num_visits = '$_POST[num_visits]',
                                                        ch1 = '$chk',
                                                        problem_solved = '$_POST[problem_solved]',
                                                        training_cources =  '$_POST[training_cources]',
                                                        num_of_qualified = '$_POST[num_of_qualified]',
                                                        num_1 = '$_POST[num_1]',
                                                        num_2 = '$_POST[num_2]',
                                                        num_3 = '$_POST[num_3]',
                                                        num_4 = '$_POST[num_4]',
                                                        num_5 = '$_POST[num_5]',
                                                        num_6 = '$_POST[num_6]',
                                                        num_7 = '$_POST[num_7]',
                                                        num_8 = '$_POST[num_8]',
                                                        num_9 = '$_POST[num_9]',
                                                        num_10 = '$_POST[num_10]',
                                                        num_11 = '$_POST[num_11]',
                                                        num_12 = '$_POST[num_12]',
                                                        num_13 = '$_POST[num_13]',
                                                        num_14 = '$_POST[num_14]',
                                                        num_15 = '$_POST[num_15]',
                                                        c_1 = '$_POST[c_1]',
                                                        c_2 = '$_POST[c_2]',
                                                        c_3 = '$_POST[c_3]',
                                                        c_4 = '$_POST[c_4]',
                                                        c_5 = '$_POST[c_5]',
                                                        c_6 = '$_POST[c_6]',
                                                        c_7 = '$_POST[c_7]',
                                                        c_8 = '$_POST[c_8]',
                                                        c_9 = '$_POST[c_9]',
                                                        c_10 = '$_POST[c_10]',
                                                        c_11 = '$_POST[c_11]',
                                                        c_12 = '$_POST[c_12]',
                                                        c_13 = '$_POST[c_13]',
                                                        c_14 = '$_POST[c_14]',
                                                        c_15 = '$_POST[c_15]',


                                                        policy ='$_POST[policy]',
                                                        activities = '$_POST[activities]'
                                                    ");
            if(isset($insert)){
                $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';
                echo  '<meta http-equiv="refresh" content="2; \'tisc_report.php\' "/>';


            }
        }

    }
}
else{
    if(isset($_POST['update'])) {
        $checkbox1 = $_POST['ch1'];
        $chk = "";
        foreach ($checkbox1 as $ch1) {
            $chk .= $ch1 . ",";
        }
        $sel_setting = mysqli_query($conn, "select * from report");
        if (mysqli_num_rows($sel_setting) != 1) {

            $image = $_FILES['image'];
            $image3 = $_FILES['image3'];
            $image_name = $image['name'];
            $image_name3 = $image3['name'];
            $image_tmp = $image['tmp_name'];
            $image_tmp3 = $image3['tmp_name'];
            $image_size = $image['size'];
            $image_size3 = $image3['size'];
            $image_error = $image['error'];
            $image_error3 = $image3['error'];
            //if 1 and 2 not empty

            if ($image_name != '' && $image_name3 != '') {

                $image_exe = explode('.', $image_name);
                $image_exe3 = explode('.', $image_name3);
                $image_exe = strtolower(end($image_exe));
                $image_exe3 = strtolower(end($image_exe3));


                $allowd = array('png', 'jpg', 'gif', 'jpeg' ,'docx' ,'pdf','xlsx' ,'xls');
                if (in_array($image_exe, $allowd) && in_array($image_exe3, $allowd)) {

                    if ($image_error === 0 && $image_error3 === 0) {

                        if ($image_size <= 7000000 && $image_size3 <= 7000000) {

                            $new_name = $image_name;
                            $new_name3 = $image_name3;
                            $image_dir = 'posts_images/' . $new_name;
                            $image_dir3 = 'posts_images/' . $new_name3;
                            $image_db = 'posts_images/' . $new_name;
                            $image_db3 = 'posts_images/' . $new_name3;

                            if (move_uploaded_file($image_tmp, $image_dir) && move_uploaded_file($image_tmp3, $image_dir3)) {

                                $insert = mysqli_query($conn, "INSERT INTO report(
                                                        entity_name,
                                                        num_of_workers,
                                                        name,
                                                        unit,
                                                        email,
                                                        phone,
                                                        patent_registered,
                                                        patent_granted,
                                                        patent_utility_granted,
                                                        patent_granted_utitlty,
                                                        num_visits,         
                                                        ch1,
                                                        problem_solved,
                                                        training_cources,
                                                        num_of_qualified,
                                                        num_1,
                                                        num_2,
                                                        num_3,
                                                        num_4,
                                                        num_5,
                                                        num_6,
                                                        num_7,
                                                        num_8,
                                                        num_9,
                                                        num_10,
                                                        num_11,
                                                        num_12,
                                                        num_13,
                                                        num_14,
                                                        num_15,
                                                        c_1,
                                                        c_2,
                                                        c_3,
                                                        c_4,
                                                        c_5,
                                                        c_6,
                                                        c_7,
                                                        c_8,
                                                        c_9,
                                                        c_10,
                                                        c_11,
                                                        c_12,
                                                        c_13,
                                                        c_14,
                                                        c_15,
                                                        image,
                                                        image3,
                                                        policy,
                                                        activities
                                                        ) VALUES(
                                                        '$_POST[entity_name]',
                                                        '$_POST[num_of_workers]',
                                                        '$_POST[name]',
                                                        '$_POST[unit]',
                                                        '$_POST[email]',
                                                        '$_POST[phone]',
                                                        '$_POST[patent_registered]',
                                                        '$_POST[patent_granted]',
                                                        '$_POST[patent_utility_granted]',
                                                        '$_POST[patent_granted_utitlty]',
                                                        '$_POST[num_visits]',
                                                        '$chk',
                                                        '$_POST[problem_solved]',
                                                        '$_POST[training_cources]',
                                                        '$_POST[num_of_qualified]',
                                                        '$_POST[num_1]',
                                                        '$_POST[num_2]',
                                                        '$_POST[num_3]',
                                                        '$_POST[num_4]',
                                                        '$_POST[num_5]',
                                                        '$_POST[num_6]',
                                                        '$_POST[num_7]',
                                                        '$_POST[num_8]',
                                                        '$_POST[num_9]',
                                                        '$_POST[num_10]',
                                                        '$_POST[num_11]',
                                                        '$_POST[num_12]',
                                                        '$_POST[num_13]',
                                                        '$_POST[num_14]',
                                                        '$_POST[num_15]',
                                                        '$_POST[c_1]',
                                                        '$_POST[c_2]',
                                                        '$_POST[c_3]',
                                                        '$_POST[c_4]',
                                                        '$_POST[c_5]',
                                                        '$_POST[c_6]',
                                                        '$_POST[c_7]',
                                                        '$_POST[c_8]',
                                                        '$_POST[c_9]',
                                                        '$_POST[c_10]',
                                                        '$_POST[c_11]',
                                                        '$_POST[c_12]',
                                                        '$_POST[c_13]',
                                                        '$_POST[c_14]',
                                                        '$_POST[c_15]',
                                                        '$image_db',
                                                        '$image_db3',
                                                        '$_POST[policy]',
                                                        '$_POST[activities]'
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

            elseif ($image_name != '') {
                $image_exe = explode('.', $image_name);
                $image_exe = strtolower(end($image_exe));


                $allowd = array('png', 'jpg', 'gif', 'jpeg' ,'docx' ,'pdf','xlsx' ,'xls');
                if (in_array($image_exe, $allowd)) {

                    if ($image_error === 0) {

                        if ($image_size <= 7000000) {

                            $new_name = $image_name;
                            $image_dir = 'posts_images/' . $new_name;
                            $image_db = 'posts_images/' . $new_name;

                            if (move_uploaded_file($image_tmp, $image_dir)) {

                                $insert = mysqli_query($conn, "INSERT INTO report(
                                                        entity_name,
                                                        num_of_workers,
                                                        name,
                                                        unit,
                                                        email,
                                                        phone,
                                                        patent_registered,
                                                        patent_granted,
                                                        patent_utility_granted,
                                                        patent_granted_utitlty,
                                                        num_visits,   
                                                        ch1,        
                                                        problem_solved,
                                                        training_cources,
                                                        num_of_qualified,
                                                        num_1,
                                                        num_2,
                                                        num_3,
                                                        num_4,
                                                        num_5,
                                                        num_6,
                                                        num_7,
                                                        num_8,
                                                        num_9,
                                                        num_10,
                                                        num_11,
                                                        num_12,
                                                        num_13,
                                                        num_14,
                                                        num_15,
                                                        c_1,
                                                        c_2,
                                                        c_3,
                                                        c_4,
                                                        c_5,
                                                        c_6,
                                                        c_7,
                                                        c_8,
                                                        c_9,
                                                        c_10,
                                                        c_11,
                                                        c_12,
                                                        c_13,
                                                        c_14,
                                                        c_15,
                                                        image,
                                                        
                                                        policy,
                                                        activities
                                                        ) VALUES(
                                                        '$_POST[entity_name]',
                                                        '$_POST[num_of_workers]',
                                                        '$_POST[name]',
                                                        '$_POST[unit]',
                                                        '$_POST[email]',
                                                        '$_POST[phone]',
                                                        '$_POST[patent_registered]',
                                                        '$_POST[patent_granted]',
                                                        '$_POST[patent_utility_granted]',
                                                        '$_POST[patent_granted_utitlty]',
                                                        '$_POST[num_visits]',
                                                        '$chk',
                                                        '$_POST[problem_solved]',
                                                        '$_POST[training_cources]',
                                                        '$_POST[num_of_qualified]',
                                                        '$_POST[num_1]',
                                                        '$_POST[num_2]',
                                                        '$_POST[num_3]',
                                                        '$_POST[num_4]',
                                                        '$_POST[num_5]',
                                                        '$_POST[num_6]',
                                                        '$_POST[num_7]',
                                                        '$_POST[num_8]',
                                                        '$_POST[num_9]',
                                                        '$_POST[num_10]',
                                                        '$_POST[num_11]',
                                                        '$_POST[num_12]',
                                                        '$_POST[num_13]',
                                                        '$_POST[num_14]',
                                                        '$_POST[num_15]',
                                                        '$_POST[c_1]',
                                                        '$_POST[c_2]',
                                                        '$_POST[c_3]',
                                                        '$_POST[c_4]',
                                                        '$_POST[c_5]',
                                                        '$_POST[c_6]',
                                                        '$_POST[c_7]',
                                                        '$_POST[c_8]',
                                                        '$_POST[c_9]',
                                                        '$_POST[c_10]',
                                                        '$_POST[c_11]',
                                                        '$_POST[c_12]',
                                                        '$_POST[c_13]',
                                                        '$_POST[c_14]',
                                                        '$_POST[c_15]',
                                                        '$image_db',

                                                        '$_POST[policy]',
                                                        '$_POST[activities]'
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
            } //if 1 empty but 2 not empry


            elseif ($image_name3 != '') {
                $image3 = $_FILES['image3'];
                $image_name3 = $image3['name'];
                $image_tmp3 = $image3['tmp_name'];
                $image_size3 = $image3['size'];
                $image_error3 = $image3['error'];
                $image_exe3 = explode('.', $image_name3);
                $image_exe3 = strtolower(end($image_exe3));


                $allowd = array('png', 'jpg', 'gif', 'jpeg' ,'docx' ,'pdf','xlsx' ,'xls');
                if (in_array($image_exe3, $allowd)) {

                    if ($image_error3 === 0) {

                        if ($image_size3 <= 7000000) {

                            $new_name3 = $image_name3;
                            $image_dir3 = 'posts_images/' . $new_name3;
                            $image_db3 = 'posts_images/' . $new_name3;

                            if (move_uploaded_file($image_tmp3, $image_dir3)) {

                                $insert = mysqli_query($conn, "INSERT INTO report(
                                                        entity_name,
                                                        num_of_workers,
                                                        name,
                                                        unit,
                                                        email,
                                                        phone,
                                                        patent_registered,
                                                        patent_granted,
                                                        patent_utility_granted,
                                                        patent_granted_utitlty,
                                                        num_visits,
                                                        ch1,          
                                                        problem_solved,
                                                        training_cources,
                                                        num_of_qualified,
                                                        num_1,
                                                        num_2,
                                                        num_3,
                                                        num_4,
                                                        num_5,
                                                        num_6,
                                                        num_7,
                                                        num_8,
                                                        num_9,
                                                        num_10,
                                                        num_11,
                                                        num_12,
                                                        num_13,
                                                        num_14,
                                                        num_15,
                                                        c_1,
                                                        c_2,
                                                        c_3,
                                                        c_4,
                                                        c_5,
                                                        c_6,
                                                        c_7,
                                                        c_8,
                                                        c_9,
                                                        c_10,
                                                        c_11,
                                                        c_12,
                                                        c_13,
                                                        c_14,
                                                        c_15,
                                                        
                                                        image3,
                                                        policy,
                                                        activities
                                                        ) VALUES(
                                                        '$_POST[entity_name]',
                                                        '$_POST[num_of_workers]',
                                                        '$_POST[name]',
                                                        '$_POST[unit]',
                                                        '$_POST[email]',
                                                        '$_POST[phone]',
                                                        '$_POST[patent_registered]',
                                                        '$_POST[patent_granted]',
                                                        '$_POST[patent_utility_granted]',
                                                        '$_POST[patent_granted_utitlty]',
                                                        '$_POST[num_visits]',
                                                        '$chk',
                                                        '$_POST[problem_solved]',
                                                        '$_POST[training_cources]',
                                                        '$_POST[num_of_qualified]',
                                                        '$_POST[num_1]',
                                                        '$_POST[num_2]',
                                                        '$_POST[num_3]',
                                                        '$_POST[num_4]',
                                                        '$_POST[num_5]',
                                                        '$_POST[num_6]',
                                                        '$_POST[num_7]',
                                                        '$_POST[num_8]',
                                                        '$_POST[num_9]',
                                                        '$_POST[num_10]',
                                                        '$_POST[num_11]',
                                                        '$_POST[num_12]',
                                                        '$_POST[num_13]',
                                                        '$_POST[num_14]',
                                                        '$_POST[num_15]',
                                                        '$_POST[c_1]',
                                                        '$_POST[c_2]',
                                                        '$_POST[c_3]',
                                                        '$_POST[c_4]',
                                                        '$_POST[c_5]',
                                                        '$_POST[c_6]',
                                                        '$_POST[c_7]',
                                                        '$_POST[c_8]',
                                                        '$_POST[c_9]',
                                                        '$_POST[c_10]',
                                                        '$_POST[c_11]',
                                                        '$_POST[c_12]',
                                                        '$_POST[c_13]',
                                                        '$_POST[c_14]',
                                                        '$_POST[c_15]',
                                                        
                                                        '$image_db3',
                                                        '$_POST[policy]',
                                                        '$_POST[activities]'
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
            } else {
                $insert = mysqli_query($conn, "INSERT INTO report(
                                                        entity_name,
                                                        num_of_workers,
                                                        name,
                                                        unit,
                                                        email,
                                                        phone,
                                                        patent_registered,
                                                        patent_granted,
                                                        patent_utility_granted,
                                                        patent_granted_utitlty,
                                                        num_visits,     
                                                        ch1,      
                                                        problem_solved,
                                                        training_cources,
                                                        num_of_qualified,
                                                        num_1,
                                                        num_2,
                                                        num_3,
                                                        num_4,
                                                        num_5,
                                                        num_6,
                                                        num_7,
                                                        num_8,
                                                        num_9,
                                                        num_10,
                                                        num_11,
                                                        num_12,
                                                        num_13,
                                                        num_14,
                                                        num_15,
                                                        c_1,
                                                        c_2,
                                                        c_3,
                                                        c_4,
                                                        c_5,
                                                        c_6,
                                                        c_7,
                                                        c_8,
                                                        c_9,
                                                        c_10,
                                                        c_11,
                                                        c_12,
                                                        c_13,
                                                        c_14,
                                                        c_15,

                                                        policy,
                                                        activities
                                                        ) VALUES(
                                                        '$_POST[entity_name]',
                                                        '$_POST[num_of_workers]',
                                                        '$_POST[name]',
                                                        '$_POST[unit]',
                                                        '$_POST[email]',
                                                        '$_POST[phone]',
                                                        '$_POST[patent_registered]',
                                                        '$_POST[patent_granted]',
                                                        '$_POST[patent_utility_granted]',
                                                        '$_POST[patent_granted_utitlty]',
                                                        '$_POST[num_visits]',
                                                        '$chk',
                                                        '$_POST[problem_solved]',
                                                        '$_POST[training_cources]',
                                                        '$_POST[num_of_qualified]',
                                                        '$_POST[num_1]',
                                                        '$_POST[num_2]',
                                                        '$_POST[num_3]',
                                                        '$_POST[num_4]',
                                                        '$_POST[num_5]',
                                                        '$_POST[num_6]',
                                                        '$_POST[num_7]',
                                                        '$_POST[num_8]',
                                                        '$_POST[num_9]',
                                                        '$_POST[num_10]',
                                                        '$_POST[num_11]',
                                                        '$_POST[num_12]',
                                                        '$_POST[num_13]',
                                                        '$_POST[num_14]',
                                                        '$_POST[num_15]',
                                                        '$_POST[c_1]',
                                                        '$_POST[c_2]',
                                                        '$_POST[c_3]',
                                                        '$_POST[c_4]',
                                                        '$_POST[c_5]',
                                                        '$_POST[c_6]',
                                                        '$_POST[c_7]',
                                                        '$_POST[c_8]',
                                                        '$_POST[c_9]',
                                                        '$_POST[c_10]',
                                                        '$_POST[c_11]',
                                                        '$_POST[c_12]',
                                                        '$_POST[c_13]',
                                                        '$_POST[c_14]',
                                                        '$_POST[c_15]',

                                                        '$_POST[policy]',
                                                        '$_POST[activities]'
                                            ) ");
                if (isset($insert)) {
                    $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';

                }
            }

        } else {
            $image = $_FILES['image'];
            $image3 = $_FILES['image3'];
            $image_name = $image['name'];
            $image_name3 = $image3['name'];
            $image_tmp = $image['tmp_name'];
            $image_tmp3 = $image3['tmp_name'];
            $image_size = $image['size'];
            $image_size3 = $image3['size'];
            $image_error = $image['error'];
            $image_error3 = $image3['error'];

            //if 1 and 2 not empty

            if ($image_name != '' && $image_name3 != '') {

                $image_exe = explode('.', $image_name);
                $image_exe3 = explode('.', $image_name3);
                $image_exe = strtolower(end($image_exe));
                $image_exe3 = strtolower(end($image_exe3));


                $allowd = array('png', 'jpg', 'gif', 'jpeg' ,'docx' ,'pdf','xlsx' ,'xls');
                if (in_array($image_exe, $allowd) && in_array($image_exe3, $allowd)) {

                    if ($image_error === 0 && $image_error3 === 0) {

                        if ($image_size <= 7000000 && $image_size3 <= 7000000) {

                            $new_name = $image_name;
                            $new_name3 = $image_name3;
                            $image_dir = 'posts_images/' . $new_name;
                            $image_dir3 = 'posts_images/' . $new_name3;
                            $image_db = 'posts_images/' . $new_name;
                            $image_db3 = 'posts_images/' . $new_name3;

                            if (move_uploaded_file($image_tmp, $image_dir) && move_uploaded_file($image_tmp3, $image_dir3)) {

                                $insert = mysqli_query($conn, "UPDATE report SET
                                                        entity_name ='$_POST[entity_name]',
                                                        num_of_workers ='$_POST[num_of_workers]',
                                                        name ='$_POST[name]',
                                                        unit ='$_POST[unit]',
                                                        email ='$_POST[email]',
                                                        phone = '$_POST[phone]',
                                                        patent_registered = '$_POST[patent_registered]',
                                                        patent_granted = '$_POST[patent_granted]',
                                                        patent_utility_granted =  '$_POST[patent_utility_granted]',
                                                        patent_granted_utitlty = '$_POST[patent_granted_utitlty]',
                                                        num_visits = '$_POST[num_visits]',
                                                        ch1 = '$chk',
                                                        problem_solved = '$_POST[problem_solved]',
                                                        training_cources =  '$_POST[training_cources]',
                                                        num_of_qualified = '$_POST[num_of_qualified]',
                                                        num_1 = '$_POST[num_1]',
                                                        num_2 = '$_POST[num_2]',
                                                        num_3 = '$_POST[num_3]',
                                                        num_4 = '$_POST[num_4]',
                                                        num_5 = '$_POST[num_5]',
                                                        num_6 = '$_POST[num_6]',
                                                        num_7 = '$_POST[num_7]',
                                                        num_8 = '$_POST[num_8]',
                                                        num_9 = '$_POST[num_9]',
                                                        num_10 = '$_POST[num_10]',
                                                        num_11 = '$_POST[num_11]',
                                                        num_12 = '$_POST[num_12]',
                                                        num_13 = '$_POST[num_13]',
                                                        num_14 = '$_POST[num_14]',
                                                        num_15 = '$_POST[num_15]',
                                                        c_1 = '$_POST[c_1]',
                                                        c_2 = '$_POST[c_2]',
                                                        c_3 = '$_POST[c_3]',
                                                        c_4 = '$_POST[c_4]',
                                                        c_5 = '$_POST[c_5]',
                                                        c_6 = '$_POST[c_6]',
                                                        c_7 = '$_POST[c_7]',
                                                        c_8 = '$_POST[c_8]',
                                                        c_9 = '$_POST[c_9]',
                                                        c_10 = '$_POST[c_10]',
                                                        c_11 = '$_POST[c_11]',
                                                        c_12 = '$_POST[c_12]',
                                                        c_13 = '$_POST[c_13]',
                                                        c_14 = '$_POST[c_14]',
                                                        c_15 = '$_POST[c_15]',
                                                        image = '$image_db',
                                                        image3 = '$image_db3',
                                                        policy ='$_POST[policy]',
                                                        activities = '$_POST[activities]'
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

            elseif ($image_name != '') {

                $image_exe = explode('.', $image_name);
                $image_exe = strtolower(end($image_exe));


                $allowd = array('png', 'jpg', 'gif', 'jpeg' ,'docx' ,'pdf','xlsx' ,'xls');
                if (in_array($image_exe, $allowd)) {

                    if ($image_error === 0) {

                        if ($image_size <= 7000000) {

                            $new_name = $image_name;
                            $image_dir = 'posts_images/' . $new_name;
                            $image_db = 'posts_images/' . $new_name;

                            if (move_uploaded_file($image_tmp, $image_dir)) {

                                $insert = mysqli_query($conn, "UPDATE report SET
                                                        entity_name ='$_POST[entity_name]',
                                                        num_of_workers ='$_POST[num_of_workers]',
                                                        name ='$_POST[name]',
                                                        unit ='$_POST[unit]',
                                                        email ='$_POST[email]',
                                                        phone = '$_POST[phone]',
                                                        patent_registered = '$_POST[patent_registered]',
                                                        patent_granted = '$_POST[patent_granted]',
                                                        patent_utility_granted =  '$_POST[patent_utility_granted]',
                                                        patent_granted_utitlty = '$_POST[patent_granted_utitlty]',
                                                        num_visits = '$_POST[num_visits]',
                                                        ch1 = '$chk',
                                                        problem_solved = '$_POST[problem_solved]',
                                                        training_cources =  '$_POST[training_cources]',
                                                        num_of_qualified = '$_POST[num_of_qualified]',
                                                        num_1 = '$_POST[num_1]',
                                                        num_2 = '$_POST[num_2]',
                                                        num_3 = '$_POST[num_3]',
                                                        num_4 = '$_POST[num_4]',
                                                        num_5 = '$_POST[num_5]',
                                                        num_6 = '$_POST[num_6]',
                                                        num_7 = '$_POST[num_7]',
                                                        num_8 = '$_POST[num_8]',
                                                        num_9 = '$_POST[num_9]',
                                                        num_10 = '$_POST[num_10]',
                                                        num_11 = '$_POST[num_11]',
                                                        num_12 = '$_POST[num_12]',
                                                        num_13 = '$_POST[num_13]',
                                                        num_14 = '$_POST[num_14]',
                                                        num_15 = '$_POST[num_15]',
                                                        c_1 = '$_POST[c_1]',
                                                        c_2 = '$_POST[c_2]',
                                                        c_3 = '$_POST[c_3]',
                                                        c_4 = '$_POST[c_4]',
                                                        c_5 = '$_POST[c_5]',
                                                        c_6 = '$_POST[c_6]',
                                                        c_7 = '$_POST[c_7]',
                                                        c_8 = '$_POST[c_8]',
                                                        c_9 = '$_POST[c_9]',
                                                        c_10 = '$_POST[c_10]',
                                                        c_11 = '$_POST[c_11]',
                                                        c_12 = '$_POST[c_12]',
                                                        c_13 = '$_POST[c_13]',
                                                        c_14 = '$_POST[c_14]',
                                                        c_15 = '$_POST[c_15]',
                                                        image = '$image_db',
                                                        
                                                        policy ='$_POST[policy]',
                                                        activities = '$_POST[activities]'
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
            } //if 1 empty but 2 not empty

            elseif ($image_name3 != '') {

                $image_exe3 = explode('.', $image_name3);
                $image_exe3 = strtolower(end($image_exe3));


                $allowd = array('png', 'jpg', 'gif', 'jpeg' ,'docx' ,'pdf','xlsx' ,'xls');
                if (in_array($image_exe3, $allowd)) {

                    if ($image_error3 === 0) {

                        if ($image_size3 <= 7000000) {

                            $new_name3 = $image_name3;
                            $image_dir3 = 'posts_images/' . $new_name3;
                            $image_db3 = 'posts_images/' . $new_name3;

                            if (move_uploaded_file($image_tmp3, $image_dir3)) {

                                $insert = mysqli_query($conn, "UPDATE report SET
                                                        entity_name ='$_POST[entity_name]',
                                                        num_of_workers ='$_POST[num_of_workers]',
                                                        name ='$_POST[name]',
                                                        unit ='$_POST[unit]',
                                                        email ='$_POST[email]',
                                                        phone = '$_POST[phone]',
                                                        patent_registered = '$_POST[patent_registered]',
                                                        patent_granted = '$_POST[patent_granted]',
                                                        patent_utility_granted =  '$_POST[patent_utility_granted]',
                                                        patent_granted_utitlty = '$_POST[patent_granted_utitlty]',
                                                        num_visits = '$_POST[num_visits]',
                                                        ch1 = '$chk',
                                                        problem_solved = '$_POST[problem_solved]',
                                                        training_cources =  '$_POST[training_cources]',
                                                        num_of_qualified = '$_POST[num_of_qualified]',
                                                        num_1 = '$_POST[num_1]',
                                                        num_2 = '$_POST[num_2]',
                                                        num_3 = '$_POST[num_3]',
                                                        num_4 = '$_POST[num_4]',
                                                        num_5 = '$_POST[num_5]',
                                                        num_6 = '$_POST[num_6]',
                                                        num_7 = '$_POST[num_7]',
                                                        num_8 = '$_POST[num_8]',
                                                        num_9 = '$_POST[num_9]',
                                                        num_10 = '$_POST[num_10]',
                                                        num_11 = '$_POST[num_11]',
                                                        num_12 = '$_POST[num_12]',
                                                        num_13 = '$_POST[num_13]',
                                                        num_14 = '$_POST[num_14]',
                                                        num_15 = '$_POST[num_15]',
                                                        c_1 = '$_POST[c_1]',
                                                        c_2 = '$_POST[c_2]',
                                                        c_3 = '$_POST[c_3]',
                                                        c_4 = '$_POST[c_4]',
                                                        c_5 = '$_POST[c_5]',
                                                        c_6 = '$_POST[c_6]',
                                                        c_7 = '$_POST[c_7]',
                                                        c_8 = '$_POST[c_8]',
                                                        c_9 = '$_POST[c_9]',
                                                        c_10 = '$_POST[c_10]',
                                                        c_11 = '$_POST[c_11]',
                                                        c_12 = '$_POST[c_12]',
                                                        c_13 = '$_POST[c_13]',
                                                        c_14 = '$_POST[c_14]',
                                                        c_15 = '$_POST[c_15]',
                                                        image3 = '$image_db3',
                                                        policy ='$_POST[policy]',
                                                        activities = '$_POST[activities]'
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
            } else {
                $insert = mysqli_query($conn, "UPDATE report SET
                                                        entity_name ='$_POST[entity_name]',
                                                        num_of_workers ='$_POST[num_of_workers]',
                                                        name ='$_POST[name]',
                                                        unit ='$_POST[unit]',
                                                        email ='$_POST[email]',
                                                        phone = '$_POST[phone]',
                                                        patent_registered = '$_POST[patent_registered]',
                                                        patent_granted = '$_POST[patent_granted]',
                                                        patent_utility_granted =  '$_POST[patent_utility_granted]',
                                                        patent_granted_utitlty = '$_POST[patent_granted_utitlty]',
                                                        num_visits = '$_POST[num_visits]',
                                                        ch1 = '$chk',
                                                        problem_solved = '$_POST[problem_solved]',
                                                        training_cources =  '$_POST[training_cources]',
                                                        num_of_qualified = '$_POST[num_of_qualified]',
                                                        num_1 = '$_POST[num_1]',
                                                        num_2 = '$_POST[num_2]',
                                                        num_3 = '$_POST[num_3]',
                                                        num_4 = '$_POST[num_4]',
                                                        num_5 = '$_POST[num_5]',
                                                        num_6 = '$_POST[num_6]',
                                                        num_7 = '$_POST[num_7]',
                                                        num_8 = '$_POST[num_8]',
                                                        num_9 = '$_POST[num_9]',
                                                        num_10 = '$_POST[num_10]',
                                                        num_11 = '$_POST[num_11]',
                                                        num_12 = '$_POST[num_12]',
                                                        num_13 = '$_POST[num_13]',
                                                        num_14 = '$_POST[num_14]',
                                                        num_15 = '$_POST[num_15]',
                                                        c_1 = '$_POST[c_1]',
                                                        c_2 = '$_POST[c_2]',
                                                        c_3 = '$_POST[c_3]',
                                                        c_4 = '$_POST[c_4]',
                                                        c_5 = '$_POST[c_5]',
                                                        c_6 = '$_POST[c_6]',
                                                        c_7 = '$_POST[c_7]',
                                                        c_8 = '$_POST[c_8]',
                                                        c_9 = '$_POST[c_9]',
                                                        c_10 = '$_POST[c_10]',
                                                        c_11 = '$_POST[c_11]',
                                                        c_12 = '$_POST[c_12]',
                                                        c_13 = '$_POST[c_13]',
                                                        c_14 = '$_POST[c_14]',
                                                        c_15 = '$_POST[c_15]',


                                                        policy ='$_POST[policy]',
                                                        activities = '$_POST[activities]'
                                                    ");
                if (isset($insert)) {
                    $msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';


                }
            }

        }
    }
}

$sel_setting = mysqli_query($conn,"SELECT * FROM report");
$setting = mysqli_fetch_assoc($sel_setting);
$checked = 'checked="checked"';

?>

    <article class="col-lg-8">
        <?php echo $msg; ?>
        <div class="panel panel-info">

            <div class="panel-heading"><b>تقرير عام لمكتب ال T.I.S.C</b></div>
            <div class="panel-body">

                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="image3" class="col-sm-2 control-label">لوجو المكتب</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control"  name="image3" id="image3" value="">
                        </div>
                        <div class="col-sm-4">
                            <p><?php echo ($setting['image3']=='' ? '' : explode('posts_images/',$setting['image3'])[1]) ?></p>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th colspan="4" class="text-center" style="color:white;background-color: #63b0c8">نموذج تقييم مركز دعم الإبتكار والملكية الفكرية  TISC  </th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" style="background-color: #e4f1f7" ><strong>1&ensp;&ensp;&ensp;</strong>اسم الجهة التابع لها : </th>
                            <td colspan="3" class="text-center" style="background-color: #e4f1f7">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo ($setting['entity_name']=='' ? '' : $setting['entity_name']) ?>" name="entity_name" id="entity_name" placeholder="">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><strong>2&ensp;&ensp;&ensp;</strong>عدد العاملين : </th>
                            <td colspan="3" class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" value="<?php echo ($setting['num_of_workers']=='' ? '' : $setting['num_of_workers']) ?>" name="num_of_workers" id="num_of_workers">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">&ensp; الاسم</th>
                            <td class="text-center">الوحدة</td>
                            <td class="text-center">البريد الالكتروني</td>
                            <td class="text-center">التليفون</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo ($setting['name']=='' ? '' : $setting['name']) ?>" name="name" id="name" placeholder="">
                                    </div>
                                </div>
                            </th>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo ($setting['unit']=='' ? '' : $setting['unit']) ?>" name="unit" id="unit" placeholder="">
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" value="<?php echo ($setting['email']=='' ? '' : $setting['email']) ?>" name="email" id="email" placeholder="">
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" value="<?php echo ($setting['phone']=='' ? '' : $setting['phone']) ?>" name="phone" id="phone">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>

                        </thead>
                        <tbody>
                        <?php
                        $query_1 = mysqli_query($conn,"select * from patents");
                        $patent_registered = mysqli_fetch_all($query_1);
                        $query_2 = mysqli_query($conn,"select * from patents where category ='ايداع'");
                        $patent_granted = mysqli_fetch_all($query_2);
                        $query_3 = mysqli_query($conn,"select * from patents where category ='ممنوحة'");
                        $patent_utility_granted = mysqli_fetch_all($query_3);
                        $query_4 = mysqli_query($conn,"select * from patents where category ='سقط بالملك العام'");
                        $patent_granted_utitlty = mysqli_fetch_all($query_4);
                        ?>
                        <tr>
                            <th scope="row" style="background-color: #e4f1f7" ><strong>3&ensp;&ensp;&ensp;</strong>عدد طلبات براءات الاختراع المسجلة :  </th>
                            <td colspan="3" class="text-center" style="background-color: #e4f1f7">
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control" value="<?php echo count($patent_registered); ?>" name="patent_registered" id="patent_registered">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><strong>4&ensp;&ensp;&ensp;</strong>عدد براءات الاختراع الممنوحة : </th>
                            <td colspan="3" class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control" value="<?php echo count($patent_granted) ?>" name="patent_granted" id="patent_granted">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #e4f1f7" ><strong>5&ensp;&ensp;&ensp;</strong>عدد طلبات نماذج المنفعة المسجلة: :  </th>
                            <td colspan="3" class="text-center" style="background-color: #e4f1f7">
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control" value="<?php echo count($patent_utility_granted) ?>" name="patent_utility_granted" id="patent_utility_granted">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><strong>6&ensp;&ensp;&ensp;</strong>عدد نماذج المنفعة الممنوحة : </th>
                            <td colspan="3" class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control" value="<?php echo count($patent_granted_utitlty) ?>" name="patent_granted_utitlty" id="patent_granted_utitlty">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #e4f1f7" ><strong>7&ensp;&ensp;&ensp;</strong>متوسط عدد الزيارات شهريا ً:   </th>
                            <td colspan="3" class="text-center" style="background-color: #e4f1f7">
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" value="<?php echo ($setting['num_visits']=='' ? '' : $setting['num_visits']) ?>" name="num_visits" id="num_visits">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th colspan="4"  ><strong>8&ensp;&ensp;&ensp;</strong> ما هي خدمات TISC التي تقدمها؟   </th>
                        </tr>
                        <tr>
                            <th colspan="4" >
                                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; الوصول إلى قواعد البيانات المتعلقة بالبراءات وغير البراءات</strong>&nbsp;&ensp;&ensp;&ensp;&ensp;
                                <div class="form-check text-center">
                                    <input class="form-check-input position-static" type="checkbox" id="ch1" name="ch1[]" value="ch1" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch1') !==false ? $checked : '') ; ?> />
                                </div>
                                </p>
                                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; المساعدة والمشورة في استخدام قواعد البيانات</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <div class="form-check text-center">
                                    <input class="form-check-input position-static" type="checkbox" id="ch2" name="ch1[]" value="ch2" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch2') !==false ? $checked : '') ; ?>>
                                </div>
                                </p>
                                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull;بحث في الفن السابق</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <div class="form-check text-center">
                                    <input class="form-check-input position-static" type="checkbox" id="ch3" name="ch1[]" value="ch3" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch3') !==false ? $checked : '') ; ?>>
                                </div>
                                </p>
                                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull;بحث عن الجدة والخطوة الإبداعية لبراءات الاختراع</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;               <div class="form-check text-center">
                                    <input class="form-check-input position-static" type="checkbox" id="ch4" name="ch1[]" value="ch4" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch4') !==false ? $checked : '') ; ?>>
                                </div>
                                </p>
                                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull;بحث عن  حرية الاستخدام</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <div class="form-check text-center">
                                    <input class="form-check-input position-static" type="checkbox" id="ch5" value="ch5" name="ch1[]" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch5') !==false ? $checked : '') ; ?>>
                                </div>
                                </p>
                                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; تحليل براءات الاختراع</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <div class="form-check text-center">
                                    <input class="form-check-input position-static" type="checkbox" id="ch6" value="ch6" name="ch1[]" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch6') !==false ? $checked : '') ; ?>>
                                </div>
                                </p>
                                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull;المساعدة والمشورة بشأن إدارة الملكية الفكرية </strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <div class="form-check text-center">
                                    <input class="form-check-input position-static" type="checkbox" id="ch7" value="ch7" name="ch1[]" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch7') !==false ? $checked : '') ; ?>>
                                </div>
                                </p>
                                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; (الترخيص ونقل التكنولوجيا)   </strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <div class="form-check text-center">
                                    <input class="form-check-input position-static" type="checkbox" id="ch8" name="ch1[]" value="ch8" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch8') !==false ? $checked : '') ; ?>>
                                </div>
                                </p>
                                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; صياغة براءات <الاختراع></الاختراع></strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <div class="form-check text-center">
                                    <input class="form-check-input position-static" type="checkbox" id="ch9" name="ch1[]" value="ch9" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch9') !==false ? $checked : '') ; ?>>
                                </div>
                                </p>
                            </th>
                        </tr>
                        <tr style="background-color: #e4f1f7">
                            <th scope="row">&ensp; 9</th>
                            <td class="text-center">ما هي المشكلات التكنولوجية التي ساعد المكتب في حلها؟</td>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea rows="9" cols="70" class="form-control"  name="problem_solved" id="problem_solved"><?php echo ($setting['problem_solved']=='' ? '' : $setting['problem_solved']) ?></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">&ensp; 10</th>
                            <td class="text-center">الدورات التدريبية التي حصل عليها العاملين:</td>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea rows="9" cols="70" class="form-control"  name="training_cources" id="training_cources"><?php echo ($setting['training_cources']=='' ? '' : $setting['training_cources']) ?></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <tbody>
                        <tr style="background-color: #e4f1f7">
                            <th scope="row">&ensp; 11</th>
                            <td class="text-center">عدد العاملين الحاصلين على دورات التعليم عن بعد المقدمة من المنظمة العالمية للملكية الفكرية</td>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" value="<?php echo ($setting['num_of_qualified']=='' ? '' : $setting['num_of_qualified']) ?>" name="num_of_qualified" id="num_of_qualified">
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">مسجل</td>
                            <td class="text-center">اجتاز</td>
                            <td class="text-center">
                                <div class="form-group">

                                    <div class="col-sm-6">
                                        <input type="file" class="form-control"  name="image" id="image">
                                    </div>
                                    <div class="col-sm-4">
                                        <?php
                                        echo '
                                       
                                        <p>'.($setting['image']=='' ? '' : explode('posts_images/',$setting['image'])[1]).'</p>
                                        <p style="font-size: 15px;font-weight: bold"><a href="'.$setting['image'].'" target="_blank">الاطلاع علي المرفق</a></p>
                                        ';
                                        ?>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr style="background-color: #e4f1f7">
                            <th scope="row"></th>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo ($setting['c_1']=='' ? '' : $setting['c_1']) ?>" name="c_1" id="c_1" placeholder="">
                                    </div>
                                </div>
                            </td>
                            <div class="form-check">
                                <td>
                                    <div class="form-group">
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" value="<?php echo ($setting['num_1']=='' ? '' : $setting['num_1']) ?>" name="num_1" id="num_1">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch10" value="ch10" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch10') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch11" value="ch11" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch11') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>
                            </div>

                            <td style="background-color: white">
                                <span id="btnAdd1" class="glyphicon glyphicon-plus"></span>
                            </td>
                        </tr>
                        <script>
                            $(function() {
                                $('#btnAdd1').click(function() {
                                    $('.td1').toggle();
                                });
                            });
                        </script>
                        <tr class="td1" id="td1" style="<?php echo (empty($setting['c_2']) ? 'display:none' : '')?>;background-color: #e4f1f7">
                            <th scope="row"></th>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo ($setting['c_2']=='' ? '' : $setting['c_2']) ?>" name="c_2" id="c_2" placeholder="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" value="<?php echo ($setting['num_2']=='' ? '' : $setting['num_2']) ?>" name="num_2" id="num_2">
                                    </div>
                                </div>
                            </td>
                            <div class="form-check">
                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch12" value="ch12" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch12') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch13" value="ch13" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch13') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>
                            </div>
                            <td style="background-color: white"><span id="btnAdd2" class="glyphicon glyphicon-plus"></span></td>
                        </tr>
                        <script>
                            $(function() {
                                $('#btnAdd2').click(function() {
                                    $('.td2').toggle();
                                });
                            });
                        </script>
                        <tr class="td2" id="td2" style="<?php echo (empty($setting['c_3']) ? 'display:none' : '')?>;background-color: #e4f1f7">
                            <th scope="row"></th>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo ($setting['c_3']=='' ? '' : $setting['c_3']) ?>" name="c_3" id="c_3" placeholder="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" value="<?php echo ($setting['num_3']=='' ? '' : $setting['num_3']) ?>" name="num_3" id="num_3">
                                    </div>
                                </div>
                            </td>
                            <div class="form-check">
                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch14" value="ch14" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch14') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch15" value="ch15" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch15') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>
                            </div>
                            <td style="background-color: white"><span id="btnAdd3" class="glyphicon glyphicon-plus"></span></td>
                        </tr>
                        <script>
                            $(function() {
                                $('#btnAdd3').click(function() {
                                    $('.td3').toggle();
                                });
                            });
                        </script>
                        <tr class="td3" id="td3" style="<?php echo (empty($setting['c_4']) ? 'display:none' : '')?>;background-color: #e4f1f7">
                            <th scope="row"></th>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo ($setting['c_4']=='' ? '' : $setting['c_4']) ?>" name="c_4" id="c_4" placeholder="">
                                    </div>
                                </div>
                            </td>
                            <div class="form-check">
                                <td>
                                    <div class="form-group">
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" value="<?php echo ($setting['num_4']=='' ? '' : $setting['num_4']) ?>" name="num_4" id="num_4">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch16" value="ch16" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch16') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch17" value="ch17" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch17') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>
                            </div>
                            <td style="background-color: white"><span id="btnAdd4" class="glyphicon glyphicon-plus"></span></td>
                        </tr>
                        <script>
                            $(function() {
                                $('#btnAdd4').click(function() {
                                    $('.td4').toggle();
                                });
                            });
                        </script>
                        <tr class="td4" id="td4" style="<?php echo (empty($setting['c_5']) ? 'display:none' : '')?>;background-color: #e4f1f7">
                            <th scope="row"></th>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo ($setting['c_5']=='' ? '' : $setting['c_5']) ?>" name="c_5" id="c_5" placeholder="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" value="<?php echo ($setting['num_5']=='' ? '' : $setting['num_5']) ?>" name="num_5" id="num_5">
                                    </div>
                                </div>
                            </td>
                            <div class="form-check">
                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch18" value="ch18" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch18') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch19" value="ch19" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch19') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>
                            </div>
                            <td style="background-color: white"><span id="btnAdd5" class="glyphicon glyphicon-plus"></span></td>
                        </tr>
                        <script>
                            $(function() {
                                $('#btnAdd5').click(function() {
                                    $('.td5').toggle();
                                });
                            });
                        </script>
                        <tr class="td5" id="td5" style="<?php echo (empty($setting['c_6']) ? 'display:none' : '')?>;background-color: #e4f1f7">
                            <th scope="row"></th>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo ($setting['c_6']=='' ? '' : $setting['c_6']) ?>" name="c_6" id="c_6" placeholder="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" value="<?php echo ($setting['num_6']=='' ? '' : $setting['num_6']) ?>" name="num_6" id="num_6">
                                    </div>
                                </div>
                            </td>
                            <div class="form-check">
                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch20" value="ch20" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch20') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch21" value="ch21" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch21') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>
                            </div>

                            <td style="background-color: white"><span id="btnAdd6" class="glyphicon glyphicon-plus"></span></td>
                        </tr>
                        <script>
                            $(function() {
                                $('#btnAdd6').click(function() {
                                    $('.td6').toggle();
                                });
                            });
                        </script>

                        <tr class="td6" id="td6" style="<?php echo (empty($setting['c_7']) ? 'display:none' : '')?>;background-color: #e4f1f7">
                            <th scope="row"></th>
                            <td class="text-center">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo ($setting['c_7']=='' ? '' : $setting['c_7']) ?>" name="c_7" id="c_7" placeholder="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" value="<?php echo ($setting['num_7']=='' ? '' : $setting['num_7']) ?>" name="num_7" id="num_7">
                                    </div>
                                </div>
                            </td>
                            <div class="form-check">
                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch22" value="ch22" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch22') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check text-center">
                                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch23" value="ch23" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch23') !==false ? $checked : '') ; ?>>
                                    </div>
                                </td>
                            </div>
            </div>
            <td style="background-color: white"><span id="btnAdd7" class="glyphicon glyphicon-plus"></span></td>
            </tr>
            <script>
                $(function() {
                    $('#btnAdd7').click(function() {
                        $('.td7').toggle();
                    });
                });
            </script>
            <tr class="td7" id="td7" style="<?php echo (empty($setting['c_8']) ? 'display:none' : '')?>;background-color: #e4f1f7">
                <th scope="row"></th>
                <td class="text-center">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo ($setting['c_8']=='' ? '' : $setting['c_8']) ?>" name="c_8" id="c_8" placeholder="">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <input type="number" class="form-control" value="<?php echo ($setting['num_8']=='' ? '' : $setting['num_8']) ?>" name="num_8" id="num_8">
                        </div>
                    </div>
                </td>
                <div class="form-check">
                    <td class="text-center">
                        <div class="form-check text-center">
                            <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch24" value="ch24" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch24') !==false ? $checked : '') ; ?>>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="form-check text-center">
                            <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch25" value="ch25" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch25') !==false ? $checked : '') ; ?>>
                        </div>
                    </td>
                </div>

        </div>
        <td style="background-color: white"><span id="btnAdd8" class="glyphicon glyphicon-plus"></span></td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd8').click(function() {
                    $('.td8').toggle();
                });
            });
        </script>
        <tr class="td8" id="td8" style="<?php echo (empty($setting['c_9']) ? 'display:none' : '')?>;background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo ($setting['c_9']=='' ? '' : $setting['c_9']) ?>" name="c_9" id="c_9" placeholder="">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="<?php echo ($setting['num_9']=='' ? '' : $setting['num_9']) ?>" name="num_9" id="num_9">
                    </div>
                </div>
            </td>
            <div class="form-check">
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch26" value="ch26" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch26') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch27" value="ch27" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch27') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
            </div>

            </div>
            <td style="background-color: white"><span id="btnAdd9" class="glyphicon glyphicon-plus"></span></td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd9').click(function() {
                    $('.td9').toggle();
                });
            });
        </script>
        <tr class="td9" id="td9" style="<?php echo (empty($setting['c_10']) ? 'display:none' : '')?>;background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo ($setting['c_10']=='' ? '' : $setting['c_10']) ?>" name="c_10" id="c_10" placeholder="">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="<?php echo ($setting['num_10']=='' ? '' : $setting['num_10']) ?>" name="num_10" id="num_10">
                    </div>
                </div>
            </td>
            <div class="form-check">
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch28" value="ch28" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch28') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch29" value="ch29" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch29') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
            </div>
            </div>
            <td style="background-color: white"><span id="btnAdd10" class="glyphicon glyphicon-plus"></span></td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd10').click(function() {
                    $('.td10').toggle();
                });
            });
        </script>
        <tr class="td10" id="td10" style="<?php echo (empty($setting['c_11']) ? 'display:none' : '')?>;background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo ($setting['c_11']=='' ? '' : $setting['c_11']) ?>" name="c_11" id="c_11" placeholder="">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="<?php echo ($setting['num_11']=='' ? '' : $setting['num_11']) ?>" name="num_11" id="num_11">
                    </div>
                </div>
            </td>
            <div class="form-check">
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch30" value="ch30" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch30') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch31" value="ch31" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch31') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
            </div>

            </div>
            <td style="background-color: white"><span id="btnAdd11" class="glyphicon glyphicon-plus"></span></td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd11').click(function() {
                    $('.td11').toggle();
                });
            });
        </script>
        <tr class="td11" id="td11" style="<?php echo (empty($setting['c_12']) ? 'display:none' : '')?>;background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo ($setting['c_12']=='' ? '' : $setting['c_12']) ?>" name="c_12" id="c_12" placeholder="">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="<?php echo ($setting['num_12']=='' ? '' : $setting['num_12']) ?>" name="num_12" id="num_12">
                    </div>
                </div>
            </td>
            <div class="form-check">
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch32" value="ch32" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch32') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch33" value="ch33" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch33') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
            </div>
            </div>
            <td style="background-color: white"><span id="btnAdd12" class="glyphicon glyphicon-plus"></span></td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd12').click(function() {
                    $('.td12').toggle();
                });
            });
        </script>
        <tr class="td12" id="td12" style="<?php echo (empty($setting['c_13']) ? 'display:none' : '')?>;background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo ($setting['c_13']=='' ? '' : $setting['c_13']) ?>" name="c_13" id="c_13" placeholder="">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="<?php echo ($setting['num_13']=='' ? '' : $setting['num_13']) ?>" name="num_13" id="num_13">
                    </div>
                </div>
            </td>
            <div class="form-check">
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch34" value="ch34" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch34') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch35" value="ch35" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch35') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
            </div>
            </div>
            <td style="background-color: white"><span id="btnAdd13" class="glyphicon glyphicon-plus"></span></td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd13').click(function() {
                    $('.td13').toggle();
                });
            });
        </script>
        <tr class="td13" id="td13" style="<?php echo (empty($setting['c_14']) ? 'display:none' : '')?>;background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo ($setting['c_14']=='' ? '' : $setting['c_14']) ?>" name="c_14" id="c_14" placeholder="">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="<?php echo ($setting['num_14']=='' ? '' : $setting['num_14']) ?>" name="num_14" id="num_14">
                    </div>
                </div>
            </td>
            <div class="form-check">
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch36" value="ch36" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch36') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch37" value="ch37" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch37') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
            </div>
            </div>
            <td style="background-color: white"><span id="btnAdd14" class="glyphicon glyphicon-plus"></span></td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd14').click(function() {
                    $('.td14').toggle();
                });
            });
        </script>
        <tr class="td14" id="td14" style="<?php echo (empty($setting['c_15']) ? 'display:none' : '')?>;background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo ($setting['c_15']=='' ? '' : $setting['c_15']) ?>" name="c_15" id="c_15" placeholder="">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="<?php echo ($setting['num_15']=='' ? '' : $setting['num_15']) ?>" name="num_15" id="num_15">
                    </div>
                </div>
            </td>
            <div class="form-check">
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch38" value="ch38" aria-label="..."<?php echo (strpos($setting['ch1'] , 'ch38') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
                <td class="text-center">
                    <div class="form-check text-center">
                        <input class="form-check-input position-static" type="checkbox" name="ch1[]" id="ch39" value="ch39" aria-label="..." <?php echo (strpos($setting['ch1'] , 'ch39') !==false ? $checked : '') ; ?>>
                    </div>
                </td>
            </div>

        </tr>
        </div>

        </tbody>
        </table>

        <table class="table table-bordered">
            <tbody>
            <tr>
                <th scope="row">&ensp; 12</th>
                <td class="text-center">هل تم وضع سياسة الملكية الفكرية؟</td>
                <td class="text-center">نعم</td>
                <td class="text-center">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea rows="9" cols="70" class="form-control"  name="policy" id="policy"><?php echo ($setting['policy']=='' ? '' : $setting['policy']) ?></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <th scope="row">&ensp; 13</th>
            <td colspan="2" class="text-center">ما هي الأنشطة التي قام بها المكتب لنشر الوعي بحقوق الملكية الفكرية؟</td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="70" class="form-control"  name="activities" id="activities"><?php echo ($setting['activities']=='' ? '' : $setting['activities']) ?></textarea>
                    </div>
                </div>
            </td>
            </tr>
            </tbody>
        </table>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <a href="tisc_report.php">
                    <button type="submit" name="submit" class="btn btn-danger">طباعة التقرير</button>
                </a>
                <button type="update" name="update" class="btn btn-primary" style="margin-right: 30px">تحديث البيانات</button>
            </div>
        </div>
        </form>
        </div>
        </div>
    </article>


<?php

include_once("inc/footer.php");

?>