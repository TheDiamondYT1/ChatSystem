<div class="content">
	<div class="title-bar">
		<div class="title">
			Users
		</div>
	</div>
		
	<div class="form">
		<div class="form-inner">

			<div class="form-title">User edit</div>

			<?php echo validation_errors(); ?>
			<?php echo form_open(site_url('users/edit/'. $user_item['id'])) ?>
				<input class="form-input" placeholder="Username" type="input" name="username" value="<?php echo $user_item['username'];?>" />
				<input class="form-input" placeholder="New password" type="input" name="password" value="" />	

				<input class="form-btn" type="submit" value="Update"/>
			<?php echo form_close(); ?>		 		
		</div>
	</div>
</div>