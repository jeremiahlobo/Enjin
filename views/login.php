<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login : cleartuts</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="css/styles.css" type="text/css"  />
</head>
<body>
<div class="container">
     <div class="form-container">
        <form method="post">
            <h2>Login.</h2><hr />
            <?php
            if(isset($error))
            {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                  </div>
                  <?php
            }
            ?>
            <div class="form-group">
             <input type="text" class="form-control" name="txt_uname_email" placeholder="Username or Email" required />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="txt_password" placeholder="Password" required />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" name="btn-login" class="btn btn-block btn-primary">
                 <i class="glyphicon glyphicon-log-in"></i>&nbsp;Login
                </button>
            </div>
            <br />
            <label>Don't have account yet ! <a href="/register">Register</a></label>
        </form>
       </div>
</div>

</body>
</html>