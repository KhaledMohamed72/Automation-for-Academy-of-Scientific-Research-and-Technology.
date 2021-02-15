<?php

include_once("inc/header.php");
include_once("inc/sidebar.php");
include_once("../connect.php");


$msg ='';

if(isset($_GET['status']) and isset($_GET['post'])){

    $sql =mysqli_query($conn, "UPDATE patents SET status_ceo = '$_GET[status]' WHERE patent_id = '$_GET[post]'");

}

if(isset($_GET['delete'])){

    $sql =mysqli_query($conn, "DELETE FROM patents WHERE patent_id = '$_GET[delete]'");

    if(isset($sql)){

        $msg  = '<div class="alert alert-danger" role="alert">تم حذف البراءة بنجاح</div>';
    }
}

?>

    <article class="col-lg-9">

        <?php echo $msg; ?>
        <div class="panel panel-info">
            <div class="panel-heading" style="padding-bottom: 25px">

                <div class="form-group">
                    <a style="margin-right: 50px" href="tisc_report.php" class="btn btn-primary btn-sm">تقرير ال TISC</a>
                    <a style="margin-right: 50px" href="tisc_report.php" class="btn btn-primary btn-sm">تقرير ال TISC</a>
                    <a style="margin-right: 50px" href="tisc_report.php" class="btn btn-primary btn-sm">تقرير ال TISC</a>
                    <a style="margin-right: 50px" href="tisc_report.php" class="btn btn-primary btn-sm">تقرير ال TISC</a>
                </div>

            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
            <link href="css/font-awesome.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <?php
            include('../connect.php');

            $query = mysqli_query($conn , "select * from report");
            $setting = mysqli_fetch_assoc($query);
            $sel_patents = mysqli_query($conn , 'Select * from patents');
            $patent = mysqli_fetch_assoc($sel_patents);
            ?>
            <div class="col-md-12 text-center" style="margin-top: 30px">
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
                        <td class="text-center"><img class="text-center" alt="يتم ارفاق صورة من الشهادة" src="<?php echo ($setting['image']=='' ? '' : '../tisc/'.$setting['image']) ?>" width="50%"></td>
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
            <td>'.($setting['num_5']=='' ? '' : $setting['num_5']).'</td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch20') !==false ? '<i class="fa fa-check">' : '').'  </i></td>
            <td class="text-center">'.(strpos($setting['ch1'] , 'ch21') !==false ? '<i class="fa fa-check">' : '').'</td>
            </tr>';
                    }
                    ?>



                    </tbody>
                </table>

                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row">&ensp; 12</th>
                        <td class="text-center">اهل تم وضع سياسة الملكية الفكرية؟</td>
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
                            <td class="text-center">اسم المخترع</td>
                            <td class="text-center">مسمي الاختراع</td>
                            <td class="text-center">تاريخ الايداع</td>
                        </tr>
                        </tbody
                        <?php
                        while ($row = mysqli_fetch_assoc($sel_patents)) {
                            echo '
            <tr>
                <th scope="row">&ensp; ' . ($setting['name'] == '' ? '' : $setting['name']) . '  </th>
                <td class="text-center"><strong> ' . ($setting['unit'] == '' ? '' : $setting['unit']) . ' </strong></td>
                <td class="text-center">' . ($setting['email'] == '' ? '' : $setting['email']) . ' </td>
                <td class="text-center">' . ($setting['phone'] == '' ? '' : $setting['phone']) . '</td>
            </tr>
            ';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--<script type="text/javascript">-->
            <!--    window.onload = function() { window.print(); }-->
            <!--</script>-->
            <?php
            include('inc/footer.php');
            ?>
        </div>

    </article>
<?php
include_once("inc/footer.php");

?>