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
            <div class="panel-heading" style="padding-bottom: 50px">

                <div class="form-group">
                    <label style="font-size: 20px" for="البحث" class="col-sm-1 control-label">البحث :</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="search_text" name="search_text"  placeholder="البحث بتفاصيل البراءة">
                    </div>
                </div>
                <br>
                <hr style="border-width: 5px;border: 1px solid #d7d2d2;"/>
                <div class="">
                    <label style="font-size: 15px" for="البحث بالتاريخ" class="col-sm-1 control-label">من :</label>
                    <div class="col-sm-2">
                        <input type="text" name="from_date" id="from_date" class="form-control"/>
                    </div>
                </div>
                <div class="">
                    <label style="font-size: 15px" for="البحث بالتاريخ" class="col-sm-1 control-label">الي :</label>
                    <div class="col-sm-2">
                        <input type="text" name="to_date" id="to_date" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-1">
                        <input type="button" name="filter" id="filter"  class="btn btn-success" onclick="Show()" value="فلترة"/>
                    </div>
                </div>
                <script>
                    function Show() {
                        document.getElementById("Div").style.display = "";
                    }
                </script>

                    <div style="display: none" id="Div" class="form-group">
                    <div class="col-sm-1">
                        <a  href="date_report.php" class="btn btn-danger" >طباعة</a>
                    </div>
                </div>


            </div>

            <div class="panel-body">
                <div id="result"></div>
                    </tbody>
                </table>

            </div>
        </div>

    </article>
<?php
include_once("inc/footer.php");

?>