<?php
    function menu(){
?>

<!DOCTYPE html>
<html lang="en">

	<link rel="stylesheet" href="CSS/menu.css">

	<title>Site</title>

	<div class="header">

		<a href="index.php"> <img class="Logo" src="images/Logo.png" alt="Logo"> </a>

		<ul id="menu">

			<?php
			

			session_start();
			
		
		
			if(isset($_SESSION['userID'])){
				?>

			<li><a href="#">Animes / Games</a>
				<ul>
					<li><a href="bangdream.php">Bang Dream</a></li>
					<li><a href="lovelive.php">Love Live</a></li>
				</ul>
			</li>
			
			<li><a href="#">Love Live bands</a>
				<ul>
					<li><a href="muse.php">Muse</a></li>
					<li><a href="aqours.php">Aqours</a></li>
					<li><a href="niji.php">Nijigisaki</a></li>
					<li><a href="liella.php">Liella</a></li>
				</ul>
			</li>
			
			<li><a href="#">Bang Dream bands</a>
				<ul>
					<li><a href="poppinparty.php">Poppin' Party</a></li>
					<li><a href="afterglow.php">Afterglow</a></li>
					<li><a href="pasupare.php">Pastel Palettes</a></li>
					<li><a href="roselia.php">Roselia</a></li>
					<li><a href="hhp.php">Hello Happy World</a></li>
				</ul>
			</li>

			<li><a href="#">Profile</a>
				<ul>
					<li><a href="user.php">My profile</a></li>
				</ul>
			</li>

				<?php
			}
			?>

			
			<li><a href="#">Account</a>
				<ul>
					<li><a href="login.php">Log in</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</li>	

		</ul>
		
	</div>

<?php
    }
?>