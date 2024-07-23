<?php
$hasil = (true and false);
var_dump($hasil); echo "<br/>";
$hasil = (true or false);
var_dump($hasil); echo "<br/>";
$hasil = (true xor false);
var_dump($hasil); echo "<br/>";
$hasil = false;
var_dump(!$hasil); echo "<br/>";
$hasil = (false or true &&  false);
var_dump($hasil); echo "<br/>";
$hasil = ('dunia1kom' and true);
var_dump($hasil); echo "<br/>";
$hasil = ('000' or false);
var_dump($hasil);
?>