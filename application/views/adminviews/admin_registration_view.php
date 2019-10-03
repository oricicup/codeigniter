<?php

$this->load->view('template/header');

?>
<body>
	 <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form form-horizontal" method="post" action="<?php echo base_url().'admincontroller/register'?>">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url().'bootstrap/img/oricicp.jpg';?>" alt="" class="circle responsive-img valign profile-image-login">
            <h4>Register</h4>
            <p class="center">Join to our community now !</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
							<input class="form-control" value="<?=set_value('name')?>" name="name" id="txtname" type="text"/>
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
			<input class="form-control" value="<?=set_value('email')?>" name="email" id="txtEmail" type="email"/>
            <label for="password">Email	</label>
          </div>
        </div>

           <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
			<input class="form-control" name="password" value="<?=set_value('password')?>" id="txtPass" type="text"/>
            <label for="password">Password	</label> 
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
							<a href="<?=base_url().'admincontroller/register'?>" class="btn btn-primary btn-block col-md-offset-">Register?</a>  
							   <a href="<?=base_url().'admincontroller';?>" class="mt-2">Login?</a>
        
		
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
	