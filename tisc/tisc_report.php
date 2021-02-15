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
$num1 = mysqli_fetch_assoc($reslut1);
$num2 = mysqli_fetch_assoc($reslut2);
$num3 = mysqli_fetch_assoc($reslut3);

if ($username = $num1['username'] && $password = $num1['password']) {

}
elseif ($username = $num2['username'] && $password = $num2['password']) {

}
elseif ($username = $num3['username'] && $password = $num3['password']) {

}
else{
    header("location:../form.php");
}
$query = mysqli_query($conn , "select * from report");
$setting = mysqli_fetch_assoc($query);
$sel_patents = mysqli_query($conn , 'Select * from patents');
$patent = mysqli_fetch_assoc($sel_patents);
?>
<div class="col-md-8 text-center">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="4" class="text-center" style="color:white;background-color: #63b0c8">نموذج تقييم مركز دعم الإبتكار والملكية الفكرية  TISC  </th>


        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row" style="background-color: #e4f1f7" ><strong>1&ensp;&ensp;&ensp;</strong>اسم الجهة التابع لها : </th>
            <td colspan="3" class="text-center" style="background-color: #e4f1f7"><p><?php echo ($setting['entity_name']=='' ? '' : $setting['entity_name']) ?></p></td>
        </tr>
        <tr>
            <th scope="row"><strong>2&ensp;&ensp;&ensp;</strong>عدد العاملين : </th>
            <td colspan="3" class="text-center"><strong><?php echo ($setting['num_of_workers']=='' ? '' : $setting['num_of_workers']) ?></strong></td>
        </tr>
        <tr>
            <th scope="row">&ensp; الاسم</th>
            <td class="text-center">الوحدة</td>
            <td class="text-center">البريد الالكتروني</td>
            <td class="text-center">التليفون</td>
        </tr>
        <tr>
            <th scope="row">&ensp; <?php echo ($setting['name']=='' ? '' : $setting['name']) ?> </th>
            <td class="text-center"><strong><?php echo ($setting['unit']=='' ? '' : $setting['unit']) ?></strong></td>
            <td class="text-center"><?php echo ($setting['email']=='' ? '' : $setting['email']) ?></td>
            <td class="text-center"><?php echo ($setting['phone']=='' ? '' : $setting['phone']) ?></td>
        </tr>
        </tbody>
    </table>

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

    <table class="table table-bordered">
        <thead>

        </thead>
        <tbody>
        <tr>
            <th scope="row" style="background-color: #e4f1f7" ><strong>3&ensp;&ensp;&ensp;</strong>عدد طلبات براءات الاختراع المسجلة :  </th>
            <td colspan="3" class="text-center" style="background-color: #e4f1f7"><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo ($setting['patent_registered']=='' ? '' : $setting['patent_registered']) ?>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</strong></td>
        </tr>
        <tr>
            <th scope="row"><strong>4&ensp;&ensp;&ensp;</strong>عدد براءات الاختراع الممنوحة : </th>
            <td colspan="3" class="text-center"><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo ($setting['patent_granted']=='' ? '' : $setting['patent_granted']) ?>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</strong></td>
        </tr>
        <tr>
            <th scope="row" style="background-color: #e4f1f7" ><strong>5&ensp;&ensp;&ensp;</strong>عدد طلبات براءات الاختراع المسجلة :  </th>
            <td colspan="3" class="text-center" style="background-color: #e4f1f7"><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo ($setting['patent_utility_granted']=='' ? '' : $setting['patent_utility_granted']) ?>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</strong></td>
        </tr>
        <tr>
            <th scope="row"><strong>6&ensp;&ensp;&ensp;</strong>عدد طلبات نماذج المنفعة المسجلة : </th>
            <td colspan="3" class="text-center"><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo ($setting['patent_granted_utitlty']=='' ? '' : $setting['patent_granted_utitlty']) ?>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</strong></td>
        </tr>
        <tr>
            <th scope="row" style="background-color: #e4f1f7" ><strong>7&ensp;&ensp;&ensp;</strong>متوسط عدد الزيارات شهريا ً:   </th>
            <td colspan="3" class="text-center" style="background-color: #e4f1f7"><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo ($setting['num_visits']=='' ? '' : $setting['num_visits']) ?>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</strong></td>
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
                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; الوصول إلى قواعد البيانات المتعلقة بالبراءات وغير البراءات</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;<strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo (strpos($setting['ch1'] , 'ch1') !==false ? '<i class="fa fa-check">' : '<i class="fa fa-times">') ; ?></i>
                    </strong></p>
                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; المساعدة والمشورة في استخدام قواعد البيانات</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<strong><?php echo (strpos($setting['ch1'] , 'ch2') !==false ? '<i class="fa fa-check">' : '<i class="fa fa-times">') ; ?></i>
                    </strong></p>
                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; بحث في الفن السابق</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<strong><?php echo (strpos($setting['ch1'] , 'ch3') !==false ? '<i class="fa fa-check">' : '<i class="fa fa-times">') ; ?></i>
                    </strong></p>
                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; بحث عن الجدة والخطوة الإبداعية لبراءات الاختراع</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<strong><?php echo (strpos($setting['ch1'] , 'ch4') !==false ? '<i class="fa fa-check">' : '<i class="fa fa-times">') ; ?></i>
                    </strong></p>
                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; بحث عن  حرية الاستخدام</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<strong><?php echo (strpos($setting['ch1'] , 'ch5') !==false ? '<i class="fa fa-check">' : '<i class="fa fa-times">') ; ?></i>
                    </strong></p>
                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull;  تحليل براءات الاختراع</strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<strong><?php echo (strpos($setting['ch1'] , 'ch6') !==false ? '<i class="fa fa-check">' : '<i class="fa fa-times">') ; ?></i>
                    </strong></p>
                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull; المساعدة والمشورة بشأن إدارة الملكية الفكرية </strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<strong><?php echo (strpos($setting['ch1'] , 'ch7') !==false ? '<i class="fa fa-check">' : '<i class="fa fa-times">') ; ?></i>
                    </strong></p>
                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull;  (الترخيص ونقل التكنولوجيا)   </strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<strong><?php echo (strpos($setting['ch1'] , 'ch8') !==false ? '<i class="fa fa-check">' : '<i class="fa fa-times">') ; ?></i>
                    </strong></p>
                <p><strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&bull;  صياغة براءات <الاختراع></الاختراع></strong><strong>&nbsp; </strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<strong><?php echo (strpos($setting['ch1'] , 'ch9') !==false ? '<i class="fa fa-check">' : '<i class="fa fa-times">') ; ?></i>
                    </strong></p>
            </th>
        </tr>
        <tr style="background-color: #e4f1f7">
            <th scope="row">&ensp; 9</th>
            <td class="text-center">ما هي المشكلات التكنولوجية التي ساعد المكتب في حلها؟</td>
            <td class="text-center"><p><?php echo ($setting['problem_solved']=='' ? '' : $setting['problem_solved']) ?></p></td>
        </tr>
        <tr>
            <th scope="row">&ensp; 10</th>
            <td class="text-center">الدورات التدريبية التي حصل عليها العاملين:</td>
            <td class="text-center"><p><?php echo ($setting['training_cources']=='' ? '' : $setting['training_cources']) ?></p></td>
        </tr>
        </tbody>
    </table>

    <table class="table table-bordered">
        <tbody>
        <tr style="background-color: #e4f1f7">
            <th scope="row">&ensp; 11</th>
            <td class="text-center">عدد العاملين الحاصلين على دورات التعليم عن بعد المقدمة من المنظمة العالمية للملكية الفكرية</td>
            <td class="text-center">
                <?php echo ($setting['num_of_qualified']=='' ? '' : $setting['num_of_qualified']) ?>
            </td>
            <td class="text-center">مسجل</td>
            <td class="text-center">اجتاز</td>
            <?php

                echo '
                <td class="text-center">
                <p>'.($setting['image']=='' ? '' : explode('posts_images/',$setting['image'])[1]).'</p>
                <p style="font-size: 15px;font-weight: bold"><a href="'.$setting['image'].'" target="_blank">الاطلاع علي المرفق</a></p>
                </td>
                ';
                ?>
        </tr>
            <?php
            if($setting['c_1'] != ''){

            echo
            '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_1']=='' ? '' : $setting['c_1']).'</td>
            <td>'.($setting['num_1']=='' ? '' : $setting['num_1']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch10') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch11') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>
            ';
            }
            ?>

            <?php
            if($setting['c_2'] != ''){

            echo
            '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_2']=='' ? '' : $setting['c_2']).'</td>
            <td>'.($setting['num_2']=='' ? '' : $setting['num_2']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch12') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch13') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>
            ';
            }
            ?>

            <?php
            if($setting['c_3'] != ''){

            echo
            '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_3']=='' ? '' : $setting['c_3']).'</td>
            <td>'.($setting['num_3']=='' ? '' : $setting['num_3']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch14') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch15') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
            }
            ?>

            <?php
            if($setting['c_4'] != ''){

            echo
            '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_4']=='' ? '' : $setting['c_4']).'</td>
            <td>'.($setting['num_4']=='' ? '' : $setting['num_4']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch16') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch17') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
            }
            ?>

            <?php
            if($setting['c_5'] != ''){

            echo
            '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_5']=='' ? '' : $setting['c_5']).'</td>
            <td>'.($setting['num_4']=='' ? '' : $setting['num_4']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch18') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch19') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
            }
            ?>

        <?php
            if($setting['c_6'] != ''){

            echo
            '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_6']=='' ? '' : $setting['c_6']).'</td>
            <td>'.($setting['num_6']=='' ? '' : $setting['num_6']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch20') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch21') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
            }
            ?>
        <?php
        if($setting['c_7'] != ''){

            echo
                '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_7']=='' ? '' : $setting['c_7']).'</td>
            <td>'.($setting['num_7']=='' ? '' : $setting['num_7']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch22') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch23') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
        }
        ?>

        <?php
        if($setting['c_8'] != ''){

            echo
                '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_8']=='' ? '' : $setting['c_8']).'</td>
            <td>'.($setting['num_8']=='' ? '' : $setting['num_8']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch24') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch25') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
        }
        ?>

        <?php
        if($setting['c_9'] != ''){

            echo
                '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_9']=='' ? '' : $setting['c_9']).'</td>
            <td>'.($setting['num_9']=='' ? '' : $setting['num_9']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch26') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch27') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
        }
        ?>

        <?php
        if($setting['c_10'] != ''){

            echo
                '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_10']=='' ? '' : $setting['c_10']).'</td>
            <td>'.($setting['num_10']=='' ? '' : $setting['num_10']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch28') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch29') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
        }
        ?>

        <?php
        if($setting['c_11'] != ''){

            echo
                '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_11']=='' ? '' : $setting['c_11']).'</td>
            <td>'.($setting['num_11']=='' ? '' : $setting['num_11']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch30') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch31') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
        }
        ?>

        <?php
        if($setting['c_12'] != ''){

            echo
                '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_12']=='' ? '' : $setting['c_12']).'</td>
            <td>'.($setting['num_12']=='' ? '' : $setting['num_12']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch32') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch33') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
        }
        ?>

        <?php
        if($setting['c_13'] != ''){

            echo
                '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_13']=='' ? '' : $setting['c_13']).'</td>
            <td>'.($setting['num_13']=='' ? '' : $setting['num_13']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch34') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch35') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
        }
        ?>

        <?php
        if($setting['c_14'] != ''){

            echo
                '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_14']=='' ? '' : $setting['c_14']).'</td>
            <td>'.($setting['num_14']=='' ? '' : $setting['num_14']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch36') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch37') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
        }
        ?>

        <?php
        if($setting['c_15'] != ''){

            echo
                '
            <tr style="background-color: #e4f1f7">
            <th scope="row"></th>
            <td class="text-center">'.($setting['c_15']=='' ? '' : $setting['c_15']).'</td>
            <td>'.($setting['num_15']=='' ? '' : $setting['num_15']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch38') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch39') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
        }
        ?>

        </tbody>
    </table>

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">&ensp; 12</th>
            <td class="text-center">هل تم وضع سياسة الملكية الفكرية؟</td>
            <td class="text-center">نعم</td>
            <td class="text-center"><p><?php echo ($setting['policy']=='' ? '' : $setting['policy']) ?></p></td>
        </tr>
        <th scope="row">&ensp; 13</th>
        <td colspan="2" class="text-center">ما هي الأنشطة التي قام بها المكتب لنشر الوعي بحقوق الملكية الفكرية؟</td>
        <td class="text-center"><p><?php echo ($setting['activities']=='' ? '' : $setting['activities']) ?></p></td>
        </tr>
        </tbody>
    </table>
    <div class="text-right">
        <p style="text-decoration: underline;font-size: 20px"><strong>طلبات الايداع المسجلة :</strong></p>
        <br>
        <table class="table table-bordered">
            <tbody>
            <tr style="background-color: #e4f1f7">
                <th scope="row">&ensp; رقم الايداع</th>
                <td class="text-center">تاريخ الايداع</td>
                <td class="text-center">اسم المخترع</td>
                <td class="text-center">مسمي الاختراع</td>
            </tr>
            </tbody
            <?php
            $patents = mysqli_query($conn ,"select * from patents");
            while ($row = mysqli_fetch_assoc($patents)) {
                echo '
            <tr>
                <th scope="row">&ensp; ' . ($row['deposit_num'] == '' ? '' : $row['deposit_num']) . '  </th>
                <td class="text-center"><strong> ' . ($row['date'] == '' ? '' : $row['date']) . ' </strong></td>
                <td class="text-center">' . ($row['inventor_name'] == '' ? '' : $row['inventor_name']) . ' </td>
                <td class="text-center">' . ($row['invent_name'] == '' ? '' : $row['invent_name']) . '</td>
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
<?php
include('inc/footer.php');
?>