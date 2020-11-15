<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <script src="../assets/js/functions.js"></script>
    <?php require_once '../partial/plantilla.php' ?>
	<title>invest</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<input type="number" name="amount" required placeholder="Enter how much you want to invest">
		<input type="text" name="mss" placeholder="A short message to the owner">

		<input type="submit" name="invest" value="invest">

	</form>
<?php

	require_once '../models/conection.php';

	if (isset($_POST['invest'])) {
		
		$amount = $_POST['amount'];
		$mss    = $_POST['mss'];

		sql = "SELECT budget, goal "

	}

?>
</body>
</html>