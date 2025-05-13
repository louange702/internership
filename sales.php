<?php
include('db.php');
include('header.php');

// Fetch sales data with time (sale_date contains both date and time)
$sales = $conn->query("SELECT s.id, p.name, s.qty_sold, s.sale_date 
                       FROM sales s JOIN product p ON s.product_id = p.id");
?>

<h2>Raporo y'Ibigurishwa</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Izina ry'igicuruzwa</th>
        <th>Byagurishijwe</th>
        <th>Igihe cy'igurisha</th> <!-- Update the column title to reflect the time -->
    </tr>
    <?php while ($row = $sales->fetch_assoc()): ?>
    <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['qty_sold'] ?></td>
        <td><?= $row['sale_date'] ?></td> <!-- Display the date and time -->
    </tr>
    <?php endwhile; ?>
</table>

<?php include('footer.php'); ?>
