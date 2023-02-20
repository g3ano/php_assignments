<?php

$admins = ['asx', 'ghano', 'gomora'];

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	echo "the request method is POST, and the username is  $username";
	echo '<br>';
	foreach ($admins as $admin) {
		if ($username === $admin) {
			echo "$username, you're an admin";
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic form</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="username">
    <input type="submit" value="send" name="submit">
  </form>
</body>

</html>