<?php
		session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="icon" href="images/icon.png" />
		<title>LicitiX.com | Auction is life</title>
		<meta name="description" content="Buy or sell all types of items in our online auction">
		<meta name="keywords" content="auction site, auction online, buy, sell, auction shop">
		<meta name="authors" content="Alexandru Rusu, Claudia Lucasi, Cristian Iacob">

		<link rel="stylesheet" href="./styles/global.css" type="text/css"/>
		<link rel="stylesheet" href="./styles/header.css" type="text/css"/>
		<link rel="stylesheet" href="./styles/nav_bar.css" type="text/css"/>
		<link rel="stylesheet" href="./styles/home.css" type="text/css"/>
		<script type="text/javascript">
			document.onclick = function(e){
				var settings = document.getElementById('user-nav-id');
			    var target = (e && e.target) || (event && event.srcElement);
			    var display = 'none';

			    while (target.parentNode) {

			        if (target == settings) {
			        	if (document.getElementById('sub-nav-user-navigation').style.display == 'block')
			            	display ='none';
			            else 
			            	display = 'block'
			            break;
			        }
			        target = target.parentNode;
			    }

				document.getElementById('sub-nav-user-navigation').style.display = display;

			}
		</script>
	</head>
	<body>
		<header>
			<div class="container">
				<div id="branding" class="nav-height">
					<a href="home.html" aria-label="Licitix Logo">LicitiX</a>
				</div>
				<nav class="account-nav nav-height">
					<ul>
						<li class="activity">
							<a href="home.html" class="nav-link" title="Home">
	                            <span class="nav-icon"></span>
	                            <span class="text-link">
	                            	Home
	                            </span>
                        	</a>
                        </li>
						<li class="favorites">
							<a href="home.html" class="nav-link" title="Favorites">
	                            <span class="nav-icon"></span>
	                            <span class="text-link">
	                            	Favorites
	                            </span>
                        	</a>
                        </li>
						<li class="user-nav" >
							<a href="javascript:void(0)" class="nav-link" title="Account" id="user-nav-id">
	                            <span class="nav-icon"></span>
	                            <span class="text-link">
	                            	<span class="text-link-copy">
	                            	You
	                            	</span>
	                            	<span class="gnav-icon gnav-dropdown"></span>
	                            </span>
                        	</a>
						</li>
						<li class="cart">
							<a href="home.html" class="nav-link" title="Cart">
	                            <span class="nav-icon"></span>
	                            <span class="text-link">
	                            	Cart
	                            </span>
                        	</a>
						</li>
					</ul>
				</nav>
				<div class="sub-navs">
    
		            <div class="sub-nav user" id="sub-nav-user-navigation" >
		                <ul>
		                    <li class="bottom-divider no-extra-space gnav-user with-pointer">
		                        <a  href="viewprofile.php" id="sub-nav-user-menu-0">
		                            <img class="avatar" src="https://img1.etsystatic.com/175/0/23958548/iusa_75x75.50054149_nnn8.jpg" alt="">
		                            <div class="details">
		                                <p class="name">Denisa Laura</p>
		                                <div class="profile-link">
		                                	<span id="profile-link-label" >View profile</span>
		                                	<span class="gnav-icon gnav-right"></span>
		                                </div>
		                            </div>
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.html" id="sub-nav-user-menu-1">
		                            <span class="gnav-icon gnav-conversations"></span>
		                            Conversations
		                            <span id="convos-count" class="count hide" style="display: none;">0</span>
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.html" id="sub-nav-user-menu-2">
		                            Your bids
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.html" id="sub-nav-user-menu-3">
		                            Purchases and reviews
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.html" id="sub-nav-user-menu-4">
		                            Your listings
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="add_item.html" id="sub-nav-user-menu-5">
		                            Add an item
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.html" id="sub-nav-user-menu-6">
		                            Account settings
		                        </a>
		                    </li>
		                            
		                    <li class="top-divider" >
		                        <a class="sub-nav-text-link sign-out" href="signout.php" id="sub-nav-user-menu-7">
		                            Sign out
		                        </a>
		                    </li>
		                </ul>
		            </div>
	                
			    </div>
			</div>

		</header>

		<nav id="menubar">
			<div class="container">
	            <a href="paginare.php?filtru=Fashion">Fashion</a>
	            <a href="paginare.php?filtru=Electronics">Electronics</a>
	            <a href="paginare.php?filtru=Art">Art</a>
	            <a href="paginare.php?filtru=Sporting Goods">Sporting Goods</a>
	            <a href="paginare.php?filtru=Motors">Motors</a>
	            <a href="paginare.php?filtru=Estate">Estate</a>
	            <a href="paginare.php?filtru=Luxurya">Luxurya</a>
	            <a href="paginare.php?filtru=Antiques">Antiques</a>
	            <a href="paginare.php?filtru=Collectibles">Collectibles</a>
        	</div>
        </nav>

<?php
		$conn = mysql_connect("sql11.freemysqlhosting.net", "sql11178361","NIK1rC4p5q" ) OR DIE('Unable to connect, fuck my life! ');
		mysql_select_db("sql11178361", $conn);

		if (!$conn) {
	    	die('Eșec la conectare: ' . mysql_error());
		}
		else
		{
			
					$email = $_SESSION['email'];

			$result = mysql_query("SELECT * FROM sql11178361.users where email = '$email'",$conn);


				while($row3 = mysql_fetch_array($result))
				{ 
				$name=$row3['name'];
				$email=$row3['email'];
				$address=$row3['adress'];
				}
		}
?>

 <form action="update_user_information.php"" method="POST" enctype="multipart/form-data">
 <strong><h1>Edit your profile</h1></strong><br>
     <fieldset>
        <legend> Your personal details</legend>
        Name :<br><textarea name="name" rows="2" cols="50"><?php echo $name ?></textarea><br><br>
        Email :<br><textarea name="email" rows="2" cols="50"><?php echo $email ?></textarea><br><br>
        Old password :<br><input type="password" name="psw_old"><br><br>
        Change password :<br><input type="password" name="psw"><br><br>
        Address :<br><textarea name="address" rows="2" cols="50"><?php echo $address ?></textarea><br><br>
    </fieldset><br><br>
   <input type="submit" name="sumit" value="Update" /><br><br><br><br>
   </form>

   <style type="text/css">
   	form {
  width: 1000px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
   </style>