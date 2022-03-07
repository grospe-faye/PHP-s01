<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>S01: PHP Basics and Selection Control Structures</title>
</head>
<body>
	<h1>Echoing Values</h1>

	<!-- Variables cannot be used in single quotes -->

	<p><?php echo 'Hello Batch 168' ?></p>
	<p><?php echo 'Good day $name! Your given email is $email'; ?></p>
	<p><?php echo "Good day $name! Your given email is $email"; ?></p>
	<p><?php echo PI; ?></p>

	<!-- Data Types -->

	<p><?php echo "State is $state in $country"; ?> </p>
	<p><?php echo $address; ?> </p>
	<p><?php echo $addressTwo; ?> </p>
	<p><?php echo $age; ?> </p>

	<!-- Normal Echoing of Boolean and Null Variables will not appear in the web output-->

	<p><?php echo $hasTravelledAbroad; ?></p>
	<p><?php echo $spouse; ?></p>

	<!-- gettype function return the type of a variable -->
	<p><?php echo gettype($hasTravelledAbroad); ?></p>
	<!-- var_dump gives detail about the variable -->
	<p><?php echo var_dump($spouse); ?></p>

	<p><?php echo $gradesObj->firstGrading; ?></p>
	<p><?php echo $personObj->address->state; ?></p>

	<p><?php echo $grades[3]; ?></p>
	<p><?php echo $grades[0]; ?></p>

	<h1>Operators</h1>
	<p> X: <?php echo $x; ?></p>
	<p> y: <?php echo $y; ?></p>

	<p>Is Legal Age: <?php echo var_dump($isLegalAge); ?></p>
	<p>Is Registered Age: <?php echo var_dump($isRegistered); ?></p>

	<h2>Arithmetic Operators</h2>

	<p>Sum: <?php echo $x + $y ?></p>
	<p>Difference: <?php echo $x - $y ?></p>
	<p>Product: <?php echo $x * $y ?></p>
	<p>Quotient: <?php echo $x / $y ?></p>

	<h2>Equality Operators</h2>

	<p>Loose Equality: <?php echo var_dump($x == '56.2') ?></p>
	<p>Strict Equality: <?php echo var_dump($x === '56.2') ?></p>
	<p>Loose Equality: <?php echo var_dump($x != '56.2') ?></p>
	<p>Strict Equality: <?php echo var_dump($x !== '56.2') ?></p>

	<h2>Greater/Lesser Operators</h2>

	<p>is Lesser: <?php echo var_dump($x < $y); ?></p>
	<p>is Greater: <?php echo var_dump($x > $y); ?></p>

	<h2>Logical Operators</h2>
	<p>Are all Requirements Met: <?php echo var_dump($isLegalAge && $isRegistered) ?></p>
	<p>Are some Requirements Met: <?php echo var_dump($isLegalAge || $isRegistered) ?></p>
	<p>Are some Requirements not Met: <?php echo var_dump(!$isLegalAge && !$isRegistered) ?></p>

	<h1>Functions</h1>

	<p>Full Name: <?php echo getFullName('John' , 'D', 'Smith'); ?></p>

	<h1>Selection Control Structures</h1>
	
	<h2>If-ElseIf-Else</h2>
	<p><?php echo determineTyphoonIntensity(12); ?></p>

	<h2>Ternary Sample (Is Underage?)</h2>

	<p>78: <?php echo var_dump(isUnderAge(78)); ?></p>
	<p>17: <?php echo var_dump(isUnderAge(17)); ?></p>

	<h2>Switch</h2>
	<p><?php echo determineComputerUser(8); ?></p>

</body>
</html>