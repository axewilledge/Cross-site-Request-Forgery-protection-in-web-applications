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

<script>
	$(function() {
		// 4) Ajax call via a javascript, which invokes the endpoint for obtaining the CSRF token
		// created for the session
		$.ajax({
			type: 'POST',
			url: 'get_csrf_token.php',
			success: function(result) {
				const res = JSON.parse(result);
				console.log(res.token);
				// 5) Add a new hidden field that has the value of the received CSRF token
				document.getElementById('hiddenToken').value = res.token;
			}
		});
	});
</script>

<body>

	<div class="jumbotron text-center">
		<h2>Assignment 1 Part One - Synchronizer Token Pattern</h2>
	</div>

	<div class="container">
		<div class="row">

			<h2>Login Success</h2>
			<h3>Update the address</h3>

			<form action="update.php" method="post">

				<div class="form-group">
					<input type="text" class="form-control" name="address" id="address" value="SLIIT, Kaduwela road, Malabe">
				</div>

				<div class="form-group">
					<input type="hidden" class="form-control" id="hiddenToken" name="hiddenToken">
				</div>

				<button type="submit" class="btn btn-primary">Update</button>

			</form>

		</div>
	</div>

</body>

</html>