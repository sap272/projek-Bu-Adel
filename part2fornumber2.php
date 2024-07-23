<!-- 37 -->
<?php

$koordinat = array(
    array(8,2),
    array(2,4),
    array(1,7)
);
echo $koordinat[0][0];
echo "<br>";
echo $koordinat[0][1];
echo "<br>";
echo $koordinat[2][1];
echo "<br>";
?>

<!-- 37a -->
<?php

$koordinat = array[[8,2],[2,4],[1,7]];
echo $koordinat[0][0];
echo "<br>";
echo $koordinat[0][1];
echo "<br>";
echo $koordinat[2][1];
echo "<br>";
?>

<!-- 38 -->
<?php

$koordinat = array[[8,2],[2,4],[1,7]];

echo "<pre>";
print_r($koordinat);
echo "</pre>";
?>

<!-- 38a -->
<?php

$koordinat = [
    [
        ["A"],["B"]
    ],
    [
        ["C"],["D"]
    ],
];

echo $koordinat[0][0][0];
echo "<br>";
echo $koordinat[0][1][0];
echo "<br>";
echo $koordinat[1][0][0];
echo "<br>";
echo $koordinat[1][1][0];
echo "<br>";
?>

