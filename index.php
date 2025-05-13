<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
        text-align: center;
    }

    h2 {
        color: #333;
    }

    .card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        margin: 20px auto;
        width: 300px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card p {
        font-size: 16px;
        color: #555;
    }

    .button {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #0056b3;
    }
</style>

<h2>Welcome to OVP</h2>

<div class="card">
    <p>Vote securely and fairly in active elections!</p>
    <a href="user/register.php" class="button">Register to Vote</a>
</div>

<div class="card">
    <p>Already have an account?</p>
    <a href="user/login.php" class="button">User Login</a>
</div>

<div class="card">
    <p>Admin access only:</p>
    <a href="admin/login.php" class="button">Admin Login</a>
</div>

<?php include 'includes/footer.php'; ?>
