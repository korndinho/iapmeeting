<?php
session_start();
date_default_timezone_set ('Asia/Bangkok');
include_once ("../class/ConDB.inc.php");
//include_once ("../login/chk_login.php");
include_once ("../class/Bootstarp.inc.php");
include_once ("../class/HTML.inc.php");
include_once ("../class/HTML2.inc.php");
include_once ("../class/PHP.inc.php");
include_once ("../class/FORM.inc.php");
include_once ("../class/TABLE.inc.php");
include_once ("../plugin/plugin.php");
//include_once ("../code/function.inc.php");
include_once ("../attach/java.php");
error_reporting (E_ALL ^ E_NOTICE);
$PHP = new PHP();
$HTML = new HTML();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="../css/mystyle.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/stype_bykorn.css" rel="stylesheet" type="text/css"  media="all" />
<?php
$HTML->Meta();
$PHP->Inc("../attach/sb-admin-2/attach.html");

?>
</head>
<body>
<?php
	// --- Check Login System
	//if(!EMPTY($_SESSION['login_name'])){
?>




<?php $PHP->Content(@$_GET['p'].".php" , $_SESSION['EmpUserStatus']); ?>


<?php //} // End Check Login System ?>
</body>
</html>
