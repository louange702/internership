<?php
require 'homepage.php'; // PDO connection

$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : '';
$results = [];

if ($searchQuery !== '') {
    $stmt = $pdo->prepare("SELECT name, location, image FROM productt WHERE name LIKE ?");
    $stmt->execute(["%" . $searchQuery . "%"]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="rw">
<head>
    <meta charset="UTF-8">
    <title>SmartStock Rwanda - Shakisha Igicuruzwa</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
<div class="container">
    <h1>SmartStock Rwanda</h1>
    <p>Shaka igicuruzwa kiri muri stock:</p>

    <form method="GET">
        <input type="text" name="search" placeholder="Urugero: Igitoki" value="<?= htmlspecialchars($searchQuery) ?>">
        <button type="submit">Shaka</button>
    </form>

    <?php if ($searchQuery !== ''): ?>
        <div class="results">
            <?php if (count($results) > 0): ?>
                <?php foreach ($results as $item): ?>
                    <div class="product-card">
                        <img src="uploads/<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>">
                        <h3><?= htmlspecialchars($item['name']) ?></h3>
                        <p><strong>Aho kiri:</strong> <?= htmlspecialchars($item['location']) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="not-found">❌ Ntacyo twabonye gisa na "<strong><?= htmlspecialchars($searchQuery) ?></strong>"</p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
