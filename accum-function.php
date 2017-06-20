<?php

/*
The examples below show you how to write function accum:

Examples:

accum("abcd");    // output: "A-Bb-Ccc-Dddd"
accum("RqaEzty"); // output: "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt");    // output: "C-Ww-Aaa-Tttt"

The parameter of accum is a string which includes only letters from a..z and A..Z.
*/

// write it below:

function accum($s) {
	$parts = [];

	foreach (str_split($s) as $index => $part) {
	  $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
	}

	return implode('-', $parts);
}

?>