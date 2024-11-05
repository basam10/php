<?php
echo "my name is basam \n ";

// $a = 2;
// $b = (string) $a;
// echo "$b";


$x = 20;
// if ($x == 12) {
//     echo "hello world";
// } else {
//     echo "hi world";
// }
// switch ($x) {
//     case 12:
//         echo 'hello world';
//         break;
//     case 20:
//         echo 'you got it right';
//         break;

//     default:
//         echo "invalid input";
//         break;
// }
$myarray = [1, 2, 3, 4];
$length = count($myarray);
for ($i = 0; $i < $length; $i++) {
    if ($myarray[$i] == 4) {
        echo "the current item is " . $myarray[$i];
    }
}
//echo count($myarray);
