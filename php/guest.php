<?php
session_start();

$_SESSION['username'] = 'guest';
$_SESSION['image'] = 'default';
$_SESSION['role'] = 'guest';

header('Location: ../pages/Home.php');
