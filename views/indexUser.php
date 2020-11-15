<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION["name"]))
{
  header("Location: ../controller/login.php");
}
else
{
require 'header.php';

if ($_SESSION['user']==1)
{
?>




<?php
}
else
{
 echo "sorry an issue has ocurred";
}

require 'footer.php';
?>
        <script type="text/javascript" src="scripts/user.js"></script>
<?php 
}
ob_end_flush();
?>

