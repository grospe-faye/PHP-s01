<?php

function getFullAddress($country, $city, $province, $specificAddress) {
	return "$specificAddress, $province, $city, $country";
}

function getLetterGrade($grade){
	switch ($grade) {
		case ($grade >= 98 && $grade <=100):
			return $grade.' is equivalent to A+';
			break;
		case ($grade >= 95 && $grade <=97):
			return $grade.' is equivalent to A';
			break;
		case ($grade >= 92 && $grade <=94):
			return $grade.' is equivalent to A-';
			break;
		case ($grade >= 89 && $grade <=91):
			return $grade.' is equivalent to B+';
			break;
		case ($grade >= 86 && $grade <=88):
			return $grade.' is equivalent to B';
			break;
		case ($grade >= 83 && $grade <=85):
			return $grade.' is equivalent to B-';
			break;
		case ($grade >= 80 && $grade <=82):
			return $grade.' is equivalent to C+';
			break;
		case ($grade >= 77 && $grade <=79):
			return $grade.' is equivalent to C';
			break;
		case ($grade >= 75 && $grade <=76):
			return $grade.' is equivalent to C-';
			break;
		case ($grade < 75):
			return $grade.' is equivalent to F';
			break;
		default:
			return $grade.' is out of bounds';
	}
}