<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-rtl.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<?php
session_start();
include_once("../connect.php");
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$reslut = mysqli_query($conn, "SELECT * FROM sub_main_users WHERE username = '$username' and password = '$password'");
$num = mysqli_fetch_assoc($reslut);

if ($username != $num['username'] && $password != $num['password']) {
    header("location:../form.php");
}
$connect = mysqli_connect("localhost", "id13038142_root", "khaled12=2", "id13038142_tico");
$sel_date = mysqli_query($connect , 'select * from date_fetch ORDER BY date_id DESC LIMIT 1');
$date = mysqli_fetch_assoc($sel_date);
?>
<div class="text-center">
    <p style="text-decoration: underline;font-size: 20px"><strong>طلبات الايداع المسجلة من تاريخ <?php echo $date['from_date'] . ' الي ' . $date['to_date']; ?></strong></p>
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

        $patents = mysqli_query($connect ,"select * from patents where date between '$date[from_date]' and '$date[to_date]' ORDER BY date DESC");
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
<script type="text/javascript">
    window.onload = function() { window.print(); }
</script>