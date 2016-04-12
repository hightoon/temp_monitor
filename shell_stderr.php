#!/usr/bin/php -q
<?php
        $STDERR = fopen("php://stderr", "w");
        fwrite($STDERR, "Output #1.");
        fclose($STDERR);
?>
