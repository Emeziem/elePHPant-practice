<?php
$my_str = 'Nigeria';

echo "Hello, $my_str!<br />";
echo 'Hello, $my_str!<br />';
echo "Hello,\t $my_str!<br />";

echo 'I\'ll be back soon.';

echo "<br />";

echo "<br />Length Function <br />";
$my_str2 = 'I am a very good music lover, but you are not.';
echo " The length of the String is: ";
echo strlen($my_str2);
echo "<br />";

echo "<br />Word Count <br />";
$my_str3 = 'I am a very good music lover, but you are not.';
echo " The length of the word is: ";
echo str_word_count($my_str3);
echo "<br />";

echo "<br />Replacing Text within String <br />";
$my_str4 = 'I am a very good music lover, but you are not.';
echo " We are replacing good with perfect: <br />";
// echo str_replace("search", "replace", subject); subject is the variable name.
echo str_replace("good", "perfect", $my_str4);
?>