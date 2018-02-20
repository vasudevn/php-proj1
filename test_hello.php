<?php
ob_start();
require("index.php");
$result = ob_get_clean();

if( $result != 'Hello World Guys Good Morning welcome to this CI CD class final demo !!!' ) {
   exit(1);
}
exit(0);

