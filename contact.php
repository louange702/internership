<?php include 'includes/header.php'; ?>


<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f4f7f9;
        font-family: Arial, sans-serif;
        color: #333;
    }

    .main {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .main h2, .main h3 {
        color: #007BFF;
        margin-top: 0;
    }

    .main p {
        color: #555;
        line-height: 1.6;
    }

    .main form {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
    }

    .main label {
        margin: 10px 0 5px;
        font-weight: bold;
        color: #333;
    }

    .main input,
    .main textarea {
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border-color 0.3s ease;
    }

    .main input:focus,
    .main textarea:focus {
        outline: none;
        border-color: #007BFF;
    }

    .main button {
        margin-top: 15px;
        padding: 12px;
        font-size: 1rem;
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .main button:hover {
        background-color: #0056b3;
    }

    h2 {
        text-align: center;
        margin-top: 40px;
    }

    ul {
        list-style-type: none;
        padding: 0;
        text-align: center;
        margin-bottom: 40px;
    }

    ul li {
        margin: 10px 0;
    }

    ul li a {
        color: #007BFF;
        text-decoration: none;
        font-weight: bold;
    }

    ul li a:hover {
        text-decoration: underline;
    }

    @media (max-width: 600px) {
        .main {
            padding: 15px;
            margin: 20px;
        }

        .main h2, .main h3 {
            font-size: 1.5rem;
        }

        .main input, .main textarea {
            font-size: 0.95rem;
        }

        .main button {
            font-size: 0.95rem;
        }
    }
</style>


<div class="main">
    <h2>📬 Contact Us</h2>
    
    <p>If you have any questions, concerns, or suggestions, please feel free to contact us using the form below:</p>
    
    <form action="contact_form.php" method="POST" onsubmit="return validateContactForm()">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        
        <button type="submit">Send Message</button>
    </form>

    <h3>Alternatively, you can reach us at:</h3>
    <p>Email: support@votingplatform.com</p>
    <p>Phone: +250 796 348 019</p>
</div>
<h2>ADVICE TO DEVELOPERS</h2>
<ul>
    <li><a href="">uwayoclemy@gmail.com</a></li>
    <li><a href="">angellozigama@gmail.com</a></li>
    <li><a href="">martinshimirwa@gmail.com</a></li>
</ul>

<script>
    function validateContactForm() {
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();

        if (!name || !email || !message) {
            alert("Please fill out all fields.");
            return false;
        }

        const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        return true;
    }
</script>

<?php include 'includes/footer.php'; ?>
