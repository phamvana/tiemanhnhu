<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
 #
include 'functions.php';
include('db_connect.php');
echo "Đã kết nối";