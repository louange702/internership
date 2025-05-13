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

    .main h2 {
        color: #007BFF;
        text-align: center;
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .main h3 {
        color: #333;
        font-size: 1.5rem;
        margin-top: 30px;
        border-left: 4px solid #007BFF;
        padding-left: 10px;
    }

    .main p {
        line-height: 1.7;
        color: #555;
        margin: 15px 0;
    }

    .main ul {
        padding-left: 20px;
        color: #555;
        margin-top: 10px;
    }

    .main ul li {
        margin-bottom: 10px;
    }

    .main b {
        color: #007BFF;
        display: inline-block;
        margin-top: 10px;
        font-size: 1.1rem;
    }

    /* Developer list */
    .main .developer-list {
        margin-top: 15px;
    }

    /* Responsive design */
    @media (max-width: 600px) {
        .main {
            padding: 15px;
            margin: 15px;
        }

        .main h2 {
            font-size: 1.6rem;
        }

        .main h3 {
            font-size: 1.3rem;
        }

        .main p, .main ul li, .main b {
            font-size: 1rem;
        }
    }
</style>


<div class="main">
    <h2>📘 About Us</h2>
    
    <h3>Our Mission</h3>
    <p>Our platform aims to revolutionize the way elections are conducted, offering a secure, transparent, and accessible online voting system. We believe in empowering individuals with a modern way to vote and participate in democratic processes.</p>

    <h3>Our Team</h3>
    <p>We are a group of passionate developers, designers, and tech enthusiasts who believe in the power of technology to make the world a better place. Our team works tirelessly to ensure that our platform is secure, user-friendly, and reliable.</p>

    <h3>Why Choose Us?</h3>
    <p>Our platform offers:</p>
    <ul>
        <li>Secure and encrypted voting system</li>
        <li>Transparent election management</li>
        <li>Real-time results tracking</li>
        <li>User-friendly interface</li>
        <li>Fully responsive design for all devices</li>
    </ul>
    <h2>developers</h2>
    <p><b>UWAYO CLEMANCE</b></p>
    <P><B>ZIGAMA ANGELLO</B></P>
    <P><B>SHIMIRWA MARTIN</B></P>

    <h3>Join Us</h3>
    <p>Are you ready to participate in the future of voting? Join us today and be part of the change.</p>
</div>

<script>
    // Highlight "About" link in the nav if it exists
    document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll("nav ul li a");
        navLinks.forEach(link => {
            if (link.href.includes("about.php")) {
                link.style.backgroundColor = "#0056b3";
            }
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
