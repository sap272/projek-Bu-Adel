<!-- // 34 -->
<?php

 $macam2 = array(121,"joko",44.99,"belajar php", true);

 echo $macam2[0];
 echo "<br>";
 echo $macam2[1];
 echo "<br>";
 echo $macam2[2];
 echo "<br>";
 echo $macam2[3];
 echo "<br>";
 echo $macam2[4];

// <!-- 35 -->

 $macam2 = array(121,"Joko",44.99,"Belajar Php");
 $macam2[10] = "Dunia1kom";
 $macam2[100] = 212;
 $macam2[1000] = 3.14;
 
 echo "<pre>";
 var_dump($macam2);
 echo "</pre>";

//  <!-- 36 -->
 $macam2 = array(121,"Joko",44.99,"Belajar Php");
 $macam2[] = "Dunia1kom";
 
 unset($macam2[0]);
 unset($macam2[2]);
 unset($macam2[3]);
 echo "<pre>";
 var_dump($macam2);
 echo "</pre>";
 ?>