<?php 
include 'configdb.php';
require_once '../core/sessionadmin.php';

if (isset($_POST['submit'])) {
$no = (string)$nomor = $_POST['nomor'];

//$edit = mysqli_query($conn, "DELETE FROM t_soal WHERE no = $no");
$edit = $conn->query("DELETE FROM t_soal WHERE no = $no");

if ($edit) {
		echo '<script>alert("Edit sukses!")</script>';
		header("Location: ../admin/manage_soal.php");
	} else {
		echo '<script>alert("Edit gagal!")</script>';
	}
}
?>