        <?php
        
        include_once("connect.php");
        error_reporting(0);
ini_set('display_errors', 0);
        $msg = '';
        if($_GET['error']){
            $msg  = '<div class="alert alert-danger text-center" role="alert">من فضلك اعد إدخال اسم المستخدم وكلمة السر </div>'; 
        }
        ?>

    <link href="gico/css/bootstrap.min.css" rel="stylesheet">
      <link href="gico/css/bootstrap-rtl.min.css" rel="stylesheet">
      <link href="gico/css/font-awesome.min.css" rel="stylesheet">
      
          <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-dashboard"></i>  لوحة التحكم</a>
                        </div>
              </div>
                    </nav>
        <div class="col-md-4" style="margin-right: 534px;margin-top: 50px;">
            <div class="row">
              <div class="panel panel-default">
              <div class="panel-heading text-center"><b>تسجيل الدخول</b></div>
                 
              <div class="panel-body">
                  <div class="text-center" style="margin-bottom: 20px;">
                      <img src="sub-main/posts_images/non-avatar.png"/>
                  </div>
                  <hr/>
                    <form action="validation.php" method="post" class="form-horizontal">
                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label"><i class="fa fa-user fa-2x" aria-hidden="true"></i></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="user" placeholder="ادخل اسم المستخدم">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Password" class="col-sm-2 control-label"><i class="fa fa-lock fa-2x" aria-hidden="true"></i></label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" placeholder="ادخل كلمة المرور">
                    </div>
                  </div>
                       
                  <div class="form-group" >
                    <div class="col-sm-10 pull-left" float="center">
                      <button style="margin-right:150px;" type="submit" name="login" class="btn btn-info"> تسجيل الدخول</button>
                    </div>
                  </div>
                </form>
              </div>
                 <?php echo $msg; ?>
                  
</div>
                <div class="row">
                    <div class="text-center">
                        <p>Copyright © <a href="http://www.asrt.sci.eg/ar/"><strong>BSU-TICO</strong></a> All rights reserved</p>
                    </div>
                </div>
            </div>
            </div>


</div>
        </body>
        </html>