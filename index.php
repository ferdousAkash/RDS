<style>
    .captcha{
        background: #054f8a;
        color: whitesmoke;
        text-decoration: line-through;
        font-size: 25px;
        margin-bottom: 20px;
        font-style: italic;
        letter-spacing: 12px;
    }
</style>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>NSU Portal | North South University</title>
    <link rel="stylesheet" href="https://rds3.northsouth.edu/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://rds3.northsouth.edu/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://rds3.northsouth.edu/assets/css/login-style.css">
    <script type="text/javascript" src="https://rds3.northsouth.edu/assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="https://rds3.northsouth.edu/assets/js/login.js"></script>
    <script type="text/javascript">
        var ctoday = 1671902251000;
    </script>
</head>

<body>
<div id="navbar" class="navbar navbar-default navbar-collapse faculty-header">
    <div class="navbar-container  container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <img src="https://rds3.northsouth.edu/assets/images/logo-wide.png" style="max-width:340px">
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<div class="main-container ace-save-state container" id="main-container">
    <div class="page-content main-content">    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center" style="margin-top:20px;margin-bottom:20px;">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="login-form">
                <h3>RDS</h3>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <img src="https://rds3.northsouth.edu/images/login.png" width="80" height="80"
                             style="margin-top:10px;">
                    </div>
                    <div class="col-md-9">
                                                    <form method="post" action="https://localhost/rds2/login.php" enctype='multipart/form-data'>
                                
                                <p class="headings">NSU Portal : Login<br/><br/></p>
                                <div class="row">
                                    <div class="col-md-3">Username</div>
                                    <div class="col-md-9">
                                        <div class="form-group ">
                                            <input type="text" name="username" maxlength="11" class="form-control"
                                                   placeholder="Please enter your username"
                                                   id="UserName" autofocus required>
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="commit" value="Next" class="btn btn-success pull-right"/>
                                <div class="clearfix" style="margin-bottom:10px;"></div>
                            </form>

                                            </div>
                </div>
                <div class="clearfix"></div>
                <a class="link pull-right" href="https://rds3.northsouth.edu/index.php/common/forgetPassword">Forgot your
                    password?</a>

                <div class="time"><span id="txt">Current Server Time: 11:12:31 PM</span>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    localStorage.removeItem("sidebar");
</script>
<div class="footer">
    <div class="footer-inner">
        <div class="footer-content">
            <span class="blue" style="font-weight: bold">Developed &amp; Maintained By Office of IT, NSU</span>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>