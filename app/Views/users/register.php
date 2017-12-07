<?php //require_once APP_PATH."Views/layouts/header.php"; ?>



<form action="/users/register" method="post">
	
Username : <br>
<input type="text" name="username" required> <br>
Password : <br>
<input type="password" name="password" required> <br>
Retype Password : <br>
<input type="password" name="repassword" required> <br>
Fullname : <br>
<input type="text" name="fullname"> <br>
<input type="submit" name="register" value="Register">

</form>


<?php //require_once APP_PATH."Views/layouts/footer.php"; ?>