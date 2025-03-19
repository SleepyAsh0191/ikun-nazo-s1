<?php
  session_start();
  header("Content-Type:text/css;");
?>
@import url('common.css');
<?php
  $stage = -1;
  if(isset($_SESSION["stage"])) $stage = $_SESSION["stage"];
  switch ($stage) {
    default:
      break;
  }

  if(isset($_SESSION["cssCode"]))
  {
    echo $_SESSION['cssCode'];
  }
