<?php
require 'bangilan.php';

$matt1 = new Bangilan();
$matt1->set_details(5, 10);
echo $matt1->get_details();
echo "<br>";

$matt2 = new Bangilan();
$matt2->set_details(20, 30);
echo $matt2->get_details();
echo "<br>";

$matt3 = new Bangilan();
$matt3->set_details(7, 8);
echo $matt3->get_details();
echo "<br>";
?>