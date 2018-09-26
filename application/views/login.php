<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background-image:url(<?php echo base_url() ?>/assets/images/bg.jpg)">
<br><br><br><br><br>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="<?php echo base_url() ?>/Login/do_login" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
                             <div class="form-group">
							
                             <select class="form-control" name="type">
                             <option selected disabled>--- Select User Type ---</option>
                             <option>Admin</option>
                             <option>Pharmist</option>
                             <option>Salesman</option>
                             </select>  
                            	
                             </div>

							
							<input type="submit" value="Login" name="submit" class="btn btn-primary ">					
                            </form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
