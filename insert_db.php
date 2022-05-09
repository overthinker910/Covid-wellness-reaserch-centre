<?php
require("include/dbinfo.php");
$link=mysqli_connect($host,$user,$pass)or die(errorReport(mysqli_error()));
mysqli_select_db($link,$db)or die(errorReport(mysqli_error()));
mysqli_query($link,"insert into Room_Given values (\"Z1\",\"P005\",\"2013-03-31\");");
mysqli_query($link,"insert into Room_Given values (\"Z2\",\"P002\",\"2013-03-23\");");
mysqli_query($link,"insert into Room_Given values (\"Z3\",\"P003\",\"2013-04-15\");");
?>