<?php
require 'homepage.php'; // contains $pdo connection

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['product_name']);
    $location = trim($_POST['location']);
    $image = $_FILES['image'];

    if ($name && $location && $image['name']) {
        $imageName = uniqid() . '_' . basename($image['name']);
        $targetPath = "uploads/" . $imageName;
        move_uploaded_file($image['tmp_name'], $targetPath);

        $stmt = $pdo->prepare("INSERT INTO productt (name, location, image) VALUES (?, ?, ?)");
        $stmt->execute([$name, $location, $imageName]);
        $message = "✅ Igicuruzwa cyashyizweho: <strong>" . htmlspecialchars($name) . "</strong>";
    } else {
        $message = "❌ Uzuza ibisabwa byose.";
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

    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="product_name" placeholder="Izina ry'igicuruzwa..." required><br><br>
        <input type="text" name="location" placeholder="Aho kiri (ex: Kimironko)..." required><br><br>
        <input type="file" name="image" accept="image/*" required><br><br>
        <button type="submit">Ohereza</button>
    </form>

    <p style="margin-top:20px;"><a href="homepageindex.php">← Subira ku Rubuga Nyamukuru</a></p>
</div>
</body>
</html>
