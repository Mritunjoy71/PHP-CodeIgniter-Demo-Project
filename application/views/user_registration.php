<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp; Home <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo base_url();?>welcome/aboutus.html">About us</a></li>
            <li><a href="<?php echo base_url();?>welcome/user_registration.html">Registration</a></li>
            <li><a href="<?php echo base_url();?>welcome/user_login.html">Login</a></li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>

    <br><br>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h2>User Registration</h2>
          <hr>
            <h3>
                <font color="red">
                <?php $messages=$this->session->userdata('save_messages');
                 if(isset($messages ))
                 {
                     echo $messages ;
                     $this->session->unset_userdata('save_messages');

                 }
                ?></font>
            </h3>
            <form  name="user Information" method="post" action="<?php echo base_url();?>my_controller/user_registration_information">
                <div class="form-group">
                    <label class="col-md-2 control-label">First Name</label>
                    <div class="col-md-10">
                        <input type="text" name="first_name" class="form-control"  placeholder="Enter Your First Name" required="">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-md-2 control-label">Middle Name</label>
                    <div class="col-md-10">
                        <input type="text" name="middle_name" class="form-control"  placeholder="Enter Your Middle Name">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-md-2 control-label">Last Name</label>
                    <div class="col-md-10">
                        <input type="text" name="last_name" class="form-control"  placeholder="Enter Your Last Name"  required="">
                    </div>   
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-md-2 control-label">Address</label>
                    <div class="col-md-10">
                        <input type="text" name="address" class="form-control"  placeholder="Enter Your Address" required="">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-md-2 control-label">Email address</label>
                    <div class="col-md-10">
                        <input type="email" name="email" class="form-control"  placeholder="Email" required="">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-md-2 control-label">Password</label>
                    <div class="col-md-10">
                        <input type="password" name="password" class="form-control"  placeholder="Password" required="">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-success">Registration</button>
                    </div>
                </div>

            </form>
                    
                  
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>resource/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?><?php echo base_url();?>resource/js/bootstrap.min.js"></script>
  </body>
</html>