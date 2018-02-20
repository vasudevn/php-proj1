<?php
ob_start();
require("index.php");
$result = ob_get_clean();

if( $result != 'This is GIT Jenkins Integrate Web' ) {
   exit(1);
}
exit(0);

