<?php 
require_once('../function/login_check.php');
require('../../connection/connection.php'); ?>
<?php
$sql = "DELETE FROM order_details WHERE customer_orders_id=".$_GET['customer_orders_id'];
$sth = $db->prepare($sql);
$sth->execute();
header('Location: list.php?status='.$_GET['status']);
?>