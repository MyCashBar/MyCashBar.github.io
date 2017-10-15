<?php
$ip = getenv ('REMOTE_ADDR');
$date=date("j F, Y, g:i a");
$name = $_POST['id'];
$fp = fopen('stat.txt', 'a');
fwrite($fp,'Kod: ' .$name.  ' Date and Time:' .$date. ' IP: ' .$ip. "\n");
fclose($fp);

?>