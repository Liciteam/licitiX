<form id="form3" action="update.php" method="POST">
					<input type="hidden" name="user_id" value="<?php echo $_GET['user_id'] ?>" /><br>
                    <input type="text" name="name" id="ipt" placeholder="Iacob Cristian"><br>
                    <input type="text" name="email" id="ipt" placeholder="Email"><br>
                    <input type="password" name="password" id="ipt" placeholder="Password"><br>
                    <input type="text" name="adress" id="ipt" placeholder="Adress"><br>
                    <button type="submit" class="btn" id="btn1">
                        Modify
                    </button> 
</form>