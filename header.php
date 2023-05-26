<!DOCTYPE html>
<html lang="en">
<style>

  </style>
<head>
<?php
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER']))  {
  include_once 'headerco.php';
} else {
  include_once 'headerdeco.php';
}




?>
</head>
<body>
  
</body>
</html>


