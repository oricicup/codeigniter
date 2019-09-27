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
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
					
				<form class="form-horizontal" method="post" action="<?php echo base_url().'admincontroller/register'?>">
					
					<div class="form-group">
						<label class="col-md-2 control-label">Name</label>
						<div class="col-md-8">
							<input class="form-control" value="<?=set_value('name')?>" name="name"id="txtEmail"type="text"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Email</label>
						<div class="col-md-8">
							<input class="form-control" value="<?=set_value('email')?>" name="email"id="txtEmail"type="email"/>
						</div>
					</div>
			
					<div class="form-group">
						<label class="col-md-2 control-label">Password</label>
						<div class="col-md-8">
							<input class="form-control"name="password" value="<?=set_value('password')?>"id="txtPass" type="text"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4 col-md-offset-2">
							<input type="submit" class="btn btn-primary btn-block col-md-offset-" value='Register Now'/>
							
						</div>
					</div>
				</form>
			</div>
		</div>
	
	</div>
</body>
</html>	
	