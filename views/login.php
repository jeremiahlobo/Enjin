<? include 'partials/header.php';?>
<div class="container">
     <div class="form-container">
        <form method="post">
            <h2>Login.</h2><hr/>
            <!-- <?php
            // if(isset($error))
            {
                  ?>
                  <div class="alert alert-danger">
                      // <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php ?> !
                  </div>
                  <?php
            }
            ?>
             -->
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

<? require('partials/footer.php');?>
