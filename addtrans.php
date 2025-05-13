<?php
$conn = new mysqli("localhost", "root", "", "products");
$today = date("Y-m-d");

$income = $conn->query("SELECT SUM(amount) FROM transactions WHERE type='income' AND DATE(created_at) = '$today'")->fetch_row()[0] ?: 0;
$expense = $conn->query("SELECT SUM(amount) FROM transactions WHERE type='expense' AND DATE(created_at) = '$today'")->fetch_row()[0] ?: 0;
$profit = $income - $expense;

$status = $profit > 0 ? "✅ TWUNGUTSE" : ($profit < 0 ? "❌ TWAHOMBYE" : "⚖️ NTACYO TWUNGUTSE CYANGWA DUHOMBYE");

echo "<h2>Raporo y'uyu munsi (" . date("d/m/Y") . ")</h2>";
echo "<p><strong>Yinjiye:</strong> " . number_format($income, 2) . " FRW</p>";
echo "<p><strong>Yasohotse:</strong> " . number_format($expense, 2) . " FRW</p>";
echo "<p><strong>Profit:</strong> " . number_format($profit, 2) . " FRW</p>";
echo "<p><strong>Status:</strong> $status</p>";

// Table y’ibikorwa
$result = $conn->query("SELECT type, amount, description, essential, created_at FROM transactions WHERE DATE(created_at) = '$today' ORDER BY created_at DESC");
echo "<h3>Ibikorwa byakozwe uyu munsi:</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Igihe</th><th>Ubwoko</th><th>Ingano</th><th>Ibisobanuro</th><th>Ni ngombwa?</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . date("H:i", strtotime($row['created_at'])) . "</td>";
    echo "<td>" . strtoupper($row['type']) . "</td>";
    echo "<td>" . number_format($row['amount'], 2) . "</td>";
    echo "<td>" . htmlspecialchars($row['description']) . "</td>";
    echo "<td>" . ($row['essential'] ? "Yego" : "Oya") . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
