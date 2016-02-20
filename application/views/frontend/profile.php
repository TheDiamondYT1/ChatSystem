<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/profile.css')?>">

<div class="content">
	<div class="title-bar">
		<div class="title">
			Users
		</div>
	</div>
		
	<div class="form">
		<div class="form-inner">

			<div class="form-title">Profile</div>

			<?php echo validation_errors(); ?>
			<?php echo form_open(site_url('profile/index/'. $username)) ?>
				<div class="form-input username"><?php echo $username;?> </div>
				<input class="form-input" placeholder="New password" type="input" name="password" value="" />	
				<input class="form-input" placeholder="Repeat password" type="input" name="repeat_password" value="" />	

				<input class="form-btn" type="submit" value="Update"/>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>	 		
		</div>
	</div>
</div>