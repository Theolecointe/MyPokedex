<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<?php

if (isset($_SESSION['LOGGED_USER'])) {
  include_once 'headerco.php';
} else {
  include_once 'headerdeco.php';
}
  



?>
</head>
<body>
  
</body>
</html>


