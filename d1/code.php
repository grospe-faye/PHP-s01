<?php
// PHP Comments
// Single line
/*
	Multi line
*/

// Variables - used to store values or contain data
// Variables in PHP are defined using the dollar notation before the name of the variable.
$name = 'John Smith';
$email = 'johnsmith@mail.com';

// Constants
// Defined using the define() function
define('PI', 3.1415);

// Data Types

// String
$state = 'New York';
$country = 'United States of America';
$address = $state.', '.$country; //Concatenation via dot notation
$addressTwo = "$state, $country"; //Concatenation cia double quotes

// Integers
$age = 31;
$headcount = 26;

// Floats
$grade = 98.2;
$distanceInKm = 2562.23;

// Boolean
$hasTravelledAbroad  = false;
$haveSymptoms = true;

// Null
$spouse = null;
$middleName = null;

// Array
$grades = array(98.7, 92.1, 90.2, 94.6);

// Objects
$gradesObj = (object)[
	'firstGrading' => 98.7,
	'secondGrading' => 92.1,
	'thirdGrading' => 94.6,
	'fourthGrading' => 90.2
];

$personObj = (object)[
	'fullName' => 'John Smith',
	'isMarried' => false,
	'age' => 35,
	'address' => (object)[
		'state' => 'Washington DC',
		'country' => 'United States of America'
	]
];

// Operators

// Assignment Operators
$x = 56.2;
$y = 912.6;

$isLegalAge = true;
$isRegistered = false;




