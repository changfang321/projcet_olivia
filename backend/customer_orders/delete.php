<?php 
require_once('../function/login_check.php');
require('../../connection/connection.php'); ?>
<?php
$sql = "DELETE FROM customer_orders WHERE customer_orders_id=".$_GET['customer_orders_id'];
$sth = $db->prepare($sql);
$sth->execute();
header('Location: delete.1.php?customer_orders_id='.$_GET['customer_orders_id'].'&status='.$_GET['status']);
?>