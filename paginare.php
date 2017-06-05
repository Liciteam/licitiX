<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width">
        <link rel="icon" href="images/icon.png" />
        <title>Items - LicitiX</title>
        
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Buy or sell all types of items in our online auction">
        <meta name="keywords" content="auction site, auction online, buy, sell, auction shop">
        <meta name="authors" content="Alexandru Rusu, Claudia Lucasi, Cristian Iacob">

		<link rel="stylesheet" href="./styles/global.css" type="text/css"/>
		<link rel="stylesheet" href="./styles/header.css" type="text/css"/>
		<link rel="stylesheet" href="./styles/nav_bar.css" type="text/css"/>
        <link rel="stylesheet" href="./styles/paginare.css" type="text/css"/>
        <link rel="stylesheet" href="./styles/footer.css" type="text/css"/>

    </head>

    <body>


		<header>
			<div class="container">
				<div id="branding" class="nav-height">
					<a href="home.html" aria-label="Licitix Logo">LicitiX</a>
				</div>
				<a class="search-nav nav-link nav-height" id="search-icon" href="#">
                    <span class="nav-icon gnav-ss-icon gnav-ss-search"></span>
                </a>
				<div class="search-wrapper">
                    <div class="search-inner with-pointer">
                        <form id="nav-search" class="search-nav expanded-search nav-height" method="GET" action="search.php">
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
						<li class="activity " >
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
						<li class="user-nav"  >
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


						<li class="sell-on-licitix-link no-separator" style="display:none">
	                        <a id="sell-on-licitix" class="sell-on-licitix-trigger nav-link" href="#" title="Sell on LictiX">
	                            <span class="sell-copy">
									Sell on LicitiX
	                            </span>
	                        </a>
                    	</li>
                    	<li class="register-link no-separator" style="display:none">
	                        <a id="register" class="inline-overlay-trigger register-header-action select-register nav-link" rel="nofollow" href="#" title="Register" role="button">
	                            Register
	                        </a>
	                    </li>
	                    <li class="sign-in-link no-separator" style="display:none">
	                        <a id="sign-in" class="inline-overlay-trigger signin-header-action select-signin nav-link" rel="nofollow" href="#" title="Sign in" role="button">
	                            Sign in
	                        </a>
	                    </li>
						<li class="cart" >
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
		                        <a  href="home.html" id="sub-nav-user-menu-0">
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
		                        <a class="sub-nav-text-link" href="home.html" id="sub-nav-user-menu-5">
		                            Add an item
		                        </a>
		                    </li>
		                    <li>
		                        <a class="sub-nav-text-link" href="home.html" id="sub-nav-user-menu-6">
		                            Account settings
		                        </a>
		                    </li>
		                            
		                    <li class="top-divider" >
		                        <a class="sub-nav-text-link sign-out" href="home.html" id="sub-nav-user-menu-7">
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
	            <a href="paginare.php?filtru=Sporting_Goods">Sporting Goods</a>
	            <a href="paginare.php?filtru=Motors">Motors</a>
	            <a href="paginare.php?filtru=Estate">Estate</a>
	            <a href="paginare.php?filtru=Luxurya">Luxurya</a>
	            <a href="paginare.php?filtru=Antiques">Antiques</a>
	            <a href="paginare.php?filtru=Collectibles">Collectibles</a>
        	</div>
        </nav>
        <?php
        $filtru = $_GET['filtru'];
        include 'list.php';
        ?>

		<br><br><br><br>
		    <footer id = "footer">
  <P class="blocktext">© Copyright 2017, All Rights Reserved</p>
</footer>
    </body>
</html>
