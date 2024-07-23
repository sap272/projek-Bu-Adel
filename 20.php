<!-- 19 -->
<?php
$a = 100;

function test(){
    $a = 500;
    echo "$a <br>";
}
echo "$a <br>";
test();
echo "$a <br>";
?>

 <!-- 20 -->
<?php
$a = 100;

function test(){
    global $a;
    $a = 500;
    echo "$a <br>";
}
echo "$a <br>";
test();
echo "$a <br>";
?>

<!-- 21 -->
 <?php
 function coba() {
    $a =0;
    $a = $a+1;
    return "ini adalah pemanggilan ke-$a fungsi coba() <br />";
 }

 echo coba();
 echo coba();
 echo coba();
 echo coba();

 ?>

 <!-- 22 -->
<?php
function coba(){
    static $a = 0;
    $a = $a+1;
    return "ini adalah pemanggilan ke-$a fungsi coba() <br />";

 echo coba();
 echo coba();
 echo coba();
 echo coba();
}

?>