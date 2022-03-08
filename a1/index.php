<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>S01: PHP Basics and Selection Control Structures</title>
</head>
<body>

	<h1>Full Address</h1>
	<p><?php echo getFullAddress('Philippines' , 'Metro Manila', 'Quezon City', '3F Caswynn Bldg., Timog Avenue'); ?></p>
	<p><?php echo getFullAddress('Philippines' , 'Metro Manila', 'Makati City', '3F Enzo Bldg., Buendia Avenue'); ?></p>

	<h1>Letter-Based Grading</h1>
	<p><?php echo getLetterGrade(87); ?></p>
	<p><?php echo getLetterGrade(94); ?></p>
	<p><?php echo getLetterGrade(74); ?></p>
	

</body>
</html>