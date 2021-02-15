<?php

include_once("inc/header.php");
include_once("inc/sidebar.php");
include_once("../connect.php");

?>

    <article class="col-lg-9">
        <div class="panel panel-info">
            <div class="panel-heading" style="padding-bottom: 25px">
                <b style="font-size: 20px">المستخدمين</b>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>صورة المستخدم</th>
                        <th>اسم المستخدم</th>
                        <th>الايميل</th>
                        <th>المكتب</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $tico = mysqli_query($conn,"SELECT * FROM sub_main_users ");
                    $post1 = mysqli_fetch_assoc($tico);
                    $tisc = mysqli_query($conn,"SELECT * FROM tisc_users ");
                    $post2 = mysqli_fetch_assoc($tisc);
                    $tto = mysqli_query($conn,"SELECT * FROM tto_users ");
                    $post3 = mysqli_fetch_assoc($tto);
                    $gico = mysqli_query($conn,"SELECT * FROM gico_users ");
                    $post4 = mysqli_fetch_assoc($gico);
                    ?>
                    <tr>
                        <td><img src="<?php echo ($post1['image'] === '' ? 'posts_images/no-image.png' : '../sub-main/'.$post1['image'])?>" class="img-rounded" width="70px"</td>
                        <td data-toggle="tooltip"  title="<?php echo $post1['username'];?>"><?php echo $post1['username'];?></td>
                        <td><?php echo $post1['email'];?></td>
                        <td>TICO</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo ($post2['image'] === '' ? 'posts_images/no-image.png' : '../tisc/'.$post2['image'])?>" class="img-rounded" width="70px"</td>
                        <td data-toggle="tooltip"  title="<?php echo $post2['username'];?>"><?php echo $post2['username'];?></td>
                        <td><?php echo $post2['email'];?></td>
                        <td>TISC</td>
                    </tr>

                    <tr>

                        <td><img src="<?php echo ($post3['image'] === '' ? 'posts_images/no-image.png' : '../tto/'.$post3['image'])?>" class="img-rounded" width="70px"</td>
                        <td data-toggle="tooltip"  title="<?php echo $post3['username'];?>"><?php echo $post3['username'];?></td>
                        <td><?php echo $post3['email'];?></td>
                        <td>TTO</td>
                    </tr>

                    <tr>

                        <td><img src="<?php echo ($post4['image'] === '' ? 'posts_images/no-image.png' : '../gico/'.$post4['image'])?>" class="img-rounded" width="70px"</td>
                        <td data-toggle="tooltip"  title="<?php echo $post4['username'];?>"><?php echo $post4['username'];?></td>
                        <td><?php echo $post4['email'];?></td>
                        <td>GICO</td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>

    </article>
<?php
include_once("inc/footer.php");

?>