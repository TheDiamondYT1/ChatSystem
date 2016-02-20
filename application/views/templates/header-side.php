<html>
<head>
                
    <link rel="stylesheet" type="text/css" href="../css/panel/header-side.css">
    <link rel="stylesheet" type="text/css" href="css/panel/header-side.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/header-side.css')?>">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/panel/create.css">
    <link rel="stylesheet" type="text/css" href="../css/panel/create.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<title>Dashboard</title>
</head>
<body>

<div class="nav-side">
	<div class="nav-side-logo">
		Panel
	</div>

	<h2><?php echo $username; ?></h2>
	<!-- dashboard  -->
	<a href="<?php echo site_url(); ?>home">
		<div id="home" class="nav-side-btn">
			<div class="nav-side-btn-hvr"></div>

			<div class="nav-side-btn-icon">
				<i class="fa fa-home fa-lg"></i>	
			</div>

			<div class="nav-side-btn-txt">
				Home
				<div class="nav-side-select-h"></div>
			</div>
		</div>
	</a>
	<!-- dashboard  -->
	<a href="<?php echo site_url(); ?>chat">
		<div id="home" class="nav-side-btn">
			<div class="nav-side-btn-hvr"></div>

			<div class="nav-side-btn-icon">
				<i class="fa fa-comment fa-lg"></i>	
			</div>

			<div class="nav-side-btn-txt">
				Chat
				<div class="nav-side-select-h"></div>
			</div>
		</div>
	</a>
	<!-- dashboard  -->

<?php if($level == 0) {} else {
	echo '
	<a href="';

	echo site_url();
echo '
	users">
		<div id="home" class="nav-side-btn">
			<div class="nav-side-btn-hvr"></div>

			<div class="nav-side-btn-icon">
				<i class="fa fa-users fa-lg"></i>	
			</div>

			<div class="nav-side-btn-txt">
				User Managment
				<div class="nav-side-select-h"></div>
			</div>
		</div>
	</a>
	';
}
?>

	<!-- logout 
	<a href="<?php echo site_url(); ?>profile">
		<div id="home" class="nav-side-btn">
			<div class="nav-side-btn-hvr"></div>

			<div class="nav-side-btn-icon">
				<i class="fa fa-user fa-lg"></i>	
			</div>

			<div class="nav-side-btn-txt">
				Profile
				<div class="nav-side-select-h"></div>
			</div>
		</div>
	</a>-->

	<!-- logout -->
	<a href="<?php echo site_url(); ?>home/logout">
		<div id="home" class="nav-side-btn">
			<div class="nav-side-btn-hvr"></div>

			<div class="nav-side-btn-icon">
				<i class="fa fa-sign-out fa-lg"></i>	
			</div>

			<div class="nav-side-btn-txt">
				Logout
				<div class="nav-side-select-h"></div>
			</div>
		</div>
	</a>


	<div class="nav-side-power">
		<a href="http://hostinfinite.com">Powered by Hostinfinite</a>
	</div>
</div>

<div  class="nav-side-m">
	<div  class="nav-side-m-logo">
		<i class="fa fa-gg-circle fa-4x"></i>
	</div>

	<a href="<?php echo site_url(); ?>home">
		<div id="home-m" class="nav-side-m-btn">
			<i class="fa fa-dashboard fa-3x"></i>
		</div>
	</a>

	<a href="<?php echo site_url(); ?>chat">
		<div id="home-m" class="nav-side-m-btn">
			<i class="fa fa-comment fa-3x"></i>
		</div>
	</a>

	<a href="<?php echo site_url(); ?>profile">
		<div id="home-m" class="nav-side-m-btn">
			<i class="fa fa-envelope-o fa-3x"></i>
		</div>
	</a>

	<a href="<?php echo base_url(); ?>tasks">
		<div id="home-m" class="nav-side-m-btn">
			<i class="fa fa-thumb-tack fa-3x"></i>
		</div>
	</a>

	<a href="<?php echo site_url(); ?>home/logout">
		<div id="home-m" class="nav-side-m-btn">
			<i class="fa fa-sign-out fa-3x"></i>
		</div>
	</a>
</div>