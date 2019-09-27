<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Faculty Registration Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'bootstrap/css/bootstrap.css';?>"></link>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url().'bootstrap/css/custom.css';?>"></link>
    <script type="text/javascript" src="<?php echo base_url().'bootstrap/js/jquery.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'bootstrap/js/bootstrap.js';?>"></script>
</head>
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
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
					
				<form class="form-horizontal" method="post" action="<?php echo base_url().'admincontroller/'?>">
					
					<div class="form-group">
						<label class="col-md-2 control-label">Email</label>
						<div class="col-md-8">
							<input class="form-control" value="<?=set_value('Email')?>" name="Email"id="txtEmail"type="text"/>
						</div>
					</div>
			
					<div class="form-group">
						<label class="col-md-2 control-label">Password</label>
						<div class="col-md-8">
							<input class="form-control"name="Password" value="<?=set_value('Password')?>"id="txtPass" type="text"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4 col-md-offset-2">
							<input type="submit" class="btn btn-primary btn-block col-md-offset-" value='Login Now'/>
							<a href="<?=base_url().'admincontroller/register'?>" class="btn btn-primary btn-block col-md-offset-">Register?</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	
	</div>
</body>
</html>	
	