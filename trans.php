<?php
$conn = new mysqli("localhost", "root", "", "products");

$type = $_POST['type'];
$amount = $_POST['amount'];
$description = $_POST['description'];
$essential = isset($_POST['essential']) ? 1 : 0;

$stmt = $conn->prepare("INSERT INTO transactions (type, amount, description, essential) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sdsi", $type, $amount, $description, $essential);
$stmt->execute();

header("Location:addtranss.php");
?>
