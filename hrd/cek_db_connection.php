<?php
include 'db_connection.php';
 
$conn = OpenCon();

echo "connect cuk";
 
CloseCon($conn);
?>