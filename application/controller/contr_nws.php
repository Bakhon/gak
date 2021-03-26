<?php 

$db = new DB();
$id = $_GET['id'];

$list_news = $db->select("select * from insurance2.site_news where id = 393");


?>