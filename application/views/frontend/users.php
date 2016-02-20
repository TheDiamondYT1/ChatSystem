<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/users.css')?>">

<div class="content">
	<div class="title-bar">
		<div class="title">
			User managment
		</div>
	

		<a href="<?php echo site_url(); ?>users/add">
			<div class="create-btn">
				<i class="fa fa-plus fa-lg"></i>  Add
			</div>
		</a>
	</div>


	<div class="users">
		<?php foreach ($users as $user_item): ?>

		<div class="user">
			<div class="user-hld">
				<a href="<?php echo site_url('users/edit/'. $user_item['id']); ?>">
					<div class="user-title">
						<?php
						echo '<div class="user-name">';
						echo $user_item['username'];
						echo '</div>'; 
						if ($user_item['level'] == 1) {
							echo '<div class="user-rank admin">&nbsp;&nbsp;&nbsp; admin</div>';
						} else {
							echo '<div class="user-rank">&nbsp;&nbsp;&nbsp; member</div>';
						}

						?>

					</div>
				</a>
			</div>

			<div class="user-delete">
				<a href="<?php echo site_url('users/delete/'. $user_item['id']); ?>">
					<i class="fa fa-close fa-lg"></i>
				</a>
			</div>

			<div class="user-edit">
				<a href="<?php echo site_url('users/edit/'. $user_item['id']); ?>">
					<i class="fa fa-edit fa-lg"></i>
				</a>
			</div>
	
		</div>

		<div class="hr"></div>
		
<?php endforeach; ?>

<?php echo $this->session->flashdata('msg'); ?>
	</div>
</div>
