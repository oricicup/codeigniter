<?php

$this->load->view('template/header');

?>

<body>
  <!-----------------------------success Message----------------->
 <?php if($this->session->flashdata('registered_success')):?>
    <div class="container">
        <div class="col-md-6 col-md-offset-6  alert alert-success">
        <?php echo $this->session->flashdata('registered_success');?>
        </div>
    </div>
  <?php endif;?>
  <!---------------------------------------------------------->
 <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form form-horizontal" method="post" action="<?php echo base_url().'admincontroller/'?>">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url().'bootstrap/img/oricicp.jpg';?>" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text mt-1">Admin Login</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
              <input class="form-control" value="<?=set_value('Email')?>" name="Email"id="txtEmail"type="text"/>
            <label for="username" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
              <input class="form-control"name="Password" value="<?=set_value('Password')?>"id="txtPass" type="text"/>
            <label for="password">Password</label>
          </div>
        </div>
      
        <div class="row">
          <div class="input-field col s12">
              <input type="submit" class="btn btn-primary btn-block col-md-offset-" value='Login Now'/>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
   <a href="<?=base_url().'admincontroller/register'?>" class="col-md-offset-">Register</a>
          </div>
         <!--  <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
          </div>  -->         
        </div>

      </form>
    </div>
  </div>

<?php 

$this->load->view('template/footer');

?>
</body>
</html> 
