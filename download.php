<?php

$fh = fopen("database.txt", 'r');
$dir = 'database/';
// $readings =  scandir($dir);

print_r($readings);
$n = sizeof('$readings') + 2 ;
echo "Total no. of files present in Cloud is".$n-2 ;
for($i=0;$i<=$n ; $i++) {
  $link = $readings[$i];
echo "<br> <a href = 'database/$link'> $link </a>";
}
echo "<br><br> <h5> That's IT!!</h5>";

?>