<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-rtl.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<?php
session_start();
include('../connect.php');
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$reslut1 = mysqli_query($conn, "SELECT * FROM tisc_users WHERE username = '$username' and password = '$password'");
$reslut2 = mysqli_query($conn, "SELECT * FROM main_users WHERE username = '$username' and password = '$password'");
$reslut3 = mysqli_query($conn, "SELECT * FROM sub_main_users WHERE username = '$username' and password = '$password'");
$reslut4 = mysqli_query($conn, "SELECT * FROM gico_users WHERE username = '$username' and password = '$password'");

$num1 = mysqli_fetch_assoc($reslut1);
$num2 = mysqli_fetch_assoc($reslut2);
$num3 = mysqli_fetch_assoc($reslut3);;
$num4 = mysqli_fetch_assoc($reslut4);

if ($username = $num1['username'] && $password = $num1['password']) {

}
elseif ($username = $num2['username'] && $password = $num2['password']) {

}
elseif ($username = $num3['username'] && $password = $num3['password']) {

}
elseif ($username = $num4['username'] && $password = $num4['password']) {

}
else{
    header("location:../form.php");
}

$query = mysqli_query($conn , "select * from gico_report");
$setting = mysqli_fetch_assoc($query);

?>
<div class="col-md-12 text-center">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="4" class="text-center" style="color:white;background-color: #63b0c8">نموذج تقييم  مكتب نقل وتسويق التكنولوجيا  GICO </th>


        </tr>
        </thead>
        <tbody>

        <tr style="background-color: #63b0c8">
            <th scope="row">&ensp; م</th>
            <td class="text-center col-md-4"><b style="color: white">عناصر التقييم</b></td>
            <td class="text-center col-md-8"><b style="color: white">البيان</b></td>
        </tr>
        <?php
        if($setting['title_1'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 1</th>
            <td class="text-center ">' . $setting['title_1'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_1'] . '</p>
            
            ' . ($setting['attach_1'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_1'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_2'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 2</th>
            <td class="text-center ">' . $setting['title_2'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_2'] . '</p>
            
            ' . ($setting['attach_2'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_2'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_3'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 3</th>
            <td class="text-center ">' . $setting['title_3'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_3'] . '</p>
            
            ' . ($setting['attach_3'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_3'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_4'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 4</th>
            <td class="text-center ">' . $setting['title_4'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_4'] . '</p>
            
            ' . ($setting['attach_4'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_4'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_5'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp;5</th>
            <td class="text-center ">' . $setting['title_5'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_5'] . '</p>
            
            ' . ($setting['attach_5'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_5'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_6'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 6</th>
            <td class="text-center ">' . $setting['title_6'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_6'] . '</p>
            
            ' . ($setting['attach_6'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_6'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_7'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 7</th>
            <td class="text-center ">' . $setting['title_7'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_7'] . '</p>
            
            ' . ($setting['attach_7'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_7'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_8'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 8</th>
            <td class="text-center ">' . $setting['title_8'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_8'] . '</p>
            
            ' . ($setting['attach_8'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_8'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_9'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 9</th>
            <td class="text-center ">' . $setting['title_9'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_9'] . '</p>
            
            ' . ($setting['attach_9'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_9'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_10'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 10</th>
            <td class="text-center ">' . $setting['title_10'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_10'] . '</p>
            
            ' . ($setting['attach_10'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_10'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_11'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 11</th>
            <td class="text-center ">' . $setting['title_11'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_11'] . '</p>
            
            ' . ($setting['attach_11'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_11'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_12'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 12</th>
            <td class="text-center ">' . $setting['title_12'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_12'] . '</p>
            
            ' . ($setting['attach_12'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_12'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_13'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 13</th>
            <td class="text-center ">' . $setting['title_13'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_13'] . '</p>
            
            ' . ($setting['attach_13'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_13'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_14'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 14</th>
            <td class="text-center ">' . $setting['title_14'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_14'] . '</p>
            
            ' . ($setting['attach_14'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_14'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_15'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 15</th>
            <td class="text-center ">' . $setting['title_15'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_15'] . '</p>
            
            ' . ($setting['attach_15'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_15'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_16'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 16</th>
            <td class="text-center ">' . $setting['title_16'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_16'] . '</p>
            
            ' . ($setting['attach_16'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_16'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_17'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 17</th>
            <td class="text-center ">' . $setting['title_17'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_17'] . '</p>
            
            ' . ($setting['attach_17'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_17'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_18'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 18</th>
            <td class="text-center ">' . $setting['title_18'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_18'] . '</p>
            
            ' . ($setting['attach_18'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_18'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_19'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 19</th>
            <td class="text-center ">' . $setting['title_19'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_19'] . '</p>
            
            ' . ($setting['attach_19'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_19'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>

        <?php
        if($setting['title_20'] != '') {
            echo '
       
        <tr>
            <th scope="row">&ensp; 20</th>
            <td class="text-center ">' . $setting['title_20'] . '</td>
        <td class="text-center">
            <p>' . $setting['text_20'] . '</p>
            
            ' . ($setting['attach_20'] != '' ? '<hr style="margin-left: 400px;border-top-width: 2px;margin-right: 400px;"> 
                    <p><a target="_blank" style="font-weight: bold;font-size: 10px;" href="posts_images/' . $setting['attach_20'] . '">الاطلاع علي المرفق</a></p>
                            ' : '') . '
           </td>
        </tr>
            ';
        }


        ?>
        </tbody>
    </table>
    </div>
</div>

<script type="text/javascript">
    window.onload = function() { window.print(); }
</script>
<div class="row">
    <div class="text-center">
        <p>Copyright © <a href="http://www.asrt.sci.eg/ar/"><strong>BSU-TICO</strong></a> All rights reserved</p>
    </div>
</div>