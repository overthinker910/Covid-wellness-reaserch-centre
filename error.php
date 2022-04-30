<?php
require("include/dbinfo.php");
$link=mysqli_connect($server,$user,$pass)or die(errorReport(mysqli_error()));
mysqli_select_db($db,$link)or die(errorReport(mysqli_error()));
mysqli_query("delete from Session");
?>