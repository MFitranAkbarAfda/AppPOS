<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="{{ route('postlogin') }}" method="post">
		{{ csrf_field() }}
		<div class="lor">
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div class="lor">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<button>login</button>
	</form>

</body>
</html>