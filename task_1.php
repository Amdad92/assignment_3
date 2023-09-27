<?php
/* Initialize text */
$text="The quick brown fox jumps over the lazy dog.";

//Covert string into lower case.
$textLowerCase=strtolower($text);

//Replace brown with red.
$textReplace=str_replace("brown","red",$textLowerCase);

//Print the modified text.
echo $textReplace;