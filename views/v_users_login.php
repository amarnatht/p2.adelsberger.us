<form method='POST' action ='/users/p_login'>

	Email<br>
	<input type='text' name='email'>

	<br><br>

	Password<br>
	<input type='password' name = 'password'>
	<br><br>

	<?php if(isset($error)): ?>
		<div class='error'>
			Login failed. Please double check your email and password.
		</div>

	<input type='submit' value='Log in'>


</form>