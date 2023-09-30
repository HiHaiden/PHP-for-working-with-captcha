<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Капча</title>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' type='text/css' />
		<style>#captchaAnswer{width:4rem; margin-left: 16px;}</style>
	</head>
	<body>
		<div class="container">
			<form method="post" action="cc.php" class="mt-5 col-md-6 mx-md-auto">
				<h2 for="nameFirst">Пожалуйста введите капчу &#129300;</h2>
				<div class="form-inline mb-sm-3">
					<div class="form-group">
						<img src="captcha.php" id="captchaImage" alt="Captcha Image">
					</div>
					<div class="form-group">
						<label for="captchaAnswer" class="sr-only">Ответ Капчи</label>
						<input type="text" class="form-control text-center" id="captchaAnswer" name="check">
					</div>
				</div>
				<button type="submit" name="submit" value="submit" class="btn btn-primary">Подтвердить &#10004;</button>
			</form>
		</div>
		<script type='text/javascript' src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
		<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
	</body>
</html> 