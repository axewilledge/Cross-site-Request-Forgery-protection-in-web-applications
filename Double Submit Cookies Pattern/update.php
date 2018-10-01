<?php 

if(isset($_POST['address'], $_POST['hiddenToken'])){

    $address   = $_POST['address'];
    $valid = false;

    // 6) Extract the received CSRF token value
    $hiddenToken   = $_POST['hiddenToken'];

    // 6) Obtain the token cookie and compare that with the received token value.
    if(isset($_COOKIE['tokenID'])){
        $tokenCookie = $_COOKIE['tokenID'];
        if($tokenCookie == $hiddenToken){
            $valid = true;
        }
    }

}

?>

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
</script>

<body>

	<div class="jumbotron text-center">
		<h2>Assignment 1 Part Two - Double Submit Cookies Pattern</h2>
	</div>

	<div class="container">
		<div class="row">

			<?php 
                // 6) If the received CSRF token is valid, show success message. 
                // If not show error message.
                if($valid){
                    echo '<h2 style="color:green;">Token Matched! Update Success! </h2>';
                }else {
                    echo '<h2 style="color:red;">Token Error! Update Fail! </h2>';
                }
            ?>

		</div>
	</div>

</body>

</html>