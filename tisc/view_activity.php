<?php

include_once("inc/header.php");
include_once("inc/sidebar.php");
include_once("../connect.php");

$id =intval($_GET['post']);
$username = $_SESSION['username'];
$msg = '';
$select_post = mysqli_query($conn, "SELECT * FROM activities  WHERE cource_id ='$id' ");
$post =mysqli_fetch_assoc($select_post);

?>

    <article class="col-md-9 col-lg-9 " xmlns="http://www.w3.org/1999/html">
        <div class="col-md-12" art_bg >

            <div class="cate_post" style="padding: 5px; margin: 10px 0;background: white;border: solid 1px   #E7E7E7;">

                <div class="col-md-12">
                    <h2 class="cate_h2" style="margin:0px;padding:5px;background: #719CBD;color:#fff;margin-bottom: 10px;"><?php echo $post['cource_name']; ?></h2>
                    <?php
                    if($post['image'] == ''){}else{echo '<img src="'.$post['image'].'" width="100%" style="max-height: 500px;"/>';}
                    ?>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12" style="margin: 15px;background: #f3dcd9; font-size:20px;"><p class="pull-right"><i class="fa fa-user">   المحاضر : <?php echo $post['donor']; ?></i> | <i class="fa fa-clock-o">&ensp;</i> تاريخ 
النشاط :  <?php echo $post['date']; ?></p>

                    </div>
                    <div class="col-md-12">
                        <hr/>

                        <p><?php echo $post['note']; ?></p>
                        <div class="col-md-12">

                            <hr style="margin-button:0px;"/>
                        </div>

                    </div>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
        <!-- comment Area -->
    </article>

<?php
include_once("inc/footer.php");
?>