<?php

include_once("inc/header.php");
if(!isset($_SESSION['username'])){
header("location:../form.php");
}
include_once("inc/sidebar.php");
include_once("../connect.php");

if(isset($_GET['target'])){

    if($_GET['target'] == 'attach_1') {
        $sql = mysqli_query($conn, "UPDATE gico_report SET attach_1 = '' WHERE report_id = 1");
        if ($sql) {
            echo '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
        }
    }
    if($_GET['target'] == 'attach_2'){
        $sql =mysqli_query($conn, "UPDATE gico_report SET attach_2 = '' WHERE report_id = 1");
        if($sql){
            echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
        }
    }
        if($_GET['target'] == 'attach_3') {
            $sql = mysqli_query($conn, "UPDATE gico_report SET attach_3 = '' WHERE report_id = 1");
            if ($sql) {
                echo '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_4'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_4 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_5'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_5 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_6'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_6 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_7'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_7 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_8'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_8 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_9'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_9 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_10'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_10 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_11'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_11 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_12'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_12 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_13'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_13 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_14'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_14 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_15'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_15 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_16'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_16 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_17'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_17 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_18'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_18 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }if($_GET['target'] == 'attach_19'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_19 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
        if($_GET['target'] == 'attach_20'){
            $sql =mysqli_query($conn, "UPDATE gico_report SET attach_20 = '' WHERE report_id = 1");
            if($sql){
                echo  '<meta http-equiv="refresh" content="0; \'public_report.php\' "/>';
            }
        }
}


$msg='';

if(isset($_POST['submit'])) {

$sel_setting = mysqli_query($conn, "select * from gico_report");
if (mysqli_num_rows($sel_setting) != 1) {
$insert = mysqli_query($conn, "INSERT INTO `gico_report`(`report_id`, `title_1`, `title_2`, `title_3`, `title_4`, `title_5`, `title_6`, `title_7`, `title_8`, `title_9`, `title_10`, `title_11`, `title_12`, `title_13`, `title_14`, `title_15`, `title_16`, `title_17`, `title_18`, `title_19`, `title_20`, `text_1`, `text_2`, `text_3`, `text_4`, `text_5`, `text_6`, `text_7`, `text_8`, `text_9`, `text_10`, `text_11`, `text_12`, `text_13`, `text_14`, `text_15`, `text_16`, `text_17`, `text_18`, `text_19`, `text_20`)
                                                            VALUES (1,
                                                            '$_POST[title_1]',
                                                            '$_POST[title_2]',
                                                            '$_POST[title_3]',
                                                            '$_POST[title_4]',
                                                            '$_POST[title_5]',
                                                            '$_POST[title_6]',
                                                            '$_POST[title_7]',
                                                            '$_POST[title_8]',
                                                            '$_POST[title_9]',
                                                            '$_POST[title_10]',
                                                            '$_POST[title_11]',
                                                            '$_POST[title_12]',
                                                            '$_POST[title_13]',
                                                            '$_POST[title_14]',
                                                            '$_POST[title_15]',
                                                            '$_POST[title_16]',
                                                            '$_POST[title_17]',
                                                            '$_POST[title_18]',
                                                            '$_POST[title_19]',
                                                            '$_POST[title_20]',
                                                            '$_POST[text_1]',
                                                            '$_POST[text_2]',
                                                            '$_POST[text_3]',
                                                            '$_POST[text_4]',
                                                            '$_POST[text_5]',
                                                            '$_POST[text_6]',
                                                            '$_POST[text_7]',
                                                            '$_POST[text_8]',
                                                            '$_POST[text_9]',
                                                            '$_POST[text_10]',
                                                            '$_POST[text_11]',
                                                            '$_POST[text_12]',
                                                            '$_POST[text_13]',
                                                            '$_POST[text_14]',
                                                            '$_POST[text_15]',
                                                            '$_POST[text_16]',
                                                            '$_POST[text_17]',
                                                            '$_POST[text_18]',
                                                            '$_POST[text_19]',
                                                            '$_POST[text_20]'
                                                            ) ");


if (isset($insert)) {
$msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';
echo '<meta http-equiv="refresh" content="2; \'tisc_report.php\' "/>';

}


} else {
$insert = mysqli_query($conn, "UPDATE gico_report SET
                                        report_id = 1,
                                        title_1 = '$_POST[title_1]',
                                        title_2 = '$_POST[title_2]',
                                        title_3 = '$_POST[title_3]',
                                        title_4 = '$_POST[title_4]',
                                        title_5 = '$_POST[title_5]',
                                        title_6 = '$_POST[title_6]',
                                        title_7 = '$_POST[title_7]',
                                        title_8 = '$_POST[title_8]',
                                        title_9 = '$_POST[title_9]',
                                        title_10 = '$_POST[title_10]',
                                        title_11 = '$_POST[title_11]',
                                        title_12 = '$_POST[title_12]',
                                        title_13 = '$_POST[title_13]',
                                        title_14 = '$_POST[title_14]',
                                        title_15 = '$_POST[title_15]',
                                        title_16 = '$_POST[title_16]',
                                        title_17 = '$_POST[title_17]',
                                        title_18 = '$_POST[title_18]',
                                        title_19 = '$_POST[title_19]',
                                        title_20 = '$_POST[title_20]',
                                        text_1 = '$_POST[text_1]',
                                        text_2 = '$_POST[text_2]',
                                        text_3 = '$_POST[text_3]',
                                        text_4 = '$_POST[text_4]',
                                        text_5 = '$_POST[text_5]',
                                        text_6 = '$_POST[text_6]',
                                        text_7 = '$_POST[text_7]',
                                        text_8 = '$_POST[text_8]',
                                        text_9 = '$_POST[text_9]',
                                        text_10 = '$_POST[text_10]',
                                        text_11 = '$_POST[text_11]',
                                        text_12 = '$_POST[text_12]',
                                        text_13 = '$_POST[text_13]',
                                        text_14 = '$_POST[text_14]',
                                        text_15 = '$_POST[text_15]',
                                        text_16 = '$_POST[text_16]',
                                        text_17 = '$_POST[text_17]',
                                        text_18 = '$_POST[text_18]',
                                        text_19 = '$_POST[text_19]',
                                        text_20 = '$_POST[text_20]'
                                       
                                    ");
if (isset($insert)) {
$msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';
echo '<meta http-equiv="refresh" content="2; \'tisc_report.php\' "/>';


}
}
}
if(isset($_POST['update'])) {

$sel_setting = mysqli_query($conn, "select * from gico_report");
if (mysqli_num_rows($sel_setting) != 1) {

    $insert = mysqli_query($conn, "INSERT INTO `gico_report`(`title_1`, `title_2`, `title_3`, `title_4`, `title_5`, `title_6`, `title_7`, `title_8`, `title_9`, `title_10`, `title_11`, `title_12`, `title_13`, `title_14`, `title_15`, `title_16`, `title_17`, `title_18`, `title_19`, `title_20`, `text_1`, `text_2`, `text_3`, `text_4`, `text_5`, `text_6`, `text_7`, `text_8`, `text_9`, `text_10`, `text_11`, `text_12`, `text_13`, `text_14`, `text_15`, `text_16`, `text_17`, `text_18`, `text_19`, `text_20`)
                                                            VALUES (
                                                            '$_POST[title_1]',
                                                            '$_POST[title_2]',
                                                            '$_POST[title_3]',
                                                            '$_POST[title_4]',
                                                            '$_POST[title_5]',
                                                            '$_POST[title_6]',
                                                            '$_POST[title_7]',
                                                            '$_POST[title_8]',
                                                            '$_POST[title_9]',
                                                            '$_POST[title_10]',
                                                            '$_POST[title_11]',
                                                            '$_POST[title_12]',
                                                            '$_POST[title_13]',
                                                            '$_POST[title_14]',
                                                            '$_POST[title_15]',
                                                            '$_POST[title_16]',
                                                            '$_POST[title_17]',
                                                            '$_POST[title_18]',
                                                            '$_POST[title_19]',
                                                            '$_POST[title_20]',
                                                            '$_POST[text_1]',
                                                            '$_POST[text_2]',
                                                            '$_POST[text_3]',
                                                            '$_POST[text_4]',
                                                            '$_POST[text_5]',
                                                            '$_POST[text_6]',
                                                            '$_POST[text_7]',
                                                            '$_POST[text_8]',
                                                            '$_POST[text_9]',
                                                            '$_POST[text_10]',
                                                            '$_POST[text_11]',
                                                            '$_POST[text_12]',
                                                            '$_POST[text_13]',
                                                            '$_POST[text_14]',
                                                            '$_POST[text_15]',
                                                            '$_POST[text_16]',
                                                            '$_POST[text_17]',
                                                            '$_POST[text_18]',
                                                            '$_POST[text_19]',
                                                            '$_POST[text_20]'
                                                            ) ");

if (isset($insert)) {
$msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';

}


} else {
$insert = mysqli_query($conn, "UPDATE gico_report SET
                                        report_id = 1,
                                        title_1 = '$_POST[title_1]',
                                        title_2 = '$_POST[title_2]',
                                        title_3 = '$_POST[title_3]',
                                        title_4 = '$_POST[title_4]',
                                        title_5 = '$_POST[title_5]',
                                        title_6 = '$_POST[title_6]',
                                        title_7 = '$_POST[title_7]',
                                        title_8 = '$_POST[title_8]',
                                        title_9 = '$_POST[title_9]',
                                        title_10 = '$_POST[title_10]',
                                        title_11 = '$_POST[title_11]',
                                        title_12 = '$_POST[title_12]',
                                        title_13 = '$_POST[title_13]',
                                        title_14 = '$_POST[title_14]',
                                        title_15 = '$_POST[title_15]',
                                        title_16 = '$_POST[title_16]',
                                        title_17 = '$_POST[title_17]',
                                        title_18 = '$_POST[title_18]',
                                        title_19 = '$_POST[title_19]',
                                        title_20 = '$_POST[title_20]',
                                        text_1 = '$_POST[text_1]',
                                        text_2 = '$_POST[text_2]',
                                        text_3 = '$_POST[text_3]',
                                        text_4 = '$_POST[text_4]',
                                        text_5 = '$_POST[text_5]',
                                        text_6 = '$_POST[text_6]',
                                        text_7 = '$_POST[text_7]',
                                        text_8 = '$_POST[text_8]',
                                        text_9 = '$_POST[text_9]',
                                        text_10 = '$_POST[text_10]',
                                        text_11 = '$_POST[text_11]',
                                        text_12 = '$_POST[text_12]',
                                        text_13 = '$_POST[text_13]',
                                        text_14 = '$_POST[text_14]',
                                        text_15 = '$_POST[text_15]',
                                        text_16 = '$_POST[text_16]',
                                        text_17 = '$_POST[text_17]',
                                        text_18 = '$_POST[text_18]',
                                        text_19 = '$_POST[text_19]',
                                        text_20 = '$_POST[text_20]'
                                    ");
if (isset($insert)) {
$msg = '<div class="alert alert-info" role="alert">تم تحديث الاعدادات بنجاح</div>';

}
}
}

$sel_setting = mysqli_query($conn,"SELECT * FROM gico_report");
$setting = mysqli_fetch_assoc($sel_setting);

?>

<article class="col-lg-8">
<?php echo $msg; ?>
<div class="panel panel-info">

<div class="panel-heading"><b>نموذج تقييم  مكتب نقل وتسويق التكنولوجيا  GICO  </b></div>
<div class="panel-body">

<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="5" class="text-center" style="color:white;background-color: #63b0c8">نموذج تقييم  مكتب نقل وتسويق التكنولوجيا  TTO </th>


        </tr>
        </thead>
        <tbody>

        <tr style="background-color: #63b0c8">
            <th scope="row">&ensp; م</th>
            <td class="text-center"><b style="color: white">عناصر التقييم</b></td>
            <td class="text-center"><b style="color: white">البيان</b></td>
            <td class="text-center"><b style="color: white">المرفق</b></td>
            <td class="text-center"><b style="color: white">حقل جديد</b></td>
        </tr>

        <tr>
            <th scope="row">&ensp; 1</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_1" id="title_1"><?php echo ($setting['title_1']=='' ? '' : $setting['title_1']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_1" id="text_1"><?php echo ($setting['text_1']=='' ? '' : $setting['text_1']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!-- Attach_1 -->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_1'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">تغيير المرفق</button>
';
                        }
                        ?>

                        <div id="uploadModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_1' id='attach_1' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_1'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_1'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p ><br><br><?php echo substr(($setting['attach_1'] == '' ? '' : $setting['attach_1']),0,30)?>&ensp;&ensp;&ensp;
                            <a href="public_report.php?target=attach_1" title="حذف الملف">&ensp;&ensp;&ensp; <br><br>
                                <?php
                                     if($setting['attach_1'] != ''){
                                         echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                    }
                                     ?>
                            </a>

                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
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
        <tr class="td1" id="td1" style="<?php echo (empty($setting['title_2']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 2</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_2" id="title_2"><?php echo ($setting['title_2']=='' ? '' : $setting['title_2']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_2" id="text_2"><?php echo ($setting['text_2']=='' ? '' : $setting['text_2']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_2-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_2'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_2">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_2">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_2" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_2' id='attach_2' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_2'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_2'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_2'] == '' ? '' : $setting['attach_2']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_2" title="حذف الملف">
                                <?php
                                if($setting['attach_2'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>

                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd2" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd2').click(function() {
                    $('.td2').toggle();
                });
            });
        </script>
        <tr class="td2" id="td2" style="<?php echo (empty($setting['title_3']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 3</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_3" id="title_3"><?php echo ($setting['title_3']=='' ? '' : $setting['title_3']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_3" id="text_3"><?php echo ($setting['text_3']=='' ? '' : $setting['text_3']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_3-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_3'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_3">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_3">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_3" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_3' id='attach_3' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_3'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_3'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_3'] == '' ? '' : $setting['attach_3']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_3" title="حذف الملف">
                                <?php
                                if($setting['attach_3'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>

                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd3" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd3').click(function() {
                    $('.td3').toggle();
                });
            });
        </script>
        <tr class="td3" id="td3" style="<?php echo (empty($setting['title_4']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 4</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_4" id="title_3"><?php echo ($setting['title_4']=='' ? '' : $setting['title_4']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_4" id="text_4"><?php echo ($setting['text_4']=='' ? '' : $setting['text_4']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_4-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_4'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_4">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_4">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_4" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_4' id='attach_4' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_4'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_4'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_4'] == '' ? '' : $setting['attach_4']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_4" title="حذف الملف">
                                <?php
                                if($setting['attach_4'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>

                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd4" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd4').click(function() {
                    $('.td4').toggle();
                });
            });
        </script>
        <tr class="td4" id="td4" style="<?php echo (empty($setting['title_5']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 5</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_5" id="title_5"><?php echo ($setting['title_5']=='' ? '' : $setting['title_5']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_5" id="text_5"><?php echo ($setting['text_5']=='' ? '' : $setting['text_5']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_5-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_5'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_5">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_5">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_5" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_5' id='attach_5' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_5'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_5'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_5'] == '' ? '' : $setting['attach_5']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_5" title="حذف الملف">
                                <?php
                                if($setting['attach_5'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>

                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd5" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd5').click(function() {
                    $('.td5').toggle();
                });
            });
        </script>
        <tr class="td5" id="td5" style="<?php echo (empty($setting['title_6']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 6</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_6" id="title_6"><?php echo ($setting['title_6']=='' ? '' : $setting['title_6']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_6" id="text_6"><?php echo ($setting['text_6']=='' ? '' : $setting['text_6']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_6-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_6'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_6">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_6">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_6" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_6' id='attach_6' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_6'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_6'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_6'] == '' ? '' : $setting['attach_6']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_6" title="حذف الملف">
                                <?php
                                if($setting['attach_6'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd6" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd6').click(function() {
                    $('.td6').toggle();
                });
            });
        </script>
        <tr class="td6" id="td6" style="<?php echo (empty($setting['title_7']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 7</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_7" id="title_7"><?php echo ($setting['title_7']=='' ? '' : $setting['title_7']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_7" id="text_7"><?php echo ($setting['text_7']=='' ? '' : $setting['text_7']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_7-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_7'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_7">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_7">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_7" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_7' id='attach_7' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_7'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_7'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_7'] == '' ? '' : $setting['attach_7']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_7" title="حذف الملف">
                                <?php
                                if($setting['attach_7'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd7" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd7').click(function() {
                    $('.td7').toggle();
                });
            });
        </script>
        <tr class="td7" id="td7" style="<?php echo (empty($setting['title_8']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 8</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_8" id="title_8"><?php echo ($setting['title_8']=='' ? '' : $setting['title_8']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_8" id="text_8"><?php echo ($setting['text_8']=='' ? '' : $setting['text_8']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_8-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_8'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_8">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_8">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_8" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_8' id='attach_8' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_8'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_8'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_8'] == '' ? '' : $setting['attach_8']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_8" title="حذف الملف">
                                <?php
                                if($setting['attach_8'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd8" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd8').click(function() {
                    $('.td8').toggle();
                });
            });
        </script>
        <tr class="td8" id="td8" style="<?php echo (empty($setting['title_9']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 9</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_9" id="title_9"><?php echo ($setting['title_9']=='' ? '' : $setting['title_9']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_9" id="text_9"><?php echo ($setting['text_9']=='' ? '' : $setting['text_9']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_9-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_9'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_9">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_9">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_9" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_9' id='attach_9' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_9'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_9'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_9'] == '' ? '' : $setting['attach_9']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_9" title="حذف الملف">
                                <?php
                                if($setting['attach_9'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd9" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd9').click(function() {
                    $('.td9').toggle();
                });
            });
        </script>
        <tr class="td9" id="td9" style="<?php echo (empty($setting['title_10']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 10</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_10" id="title_10"><?php echo ($setting['title_10']=='' ? '' : $setting['title_10']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_10" id="text_10"><?php echo ($setting['text_10']=='' ? '' : $setting['text_10']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_10-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_10'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_10">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_10">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_10" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_10' id='attach_10' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_10'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_10'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_10'] == '' ? '' : $setting['attach_10']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_10" title="حذف الملف">
                                <?php
                                if($setting['attach_10'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd10" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd10').click(function() {
                    $('.td10').toggle();
                });
            });
        </script>
        <tr class="td10" id="td10" style="<?php echo (empty($setting['title_11']) ? 'display:none' : '')?>">
        <th scope="row">&ensp; 11</th>
        <td class="text-center">
            <textarea rows="9" cols="50" class="form-control"  name="title_11" id="title_11"><?php echo ($setting['title_11']=='' ? '' : $setting['title_11']) ?></textarea>
        </td>
        <td class="text-center">
            <div class="form-group">
                <div class="col-sm-12">
                    <textarea rows="9" cols="60" class="form-control"  name="text_11" id="text_11"><?php echo ($setting['text_11']=='' ? '' : $setting['text_11']) ?></textarea>
                </div>
            </div>
        </td>
        <td class="text-center">
            <div class="form-group">
                <!--attach_11-->
                <div class="col-sm-12">
                    <?php
                    if($setting['attach_11'] == ''){
                        echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_11">رفع مرفق</button>
';
                    }
                    else{
                        echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_11">تغيير المرفق</button>
';
                    }
                    ?>
                    <div id="uploadModal_11" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">File upload form</h4>
                                </div>
                                <div class="modal-body">
                                    <!-- Form -->
                                    <form method='post' action='' enctype="multipart/form-data">
                                        اختر المرفق : <input type='file' name='attach_11' id='attach_11' class='form-control' ><br>
                                        <input type='button' class='btn btn-info' value='Upload' id='btn_upload_11'>
                                    </form>

                                    <!-- Preview-->
                                    <div id='preview_11'></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <p><br><br><?php echo substr(($setting['attach_11'] == '' ? '' : $setting['attach_11']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                        <a href="public_report.php?target=attach_11" title="حذف الملف">
                            <?php
                            if($setting['attach_11'] != ''){
                                echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                            }
                            ?>
                        </a>
                    </p>
                </div>
            </div>
        </td>
        <td class="text-center">
            <span id="btnAdd11" class="glyphicon glyphicon-plus"></span>
        </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd11').click(function() {
                    $('.td11').toggle();
                });
            });
        </script>
        <tr class="td11" id="td11" style="<?php echo (empty($setting['title_12']) ? 'display:none' : '')?>">
        <th scope="row">&ensp; 12</th>
        <td class="text-center">
            <textarea rows="9" cols="50" class="form-control"  name="title_12" id="title_12"><?php echo ($setting['title_12']=='' ? '' : $setting['title_12']) ?></textarea>
        </td>
        <td class="text-center">
            <div class="form-group">
                <div class="col-sm-12">
                    <textarea rows="9" cols="60" class="form-control"  name="text_12" id="text_12"><?php echo ($setting['text_12']=='' ? '' : $setting['text_12']) ?></textarea>
                </div>
            </div>
        </td>
        <td class="text-center">
            <div class="form-group">
                <!--attach_12-->
                <div class="col-sm-12">
                    <?php
                    if($setting['attach_12'] == ''){
                        echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_12">رفع مرفق</button>
';
                    }
                    else{
                        echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_12">تغيير المرفق</button>
';
                    }
                    ?>
                    <div id="uploadModal_12" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">File upload form</h4>
                                </div>
                                <div class="modal-body">
                                    <!-- Form -->
                                    <form method='post' action='' enctype="multipart/form-data">
                                        اختر المرفق : <input type='file' name='attach_12' id='attach_12' class='form-control' ><br>
                                        <input type='button' class='btn btn-info' value='Upload' id='btn_upload_12'>
                                    </form>

                                    <!-- Preview-->
                                    <div id='preview_12'></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <p><br><br><?php echo substr(($setting['attach_12'] == '' ? '' : $setting['attach_12']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                        <a href="public_report.php?target=attach_12" title="حذف الملف">
                            <?php
                            if($setting['attach_12'] != ''){
                                echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                            }
                            ?>
                        </a>
                    </p>
                </div>
            </div>
        </td>
        <td class="text-center">
            <span id="btnAdd12" class="glyphicon glyphicon-plus"></span>
        </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd12').click(function() {
                    $('.td12').toggle();
                });
            });
        </script>
        <tr class="td12" id="td12" style="<?php echo (empty($setting['title_13']) ? 'display:none' : '')?>">
        <th scope="row">&ensp; 13</th>
        <td class="text-center">
            <textarea rows="9" cols="50" class="form-control"  name="title_13" id="title_12"><?php echo ($setting['title_13']=='' ? '' : $setting['title_13']) ?></textarea>
        </td>
        <td class="text-center">
            <div class="form-group">
                <div class="col-sm-12">
                    <textarea rows="9" cols="60" class="form-control"  name="text_13" id="text_13"><?php echo ($setting['text_13']=='' ? '' : $setting['text_13']) ?></textarea>
                </div>
            </div>
        </td>
        <td class="text-center">
            <div class="form-group">
                <!--attach_13-->
                <div class="col-sm-12">
                    <?php
                    if($setting['attach_13'] == ''){
                        echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_13">رفع مرفق</button>
';
                    }
                    else{
                        echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_13">تغيير المرفق</button>
';
                    }
                    ?>
                    <div id="uploadModal_13" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">File upload form</h4>
                                </div>
                                <div class="modal-body">
                                    <!-- Form -->
                                    <form method='post' action='' enctype="multipart/form-data">
                                        اختر المرفق : <input type='file' name='attach_13' id='attach_13' class='form-control' ><br>
                                        <input type='button' class='btn btn-info' value='Upload' id='btn_upload_13'>
                                    </form>

                                    <!-- Preview-->
                                    <div id='preview_13'></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <p><br><br><?php echo substr(($setting['attach_13'] == '' ? '' : $setting['attach_13']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                        <a href="public_report.php?target=attach_13" title="حذف الملف">
                            <?php
                            if($setting['attach_13'] != ''){
                                echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                            }
                            ?>
                        </a>
                    </p>
                </div>
            </div>
        </td>
        <td class="text-center">
            <span id="btnAdd13" class="glyphicon glyphicon-plus"></span>
        </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd13').click(function() {
                    $('.td13').toggle();
                });
            });
        </script>
        <tr class="td13" id="td13" style="<?php echo (empty($setting['title_14']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 14</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_14" id="title_14"><?php echo ($setting['title_14']=='' ? '' : $setting['title_14']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_14" id="text_14"><?php echo ($setting['text_14']=='' ? '' : $setting['text_14']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_14-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_14'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_14">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_14">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_14" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_14' id='attach_14' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_14'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_14'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_14'] == '' ? '' : $setting['attach_14']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_14" title="حذف الملف">
                                <?php
                                if($setting['attach_14'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd14" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd14').click(function() {
                    $('.td14').toggle();
                });
            });
        </script>
        <tr class="td14" id="td14" style="<?php echo (empty($setting['title_15']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 15</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_15" id="title_15"><?php echo ($setting['title_15']=='' ? '' : $setting['title_15']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_15" id="text_15"><?php echo ($setting['text_15']=='' ? '' : $setting['text_15']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_15-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_15'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_15">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_15">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_15" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_15' id='attach_15' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_15'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_15'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_15'] == '' ? '' : $setting['attach_15']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_15" title="حذف الملف">
                                <?php
                                if($setting['attach_15'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd15" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd15').click(function() {
                    $('.td15').toggle();
                });
            });
        </script>
        <tr class="td15" id="td15" style="<?php echo (empty($setting['title_16']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 16</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_16" id="title_16"><?php echo ($setting['title_16']=='' ? '' : $setting['title_16']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_16" id="text_16"><?php echo ($setting['text_16']=='' ? '' : $setting['text_16']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_16-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_16'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_16">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_16">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_16" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_16' id='attach_16' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_16'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_16'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_16'] == '' ? '' : $setting['attach_16']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_16" title="حذف الملف">
                                <?php
                                if($setting['attach_16'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd16" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd16').click(function() {
                    $('.td16').toggle();
                });
            });
        </script>
        <tr class="td16" id="td16" style="<?php echo (empty($setting['title_17']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 17</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_17" id="title_17"><?php echo ($setting['title_17']=='' ? '' : $setting['title_17']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_17" id="text_17"><?php echo ($setting['text_17']=='' ? '' : $setting['text_17']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_17-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_16'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_17">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_17">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_17" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_17' id='attach_17' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_17'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_17'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_17'] == '' ? '' : $setting['attach_17']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_17" title="حذف الملف">
                                <?php
                                if($setting['attach_17'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd17" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd17').click(function() {
                    $('.td17').toggle();
                });
            });
        </script>
        <tr class="td17" id="td17" style="<?php echo (empty($setting['title_18']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 18</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_18" id="title_18"><?php echo ($setting['title_18']=='' ? '' : $setting['title_18']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_18" id="text_18"><?php echo ($setting['text_18']=='' ? '' : $setting['text_18']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_18-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_18'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_18">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_18">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_18" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_18' id='attach_18' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_18'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_18'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_18'] == '' ? '' : $setting['attach_18']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_18" title="حذف الملف">
                                <?php
                                if($setting['attach_18'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd18" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd18').click(function() {
                    $('.td18').toggle();
                });
            });
        </script>
        <tr class="td18" id="td18" style="<?php echo (empty($setting['title_19']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 19</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_19" id="title_19"><?php echo ($setting['title_19']=='' ? '' : $setting['title_19']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_19" id="text_19"><?php echo ($setting['text_19']=='' ? '' : $setting['text_19']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_19-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_19'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_19">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_19">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_19" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_19' id='attach_19' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_19'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_19'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_19'] == '' ? '' : $setting['attach_19']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_19" title="حذف الملف">
                                <?php
                                if($setting['attach_19'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <span id="btnAdd19" class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        <script>
            $(function() {
                $('#btnAdd19').click(function() {
                    $('.td19').toggle();
                });
            });
        </script>
        <tr class="td19" id="td19" style="<?php echo (empty($setting['title_20']) ? 'display:none' : '')?>">
            <th scope="row">&ensp; 20</th>
            <td class="text-center">
                <textarea rows="9" cols="50" class="form-control"  name="title_20" id="title_20"><?php echo ($setting['title_20']=='' ? '' : $setting['title_20']) ?></textarea>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea rows="9" cols="60" class="form-control"  name="text_20" id="text_20"><?php echo ($setting['text_20']=='' ? '' : $setting['text_20']) ?></textarea>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <div class="form-group">
                    <!--attach_20-->
                    <div class="col-sm-12">
                        <?php
                        if($setting['attach_20'] == ''){
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_20">رفع مرفق</button>
';
                        }
                        else{
                            echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal_20">تغيير المرفق</button>
';
                        }
                        ?>
                        <div id="uploadModal_20" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">File upload form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form method='post' action='' enctype="multipart/form-data">
                                            اختر المرفق : <input type='file' name='attach_20' id='attach_20' class='form-control' ><br>
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload_20'>
                                        </form>

                                        <!-- Preview-->
                                        <div id='preview_20'></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <p><br><br><?php echo substr(($setting['attach_20'] == '' ? '' : $setting['attach_20']),0,30)?>&ensp;&ensp;&ensp;<br><br>
                            <a href="public_report.php?target=attach_20" title="حذف الملف">
                                <?php
                                if($setting['attach_20'] != ''){
                                    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
                                }
                                ?>
                            </a>
                        </p>
                    </div>
                </div>
            </td>
            <td class="text-center">
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