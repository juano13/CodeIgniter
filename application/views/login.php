<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Usuarios</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<center><h1 style="">Iniciar Sesión</h1></center>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php echo form_open('user/'); ?>
			<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">username</label>
			    <div class="col-sm-10">
			      <input name="username" type="text" class="form-control" placeholder="username" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input name="password" type="password" class="form-control" placeholder="Password" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">entrar</button>
			    </div>
			  </div>
			</form>
			<?php echo form_close(); ?>
		</div>
	</div>
		<?php if(isset($danger))echo '
			<div class="alert alert-danger fade in">
      			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
     			<h4>Oh snap! You got an error!</h4>
      			<p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
      			<p>
        			<button type="button" class="btn btn-danger">Take this action</button>
        			<button type="button" class="btn btn-default">Or do this</button>
      			</p>
      		</div>
    	'; ?>

</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>