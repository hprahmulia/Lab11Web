<?php

session_start();

$title = 'Data Barang';
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
$user = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '{$user}'