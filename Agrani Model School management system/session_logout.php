<?php
mysql_select_db('sms2',mysql_connect('localhost','root',''));
?>
<?php

session_start();
session_destroy();
header('location:index.php');
?>