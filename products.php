<?php
include('db.php');
include('header.php');

// Handle deletion request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $conn->query("DELETE FROM product WHERE id = $delete_id");
    header('Location: ' . $_SERVER['PHP_SELF']); // Refresh the page after deletion
}

$result = $conn->query("SELECT * FROM product");
?>

<h2>Ibicuruzwa Biri mu Bubiko</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Izina</th>
        <th>Ingano</th>
        <th>Igiciro</th>
        <th>Igihe byinjiye</th>
        <th>Gukora</th> <!-- Added this column for the delete button -->
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['quantity'] ?></td>
        <td><?= $row['price'] ?> Rwf</td>
        <td><?= $row['added_date'] ?></td>
        <td>
            <!-- Delete button -->
            <a href="?delete_id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                <button>Delete</button>
            </a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<?php include('footer.php'); ?>
