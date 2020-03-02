<?php
session_start();
//mengancurkan sesion logout
session_destroy();

echo "<script>alert('anda telah logout'); </script>";
echo "<script>location='index.php'; </script>";
?>