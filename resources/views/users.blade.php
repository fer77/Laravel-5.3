<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@foreach ($users as $user)
		<li>{{ $user->name }}</li>
	@endforeach

	{{ $users->links() }}
</body>
</html>