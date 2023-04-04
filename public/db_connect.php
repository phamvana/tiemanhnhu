<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=nhu', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	$error_message = 'Không thể kết nối đến CSDL';
	$reason = $e->getMessage();
	include 'show_error.php';

	include 'footer.php';
	exit();
}
