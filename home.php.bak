<?php if (session_id() == '' || !isset($_SESSION)) session_start(); ?>

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
		
		<script src="./script/header.js"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<div id="branding" class="nav-height">
					<a href="home.php" aria-label="Licitix Logo">LicitiX</a>
				</div>
				<a class="search-nav nav-link nav-height" id="search-icon" href="#">
                    <span class="nav-icon gnav-ss-icon gnav-ss-search"></span>
                </a>
				<div class="search-wrapper" style="display:none">
                    <div class="search-inner with-pointer">
                        <form id="nav-search" class="search-nav expanded-search nav-height" method="GET" action="/search.php">
                            <div class="gnav-search-inner clearable">
                                <div class="search-input-wrapper text-field-wrapper">
                                    <input id="search-query" class="search-input dropdown-relative-positioned rounded" type="text" placeholder="Search for items" name="search_query" value="" autocomplete="off" autocorrect="off" autocapitalize="off">
                                    <div id="search-suggestions" style="display: none;"></div>
                                </div>
                                <div class="search-button-wrapper hide">
                                    <button class="btn btn-primary" type="submit" value="Search">
                                            Search
                                    </button>
                                </div>
                            </div>
                        
                        
                            <input id="search-js-router-enabled" type="hidden" value="true">
                        	<input type="hidden" value="all" name="search_type" id="search-type">
                        </form>                    
                    </div>
                </div>
				<nav class="account-nav nav-height">
					<ul>
<?php if(isset($_SESSION['email'])) { ?>
						<li class="activity">
							<a href="home.php" class="nav-link" title="Home">
	                            <span class="nav-icon"></span>
	                            <span class="text-link">
	                            	Home
	                            </span>
                        	</a>
                        </li>
						<li class="favorites">
							<a href="home.php" class="nav-link" title="Favorites">
	                            <span class="nav-icon"></span>
	                            <span class="text-link">
	                            	Favorites
	                            </span>
                        	</a>
                        </li>
						<li class="user-nav">
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

<?php } else { ?>
						<li class="sell-on-licitix-link no-separator">
	                        <a id="sell-on-licitix" class="sell-on-licitix-trigger nav-link" href="#" title="Sell on LictiX">
	                            <span class="sell-copy">
									Sell on LicitiX
	                            </span>
	                        </a>
                    	</li>
                    	<li class="register-link no-separator">
	                        <a id="register" class="inline-overlay-trigger register-header-action select-register nav-link" rel="nofollow" href="#" title="Register" role="button" onclick="show_login_register_form('register')">
	                            Register
	                        </a>
	                    </li>
	                    <li class="sign-in-link no-separator">
	                        <a id="sign-in" class="inline-overlay-trigger signin-header-action select-signin nav-link" rel="nofollow" href="#" title="Sign in" role="button" onclick="show_login_register_form('login')">
	                            Sign in
	                        </a>
	                    </li>
<?php }  ?>
						<li class="cart" >
							<a href="home.php" class="nav-link" title="Cart">
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
		                            <img class="avatar" src="<?php if(isset($_SESSION['profile_picture'])) { 
		                                						echo $_SESSION['profile_picture']; 
		                                					} else echo '../images/header/profile.png' ?>" style="background-size: 100px;" alt="">
		                            <div class="details">
		                                <p class="name"><?php if(isset($_SESSION['name'])) { 
		                                						echo $_SESSION['name']; 
		                                					} else if(isset($_SESSION['email'])) echo "Welcome " . $_SESSION['email'] ?></p>
		                                <div class="profile-link">
		                                	<span id="profile-link-label" >View profile</span>
		                                	<span class="gnav-icon gnav-right"></span>
		                                </div>
		                            </div>
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.php" id="sub-nav-user-menu-1">
		                            <span class="gnav-icon gnav-conversations"></span>
		                            Conversations
		                            <span id="convos-count" class="count hide" style="display: none;">0</span>
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.php" id="sub-nav-user-menu-2">
		                            Your bids
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.php" id="sub-nav-user-menu-3">
		                            Purchases and reviews
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.php" id="sub-nav-user-menu-4">
		                            Your listings
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.php" id="sub-nav-user-menu-5">
		                            Add an item
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.php" id="sub-nav-user-menu-6">
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
			    <div class="overlay">
				    <div id="inline-overlay" class="overlay-dialog" style="display:none">
				    	<div class="overlay-content">
				    		<ul class="tabs clear">
					            <li class="first active">
					                <a id="register-tab" href="#" onclick="activate_register_form('register-inputs', true, 'register-tab', 'sign-in-tab');">
					                    Register
					                </a>
					            </li>
					            <li class="" >
					                <a id="sign-in-tab" href="#" onclick="activate_register_form('register-inputs', false, 'sign-in-tab', 'register-tab');">
					                    Sign in
					                </a>
					            </li>
					        </ul>
					        <div class="forms">
						    	<form id="register-login-form" action="register.php" method="POST">
						    		<div class="register-inputs clear" id="for-testing">
										<div>
									        <label for="firstname-existing">First name</label>
									        <span class="input-error-message" id="firstname-existing-error" style="display: none;"></span>
									        <input type="text" autocorrect="off" autocapitalize="off" class="text" name="firstname" id="firstname-existing">
									    </div>
									    <div>
									        <label for="lastname-existing">Last name</label>
									        <span class="input-error-message" id="lastname-existing-error" style="display: none;"></span>
									        <input type="text" autocorrect="off" autocapitalize="off" class="text" name="lastname" id="lastname-existing">
									    </div>
									</div>
									<div class="register-inputs clear top-margin"></div>
						    		<div class="login-inputs">
							    		<div>
									        <label for="username-existing">Email or Username</label>
									        <span class="input-error-message" id="username-existing-error" style="display: none;"></span>
									        <input type="text" autocorrect="off" autocapitalize="off" class="text" name="username" id="username-existing">
									    </div>
									    <div>

									        <label for="password-existing">Password</label>
									        <span class="input-error-message" id="password-existing-error"></span>
									        <input type="password" class="text" name="password" id="password-existing">
									    </div>
									</div>
									<div class="register-inputs clear">
										<label for="retype-password-existing">Confirm Password</label>
									        <span class="input-error-message" id="retype-password-existing-error"></span>
									        <input type="password" class="text" name="password2" id="retype-password-existing">
									</div>
									

									<p class="submit">
								        <input type="submit" class="btn-primary submit-button" id="signin-button" data-default-text="Sign in" value="Sign in">
								    </p>
								    <div class="register-inputs clear top-margin"></div>
								    <p class="fineprint register-inputs clear">By clicking Register, you agree to LicitiX's Terms of Use and Privacy Policy. </p>
								    <!--
				                    <button type="button" class="btn" id="btn1" onclick="location.href='home.html'">
						            	Register
						            </button> 
						        -->
				                </form>
				                
				            </div>
			            </div>
				    </div>
				    <div id="exposeMask" onclick="hide_login_register_form()" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 9998; display: none; opacity: 0.6; background-color: rgb(221, 221, 221);"></div>
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

		<section id="showcase">
			<div class="container" >
				<h1>Find whatever you <br/>desire and take it!</h1>
				<div id ="searchbar" >

            		<form method="get" action="paginare.html">
                		<input type="search" id="search" placeholder="What are you searching for?" />
                		<button type="submit" class="search-button" >Search</button>
            		</form>
        		</div>
        		<div class="search-wrapper">
                    <div class="search-inner with-pointer">
                        <form id="section-search" class="search-nav expanded-search nav-height" method="GET" action="/search.php">
                            <div class="gnav-search-inner clearable">
                                <div class="search-input-wrapper text-field-wrapper">
                                    <input id="section-search-query" class="search-input dropdown-relative-positioned rounded" type="text" placeholder="What are you searching for?" name="search_query" value="" autocomplete="off" autocorrect="off" autocapitalize="off">
                                </div>
                                <div class="search-button-wrapper hide">
                                    <button class="btn btn-primary" type="submit" value="Search">
                                            Search
                                    </button>
                                </div>
                            </div>

                        </form>                    
                    </div>
                </div>
			</div>
		</section>

		<section id="boxes">
			<div class="container">
				<div class="box">
					<img src="./images/magnifier_step1.png">
					<h3>Search for what you love</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="box">
					<img src="./images/auction_step2.png">
					<h3>Get the best offer for it</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="box">
					<img src="./images/shopping_step3.png">
					<h3>Take it home with you</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</section>

		<br /><br /><br /><br />
		<br /><br /><br /><br />

		<footer>
			<p>LicitiX.com, Copyright &copy; 2017</p>
		</footer>
		
	</body>
</html>