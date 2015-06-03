<?php
$target = mktime(0, 0, 0, 12, 31, 2016) ;
$today = time () ;
$difference =($target-$today) ;
$days =(int) ($difference/86400) ;
print "Our event will occur in $days days<br>";
$endtime = time() + (60*60*24*2);  
print "Today $today endtime $endtime";
?>