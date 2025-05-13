<?php
require 'homepage.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['product_name']);

    if ($name !== '') {
        $stmt = $pdo->prepare("INSERT INTO homepage (name) VALUES (?)");
        $stmt->execute([$name]);
        $message = "✅ Igicuruzwa cyashyizweho: <strong>" . htmlspecialchars($name) . "</strong>";
    } else {
        $message = "❌ Andika izina ry’igicuruzwa.";
    }
}
?>

<!DOCTYPE html>
<html lang="rw">
<head>
    <meta charset="UTF-8">
    <title>Kongeramo Igicuruzwa - SmartStock Rwanda</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
<div class="container">
    <h1>Kongeramo Igicuruzwa Gishya</h1>

    <?php if ($message): ?>
        <p class="feedback"><?= $message ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="product_name" placeholder="Andika izina ry'igicuruzwa..." required>
        <button type="submit">Ohereza</button>
    </form>

    <p style="margin-top:20px;"><a href="homepageindex.php">← Subira ku Rubuga Nyamukuru</a></p>
</div>
</body>
</html>
