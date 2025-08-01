<?php
include("header.html");
?>
|----------------------------------------------------<br>
| BASIC STRING FUNCTIONS<br>
|----------------------------------------------------<br>
strlen($str); // Get string length <br>
strpos($haystack, $needle); // First occurrence <br>
strrpos($haystack, $needle); // Last occurrence <br>
substr($str, $start, $length); // Extract substring <br>
strtolower($str); // Lowercase<br>
strtoupper($str); // Uppercase<br>
ucfirst($str); // Uppercase first letter<br>
ucwords($str); // Uppercase words<br>
trim($str); // Trim both ends<br>
ltrim($str); // Trim left<br>
rtrim($str); // Trim right<br>
<br>
|----------------------------------------------------<br>
| STRING MANIPULATION<br>
|----------------------------------------------------<br>
str_replace($search, $replace, $subject); // Replace all<br>
str_ireplace($search, $replace, $subject); // Case-insensitive replace<br>
substr_replace($str, $replacement, $start); // Replace part<br>
str_repeat($str, $multiplier); // Repeat<br>
str_split($str, $length); // Split to array<br>
<br>
|----------------------------------------------------<br>
| SEARCHING & MATCHING<br>
|----------------------------------------------------<br>
str_contains($haystack, $needle); // PHP 8+<br>
str_starts_with($haystack, $needle); // PHP 8+<br>
str_ends_with($haystack, $needle); // PHP 8+<br>
preg_match($pattern, $subject); // Regex match<br>
preg_replace($pattern, $replacement, $subject); // Regex replace<br>
<br>
|----------------------------------------------------<br>
| FORMATTING & ENCODING<br>
|----------------------------------------------------<br>
number_format($number); // Format number<br>
htmlspecialchars($str); // Escape HTML<br>
html_entity_decode($str); // Decode HTML entities<br>
addslashes($str); // Escape quotes<br>
stripslashes($str); // Remove slashes<br>

<?php
include("footer.html")
?>