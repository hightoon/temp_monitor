#!/usr/local/bin/php -q
<?php
	echo "start";
        $file = file_get_contents("php://stdin", "r");
        echo $file;
?>
