<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <link rel="icon" href="images/icon.png" />
        <title>LicitiX.com | Auction is life</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Buy or sell all types of items in our online auction">
        <meta name="keywords" content="auction site, auction online, buy, sell, auction shop">
        <meta name="authors" content="Alexandru Rusu, Claudia Lucasi, Cristian Iacob">

        <link rel="stylesheet" href="styles/style.css" type="text/css"/>

        <script type="text/javascript">
            function toggle_div_fun(id) {
               document.getElementById("btn1").style.display = 'none';
               document.getElementById("btn2").style.display = 'none';
               document.getElementById(id).style.display = 'block';
            }
        </script>
        
    </head>
    <body>
        <div class = "body-container">
            <div class ="searchbar">
                <form  method="get" action="search.php">
                    <input type="search" name = "search_query" id="search" placeholder="Search..." />
                    <input type="submit" style="position: absolute; left: -9999px"/>
                </form>
            </div>

            <div class ="container">
                <img src="images/logo_licitix2.png">
                <h2 class="sopet"> Welcome to our comunity ! <br>
                    You come with a need, we give you the solution</h2>
                    <button onclick="toggle_div_fun('form3');" class="btn" id="btn1">
                        Get Started
                    </button>
                    <button onclick="toggle_div_fun('form2');" class="btn" id="btn2">
                        Log In
                    </button>
                
                <form id="form2" action="login.php" method="POST">
                    <input type="text" name="email" id="ipt" placeholder="Email">
                    <input type="password" name="password" id="ipt" placeholder="Password">
                    <button type="submit" class="btn" id="btn1">
                        Log In
                    </button> 
                </form>
                
                <form id="form3" action="register.php" method="POST">
                    <input type="text" name="name" id="ipt" placeholder="Iacob Cristian">
                    <input type="text" name="email" id="ipt" placeholder="Email">
                    <input type="password" name="password" id="ipt" placeholder="Password">
                    <input type="text" name="adress" id="ipt" placeholder="Adress">
                    <button type="submit" class="btn" id="btn1">
                        Register
                    </button> 
                </form>
                <!--
                <script>
                    toggle_div_fun('form3');
                </script>
                -->
                
                <a href="#" id="best">The best auctions just a click away</a>
            </div>
            <div class="lalaland">
                <a href="#">Terms</a>
                <a href="#">Privacy</a>
                <a href="#">Support</a>
                <a href="contact.html">Contact</a>
                
                
            </div>
        </div>
    </body>
</html>
