<?php include "model.php";

$email = $_POST['email'];
$user = get_user($email);

include 'view.php'; ?>