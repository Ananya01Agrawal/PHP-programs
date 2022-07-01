<?php
$a = $_GET['str'];
echo "<body bgcolor=khaki>";
echo " <center><i> String length:".strlen($a)."<br>";
echo "String Reverse:".strrev($a)."<br>";
echo "String Conversion into Uppercase:".strtoupper($a)."<br>";
echo "String Conversion into Lowercase:".strtolower($a)."<br></i> </center>";
?>