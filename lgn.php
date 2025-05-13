<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        transition: all 0.3s ease;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-image: url('/api/placeholder/1200/800'); /* Placeholder image will be replaced by your actual image */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
        position: relative;
        background-color: #0a1623; /* Dark blue background color as fallback */
    }

    body::before,
    body::after {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: rgba(0, 200, 255, 0.1); /* Matching the cyan/blue tones from the image */
        animation: float 15s infinite linear;
        z-index: -1;
    }

    body::before {
        top: -100px;
        right: -100px;
        animation-delay: 0s;
    }

    body::after {
        bottom: -150px;
        left: -100px;
        width: 500px;
        height: 500px;
        animation-direction: reverse;
        animation-duration: 20s;
    }

    @keyframes float {
        0% {
            transform: translate(0, 0) rotate(0deg);
        }
        50% {
            transform: translate(100px, 50px) rotate(180deg);
        }
        100% {
            transform: translate(0, 0) rotate(360deg);
        }
    }

    .login-container {
        background-color: rgba(10, 22, 35, 0.75); /* Darkened to match the tech theme */
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        width: 100%;
        max-width: 400px;
        text-align: center;
        animation: fadeIn 0.8s forwards, slideUp 0.8s forwards;
        backdrop-filter: blur(10px);
        transform: translateY(20px);
        opacity: 0;
        border: 1px solid rgba(0, 200, 255, 0.2); /* Subtle cyan border */
    }

    @keyframes fadeIn {
        to { opacity: 1; }
    }

    @keyframes slideUp {
        to { transform: translateY(0); }
    }

    h2 {
        margin-bottom: 25px;
        color: #ffffff; /* White for better contrast */
        font-size: 28px;
        font-weight: 600;
        position: relative;
        animation: fadeIn 0.8s 0.2s forwards, slideUp 0.8s 0.2s forwards;
        opacity: 0;
        transform: translateY(20px);
    }

    h2::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -8px;
        width: 50px;
        height: 3px;
        background: linear-gradient(to right, #00c8ff, #ff9d00); /* Cyan to orange gradient matching the image */
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .input-group {
        margin-bottom: 20px;
        text-align: left;
        animation: fadeIn 0.8s 0.4s forwards, slideUp 0.8s 0.4s forwards;
        opacity: 0;
        transform: translateY(20px);
    }

    .input-group:nth-child(3) {
        animation-delay: 0.5s;
    }

    .input-group label {
        display: block;
        font-size: 15px;
        color: #ffffff; /* White for better contrast */
        margin-bottom: 8px;
        font-weight: 500;
    }

    .input-group input {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        font-size: 16px;
        outline: none;
        background-color: rgba(255, 255, 255, 0.1);
        transition: all 0.3s;
        color: #fff;
    }

    .input-group input:focus {
        border-color: #00c8ff; /* Cyan color matching the lightbulb */
        box-shadow: 0 0 0 3px rgba(0, 200, 255, 0.2);
        background-color: rgba(255, 255, 255, 0.15);
    }

    .input-group input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .submit-btn {
        width: 100%;
        padding: 12px;
        background: linear-gradient(to right, #00c8ff, #ff9d00); /* Cyan to orange gradient */
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 10px rgba(0, 200, 255, 0.4);
        position: relative;
        overflow: hidden;
        animation: fadeIn 0.8s 0.6s forwards, slideUp 0.8s 0.6s forwards;
        opacity: 0;
        transform: translateY(20px);
    }

    .submit-btn:hover {
        box-shadow: 0 6px 15px rgba(0, 200, 255, 0.6);
        transform: translateY(-2px);
    }

    .submit-btn:active {
        transform: translateY(0);
        box-shadow: 0 2px 5px rgba(0, 200, 255, 0.4);
    }

    .submit-btn::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 5px;
        height: 5px;
        background: rgba(255, 255, 255, 0.5);
        opacity: 0;
        border-radius: 100%;
        transform: scale(1, 1) translate(-50%);
        transform-origin: 50% 50%;
    }

    .submit-btn:focus:not(:active)::after {
        animation: ripple 1s ease-out;
    }

    @keyframes ripple {
        0% {
            transform: scale(0, 0);
            opacity: 0.5;
        }
        20% {
            transform: scale(25, 25);
            opacity: 0.3;
        }
        100% {
            opacity: 0;
            transform: scale(40, 40);
        }
    }

    .signup-link {
        margin-top: 25px;
        font-size: 15px;
        color: #ccc; /* Light gray for better contrast */
        animation: fadeIn 0.8s 0.7s forwards, slideUp 0.8s 0.7s forwards;
        opacity: 0;
        transform: translateY(20px);
    }

    .signup-link a {
        color: #00c8ff; /* Cyan color matching the lightbulb */
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
    }

    .signup-link a:hover {
        color: #ff9d00; /* Orange accent from the image */
        text-decoration: none;
    }

    @media (max-width: 480px) {
        .login-container {
            padding: 20px;
            max-width: 90%;
        }
        
        h2 {
            font-size: 24px;
        }
        
        .input-group input {
            padding: 10px;
        }
    }
    </style>
</head>
<body>
    <div class="login-container">
        <form class="login-form" method="post" action="login.php">
            <h2>Login</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="UserName" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="Password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="submit-btn">Login</button>
            <p class="signup-link">Don't have an account? <a href="registers.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>