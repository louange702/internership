<?php include 'includes/header.php'; ?>

<style>
    .main {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
    }

    .main h2 {
        text-align: center;
        color: #007BFF;
    }

    .section-toggle {
        cursor: pointer;
        color: #007BFF;
        margin-top: 20px;
        font-size: 1.1em;
    }

    .section-toggle:hover {
        text-decoration: underline;
    }

    .section-content {
        margin-top: 5px;
        color: #444;
        line-height: 1.6;
    }

    .hidden {
        display: none;
    }
</style>

<div class="main">
    <h2>📜 Terms and Conditions</h2>
    
    <div>
        <h3 class="section-toggle">Introduction</h3>
        <div class="section-content">
            <p>Welcome to our online voting platform. By accessing and using our platform, you agree to comply with and be bound by the following terms and conditions.</p>
        </div>
    </div>

    <div>
        <h3 class="section-toggle">Eligibility</h3>
        <div class="section-content">
            <p>You must be at least 18 years old to use this platform and vote in elections.</p>
        </div>
    </div>

    <div>
        <h3 class="section-toggle">Account Responsibility</h3>
        <div class="section-content">
            <p>As a registered user, you are responsible for maintaining the confidentiality of your account information and for all activities under your account.</p>
        </div>
    </div>

    <div>
        <h3 class="section-toggle">Voting</h3>
        <div class="section-content">
            <p>All votes submitted on the platform are confidential. Once a vote is cast, it cannot be changed or retracted.</p>
        </div>
    </div>

    <div>
        <h3 class="section-toggle">Prohibited Activities</h3>
        <div class="section-content">
            <p>You are prohibited from using this platform to engage in fraudulent or illegal activities, including manipulating votes or violating any laws.</p>
        </div>
    </div>

    <div>
        <h3 class="section-toggle">Changes to Terms</h3>
        <div class="section-content">
            <p>We reserve the right to update or modify these terms at any time. Changes will be posted on this page.</p>
        </div>
    </div>

    <div>
        <h3 class="section-toggle">Contact Us</h3>
        <div class="section-content">
            <p>If you have any questions regarding these terms, please contact us using the information below.</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggles = document.querySelectorAll(".section-toggle");

        toggles.forEach(toggle => {
            toggle.addEventListener("click", () => {
                const content = toggle.nextElementSibling;
                content.classList.toggle("hidden");
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
