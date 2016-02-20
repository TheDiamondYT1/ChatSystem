<div class="content">
	<div class="title-bar">
		<div class="title">
			Posts
		</div>
	</div>

	<div class="form">
		<div class="form-inner">
			<div class="form-title">Add user</div>

			<?php echo validation_errors(); ?>
			<?php echo form_open('users/add'); ?>
				<input class="form-input" placeholder="Username" type="input" name="username" />
				<input class="form-input" placeholder="Password" type="input" name="password" />

				<input class="form-btn" type="submit" value="Add user"/>
			<?php echo form_close(); ?>
			 		
		</div>
	</div>
</div>

 </body>
</html>