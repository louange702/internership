<?php
include('db.php');
include('header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO product (name, quantity, price) VALUES ('$name', '$qty', '$price')";
    if ($conn->query($sql) == TRUE) {
        echo "<p style='color:green;'>Ibicuruzwa byongewe!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

<h2>Ongeramo Ibicuruzwa</h2>
<form method="post">
    Izina: <input type="text" name="name" required><br><br>
    Ingano (Quantity): <input type="number" name="quantity" required><br><br>
    Igiciro (Price): <input type="number" step="0.01" name="price" required><br><br>
    <button type="submit">Bika</button>
</form>

<?php include('footer.php'); ?>
