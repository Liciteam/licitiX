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
						<li class="user-nav">
							<a href="add_item.html" class="nav-link" title="Account">
	                            <span class="nav-icon"></span>
	                            <span class="text-link">
	                            	Account
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
			</div>
		</header>


        <nav id="menubar">
			<div class="container">
	            <a href="paginare.html">Fashion</a>
	            <a href="paginare.html">Electronics</a>
	            <a href="paginare.html">Art</a>
	            <a href="paginare.html">Sporting Goods</a>
	            <a href="paginare.html">Motors</a>
	            <a href="paginare.html">Estate</a>
	            <a href="paginare.html">Luxurya</a>
	            <a href="paginare.html">Antiques</a>
	            <a href="paginare.html">Collectibles</a>
        	</div>
        </nav>


        
 		<?php
 		echo'2';
 		echo $content; ?>
		
		<br><br><br><br>
		    <footer id = "footer">
  <P class="blocktext">© Copyright 2017, All Rights Reserved</p>
</footer>
    </body>
</html>
