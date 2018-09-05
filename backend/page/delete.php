<?php 
require_once('../function/login_check.php');
require('../../connection/connection.php'); ?>
<?php
$sql = "DELETE FROM pages WHERE pages_id=".$_GET['pages_id'];
$sth = $db->prepare($sql);
$sth->execute();
header('Location: list.php');
?>