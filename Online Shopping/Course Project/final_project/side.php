<?php
session_start();
if($_SESSION['flag']==5)
{
	$_SESSION['flag']=6;
    header('location:pro_order.php');
}
?>