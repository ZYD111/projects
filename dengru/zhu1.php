<?php
$server='127.0.0.1';
$db_user='root';
$db_pwd='12345678';
$db_name='zhu';

$connect=new mysqli($server,$db_user,$db_pwd,$db_name);

if($connect->connect_error){
	die("连接失败".$connect->connect_error);
}

$connect->query('set names utf-8');
?>