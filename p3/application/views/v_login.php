<?php 
$this->load->view('_bagian/headerlogin');
?>
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url();?>asset/fav.png" style="max-height: 100px;max-width: 100px;">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo form_open('c_inventaris/ceklogin','form-horizontal');?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username');?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?php if(!empty(form_error('username'))){ ?>
                    <div class="alert alert-danger "><?php echo form_error('username');?></div>
        <?php }?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php if(!empty(form_error('password'))){ ?>
                    <div class="alert alert-danger "><?php echo form_error('password');?></div>
        <?php }?>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

    <br>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php 
$this->load->view('_bagian/footerlogin');
?>



</body></html>