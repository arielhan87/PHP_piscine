<?php
	session_start();
	require("prod_display.php");
	require("category_display.php");
?>

<DOCTYPE! html>
<head>
	<title>StoreName</title>
	<link rel="stylesheet" href="style/index.css" />
	<script type="text/javascript" src="search.js"></script>
</head>
<body>
	<div id="header">
	<div class="dropdown">
	  <button class="dropbtn"><a href="#"> All </a></button>
	  <div class="dropdown-content">
	    <a href="#">cloths</a>
	    <a href="#">electronics</a>
	    <a href="#">shoes</a>
	  </div>
	</div>
		<div id="header-container">

			<div id="nav-container">

		        <?php
		        
		            if ($_SESSION["loggued_on_user"] == "")
		            {
		                echo '<a class=\'navbar\' href="login.php?referer=index.php">Login</a>';
		                echo '<a class=\'navbar\' href="create.php?referer=index.php">Create Account</a>';
		            }
		            else 
		            {
		            	if ($_SESSION["admin"] != "")
		            		echo '<a class=\'navbar\' href="admin.php">Admin</a>';
		                echo '<a class=\'navbar\' href="logout.php">Logout</a>';
		            }
		        ?>
		        <a class="navbar" href="modif.php">Change Password</a>
		        <a class="navbar" href="basket.php">Basket</a>
	         </div>
	        </div>
    </div>

	<div id="main">
		<div id="products">
			<?php
				display_products($_GET['category']);
			?>
		</div>
	</div>


</body>
