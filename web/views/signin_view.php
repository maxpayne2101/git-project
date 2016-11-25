<h1>Авторизация</h1>
<form action="login.<?=$config['prefix']?>" method="POST">
	<input type="text" placeholder="login" name="login" /><br>
	<input type="password" placeholder="passwd" name="passwd" /><br>
	<input type="checkbox" name="rememberme" />Запомнить меня<br>
	<input type="submit" name="signin" /><br>
</form>



