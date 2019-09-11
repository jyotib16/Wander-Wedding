<div class="header-transparent header-transparent-fullwidth">    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <nav class="navbar navbar-expand-lg navbar-transparent">
                    <a class="navbar-brand" href="index.php"> <img src="images/logo-white.png" alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-transparent" aria-controls="navbar-transparent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar top-bar mt-0"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-transparent">
                      <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php" id="menu-1">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="how-it-works.php">
                                    How It Works
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="venues.php">
                                    Venues
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vendors.php">
                                    Vendors
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Destination Weddings
                                </a>
                            </li>
                        </ul>
                        <a href="list-your-business.php" class="btn btn-default btn-sm">List your Business</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div id="vendor_signin" class="vendor_popup modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
               <div class="row">
                    <img class="modal-img" src="images/popup-img1.jpg"/>
                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 modal-login">
                        <h3>Login</h3>
                        <p> Fill in the form below to get started on Listing your business on Wander Wedding </p>
                       <form method="post" class="login" enctype="multipart/form-data">
                            <fieldset>
                            <span class="text-danger" id="invalid" style="display:none;"><i class="fa fa-exclamation-circle"></i> Invalid username or password</span>
                                <div class="form-group">
                                    <label>Email Id/User Name <span class="text-danger">*</span>
                                    <span class="text-danger" id="error_msg_1" style="display:none;float: right;"><i class="fa fa-exclamation-circle"></i> Required field</span> </label>
                                    
                                     <input type="text" class="form-control" name="username_login" id="username_login" value="">
                                </div>
                                <div class="form-group">
                                    <label>Password <span class="text-danger">*</span>
                                    <span class="text-danger" id="error_msg_2" style="display:none;float: right;"><i class="fa fa-exclamation-circle"></i> Required field</span></label> 
                                     
                                    <input class="form-control" type="password" name="password_login" id="password_login">
                                    <span toggle="#password_login" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <p>
                                    <label class="fl_right"><a href="javascript:void()" onclick="fun()" data-toggle="modal" data-target="#vendor_forgotpwd">Forgot your password?</a></label>
                                </p>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-default btn-block" value="Login" name="">
                                </div>
                                <center>
                                    <a href="javascript:void(0)" data-target="#vendor_signup" data-toggle="modal" data-backdrop="static" onclick="fun()">Dont't have an account? Click here</a>
                                </center>
                            </fieldset>
                        </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>

<div id="vendor_forgotpwd" class="vendor_popup modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
               <div class="row">
                    <img class="modal-img" src="images/popup-img1.jpg"/>
                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 modal-login">
                        <h3>Forgot Password</h3>
                        <p> Type in the email address you used when you signup with Wander Wedding</p>
                       <form method="post" class="login" enctype="multipart/form-data">
                            <fieldset>
                            <span class="text-danger" id="invalid" style="display:none;"><i class="fa fa-exclamation-circle"></i> Invalid username or password</span>
                                <div class="form-group">
                                    <label>Email Id/User Name <span class="text-danger">*</span>
                                    <span class="text-danger" id="error_msg_1" style="display:none;float: right;"><i class="fa fa-exclamation-circle"></i> Required field</span> </label>                                    
                                     <input type="text" class="form-control" name="username_login" id="username_login" value="">
                                </div>
                                <div class="form-group mt-20">
                                    <input type="submit" class="btn btn-default btn-block" value="Submit" name="">
                                </div>
                                <center>
                                    <a href="javascript:void(0)" data-target="#vendor_signin" data-toggle="modal" data-backdrop="static" onclick="fun2()">Remember Password? Click here</a>
                                </center>
                            </fieldset>
                        </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>

<div id="vendor_signup" class="vendor_popup modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
               <div class="row">
                    <img class="modal-img" src="images/popup-img1.jpg"/>
                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 modal-login">
                        <h3>Signup</h3>
                        <p>It's simple and free.</p>
                       <form method="post" class="login" enctype="multipart/form-data">
                            <fieldset>
                            <span class="text-danger" id="invalid" style="display:none;"><i class="fa fa-exclamation-circle"></i> Invalid username or password</span>
                                <div class="form-group">
                                    <label>Email Id <span class="text-danger">*</span>
                                    <span class="text-danger" id="error_msg_1" style="display:none;float: right;"><i class="fa fa-exclamation-circle"></i> Required field</span> </label>
                                    
                                     <input type="text" class="form-control" name="email_login" id="email_login" value="">
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number <span class="text-danger">*</span>
                                    <span class="text-danger" id="error_msg_2" style="display:none;float: right;"><i class="fa fa-exclamation-circle"></i> Required field</span> </label>
                                    
                                     <input type="text" class="form-control" name="mobile_login" id="mobile_login" value="">
                                </div>
                                <div class="form-group">
                                    <label>Password <span class="text-danger">*</span>
                                    <span class="text-danger" id="error_msg_2" style="display:none;float: right;"><i class="fa fa-exclamation-circle"></i> Required field</span></label> 
                                     
                                    <input class="form-control" type="password" name="password_login" id="password_login">
                                    <span toggle="#password_login" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group mt-20">
                                    <input type="submit" class="btn btn-default btn-block" value="Sign Up" name="">
                                </div>
                                <center>
                                    <a href="javascript:void(0)" data-target="#vendor_signin" data-toggle="modal" data-backdrop="static" onclick="fun1()">Already have an account? Click here</a>
                                </center>
                            </fieldset>
                        </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>

  <script src="js/jquery.min.js"></script>
<script type="text/javascript">
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
<script>
    function fun(){
        $("#vendor_signin .close").click();
    }
    function fun1(){
        $("#vendor_signup .close").click();
    }
    function fun2(){
        $("#vendor_forgotpwd .close").click();
    }
</script>
