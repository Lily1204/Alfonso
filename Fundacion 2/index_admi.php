
<?php
  session_start();
  if (!isset($_SESSION["admin"])) {
    header("Location: index.php");
  }
  include 'templates/header-admi.php';
  include 'templates/navegacion-admi.php';
  
?>

<?php
  include 'templates/footer-admi.php';
?>
     
