<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'Sistema_M1'
) or die(mysqli_erro($mysqli));

?>
