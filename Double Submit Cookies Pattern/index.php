<!DOCTYPE html>
<html lang="en">

<head>
	<title>Assignment 1 - SSD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="jumbotron text-center">
		<h2>Assignment 1 Part Two - Double Submit Cookies Pattern</h2>
	</div>

	<div class="container">
		<div class="row">

			<form action="process.php" method="post">
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="username" class="form-control" id="username" name="username" required value="it14142024">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" required value="it14142024">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
	</div>

</body>

</html>