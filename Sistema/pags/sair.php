<?php 
session_start();
unset($_SESSION['senha']);
echo"<script>window.location.href='../index_sistema.php'</script>";
?>