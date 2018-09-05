<?php require('../../connection/connection.php'); ?>
<?php 
$sql = "DELETE FROM members WHERE members_id=".$_GET['members_id'];
$sth = $db->prepare($sql);
$sth->execute();
header('Location: list.php');


?>