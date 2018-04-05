<? include 'partials/header.php';?>
<div class="container">
     <div class="form-container">
        <form method="post" action="register">
            <h2>Register.</h2><hr />
            <?php
            if(isset($error))
            {
               foreach($error as $error)
               {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?= $error ?>
                  </div>
                  <?php
               }
            }
            else if(isset($_GET['joined']))
            {
               ?>
               <div class="alert alert-info">
                    <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
               </div>
               <?php
            }
            ?>
            <div class="form-group">
            <input type="text" class="form-control" name="uname" placeholder="Username" value="<?=(!empty($error))?$uname : '' ?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="umail" placeholder="Email" value="<?=(!empty($error))?$umail : '' ?>" />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="upass" placeholder="Password" />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-register">
                 <i class="glyphicon glyphicon-open-file"></i>&nbsp;Register
                </button>
            </div>
            <br />
            <label>have an account ! <a href="/">Login</a></label>
        </form>
       </div>
</div>
<? include 'partials/footer.php';?>