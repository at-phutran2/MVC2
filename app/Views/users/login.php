<?php require_once APP_PATH."Views/layouts/header.php"; ?>



<form action="/users/login" method="post">
	
Username : <br>
<input type="text" name="username" required> <br>
Password : <br>
<input type="password" name="password"> <br>
<input type="submit" name="login" value="Login">

</form>


<?php require_once APP_PATH."Views/layouts/footer.php"; ?>