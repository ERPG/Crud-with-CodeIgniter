<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://localhost/ci-crud/stylesheets/styles.css">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
</head>
<body>
	<?php include('header.php');?>

	<h2 class="editTitle">Edit User</h2>

<?php echo form_open('crud/saveupdate');?>
	<div id="editForm" class="container">
		<div class="col-md-5">
		    <div class="form-area">  
		        <form role="form">
		        <br style="clear:both">
		                    <h3 style="margin-bottom: 25px; text-align: center;">Edit Form</h3>
		                    <div class="form-group">
								<?php echo form_input(['name' => 'user_id', 'class' => 'form-control', 'placeholder' => 'User ID', 'value'=>set_value('name', $user->user_id)]); ?>
							</div>
		    				<div class="form-group">
								<?php echo form_input(['name' => 'name', 'class' => 'form-control', 'placeholder' => 'name', 'value'=>set_value('name', $user->name)]); ?>
							</div>
							<div class="form-group">
								<?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'email', 'value'=>set_value('email', $user->email)]); ?>

							</div>
							<div class="form-group">
								<?php echo form_input(['name' => 'phone_number', 'class' => 'form-control', 'placeholder' => 'phone number', 'value'=>set_value('phone_number', $user->phone_number)]); ?>
							</div>
							<div class="form-group">
								<?php echo form_input(['name' => 'age', 'class' => 'form-control', 'placeholder' => 'age', 'value'=>set_value('age', $user->age)]); ?>
							</div>
							<div class="form-group">
								<?php echo form_input(['name' => 'assoc_roles', 'class' => 'form-control', 'placeholder' => 'Roles', 'value'=>set_value('assoc_roles', $user->assoc_roles)]); ?>
							</div>
		            
		        <button type="submit" value="submit" id="edit" class="submit btn btn-primary">Edit User</button>
		        <button type="button" onclick="location.href='<?php echo base_url();?>index.php'" class="btn btn-default">Go Back</button>
		        </form>
		    </div>
		</div>
	</div>
<?php echo form_close(); ?>

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>