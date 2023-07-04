<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script href="bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="header__first-block">
			<a class="btn btn-primary <?php if(empty($_SESSION['user_id'])) echo'block-class' // Ссылка недоступна, если пальзователь неавторизован?>
			" href="../tasks/show" role="button">Tasks</a>
		</div>
		<h1>Task List</h1>
		<div class="header__second-block">
			<?php
			if(empty($_SESSION['user_id']))
			{
				echo '<a class="btn btn-primary" href="../account/login" role="button">Login</a>';
			}
			else
			{
				echo '<a class="btn btn-primary" href="../account/logout" role="button">Logout</a>';
			}
			
			?>
		</div>
	</header>
	<?php echo $content;?>
</body>
</html>