<?php
 echo "<h1> REFRESH PAGE </h1>" ;
 $file = 'count.txt' ;
 $c = file_get_contents($file) ;
 file_put_contents($file, $c+1);
 echo "The number of users visited : ".$c ;
?>]

<!-- Write a php program to sort the students record which are sorted in the database using selection sort -->