<?php
ob_start();
require("index.php");
$result = ob_get_clean();

if( $result != 'This is GIT Jenkins Integrate Web completed successfully' ) {
   exit(1);
}
exit(0);

