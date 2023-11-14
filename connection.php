<?php

/*En desarrollo - test - Producción */

$hostname_mysqli='localhost';
$username_mysqli=/*'divproweb'*//*id19324520_localhost*/'u108283599_divproweb2020';
$password_mysqli=/*'i3-7100U'*//*EPzy|=b)4~M*Jo|e*/'i7-7700K';
$database_mysqli=/*'divpro web'*/'u108283599_divproweb';

 $connection=mysqli_connect($hostname_mysqli,$username_mysqli,$password_mysqli,$database_mysqli);

 if (!$connection) {
 	die('Error Connect :'.mysqli_errno($connection));
 }

?>