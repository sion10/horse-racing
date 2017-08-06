<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta author="Jason R. Carrete">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="/img/favicon.png">
		<link rel="stylesheet" href="/css/main.css">
	</head>
	<body>
		<main>
			<form id="login-form" method="post" action="/index.php">
				<div class="row">
					<label for="username">Username</label>
					<input id="username" name="username" type="text">
				</div>
				<div class="row">
					<label for="password">Password</label>
					<input id="password" name="password" type="password">
				</div>
				<div class="row">
					<button>Login/Register</button>
				</div>
			</form>
		</main>
	</body>
</html>
