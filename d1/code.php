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

// Functions
function getFullName($firstName, $middleInitial, $lastName) {
	return "$lastName, $firstName $middleInitial.";
}

// Selection Control Structure

// if-elseif-else statement
function determineTyphoonIntensity($windSpeed){
	if($windSpeed < 30){
		return 'Not a typhoon yet';
	}
	else if($windSpeed <= 61){
		return 'Tropical depression detected';
	} 
	else if($windSpeed >= 62 && $windSpeed <= 88){
		return 'Tropical storm detected';
	}
	else if($windSpeed >= 89 && $windSpeed <= 177){
		return 'Severe tropical storm detected';
	}
	else {
		return 'Typhoon detected';
	}
}

// Conditional (Ternary) Operator
function isUnderAge($age){
	return ($age < 18) ? true : false;
}

// Switch Statement
function determineComputerUser($computerNumber){
	switch ($computerNumber) {
		case 1:
			return 'Linus Torvalds';
			break;
		case 2:
			return 'Steve Jobs';
			break;
		case 3:
			return 'Sid Meier';
			break;
		case 4:
			return 'Albert Einstein';
			break;
		case 4:
			return 'Charles Babbage';
			break;
		default:
			return $computerNumber.' is out of bounds';
	}
}




