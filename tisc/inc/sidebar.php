<aside class="col-lg-3">

    <div class="list-group">
        <a href="#" class="list-group-item disabled">
            الوصول السريع
        </a>
        <!--        <a href="#" class="list-group-item"><i class="fa fa-tachometer" aria-hidden="true"></i> لوحة التحكم</a>-->
        <!--        <a href="#" class="list-group-item"><i class="fa fa-cog" aria-hidden="true"></i> إعدادات الموقع</a>-->
        <a href="patents.php" class="list-group-item"><i class="fa fa-list" aria-hidden="true"></i> البراءات</a>
        <a href="activities.php" class="list-group-item"><i class="fa fa-users" aria-hidden="true"></i> الانشطة</a>
        <a href="cources.php" class="list-group-item"><i class="fa fa-chain" aria-hidden="true"></i> التدريبات</a>
        <a href="#" onclick="ShowDiv()" class="list-group-item"><i class="fa fa-file-o" aria-hidden="true"></i> التقارير</a>
        <script>
            function ShowDiv() {
                document.getElementById("myDiv").style.display = "";
            }
        </script>
        <div style="display: none" id="myDiv">
            <a style="color: #1e88e5" href="reports.php" class="list-group-item">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<i class="fa fa-list" aria-hidden="true"></i> <b>التقارير الخاصة بالبراءات</b></a>
            <a style="color: #1e88e5" href="cource_reports.php" class="list-group-item">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<i class="fa fa-chain" aria-hidden="true"></i><b> التقارير الخاصة بالتدريبات</b></a>
            <a style="color: #1e88e5" href="activity_reports.php" class="list-group-item">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<i class="fa fa-users" aria-hidden="true"></i><b> التقارير الخاصة بالانشطة</b></a>
                        <a style="color: #1e88e5" href="public_report.php" class="list-group-item">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<i class="fa fa-plus" aria-hidden="true"></i>&ensp;<b>اعداد تقرير عام</b></a>

        </div>
        <a href="user_setting.php" class="list-group-item"><i class="fa fa-user-circle" aria-hidden="true"></i> اعدادات المستخدم</a>
        <!--        <a href="#" class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i> الصفحة الشخصية</a>-->
    </div>

</aside>