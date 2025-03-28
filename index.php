<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Login Page</title>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100vw;
        margin: 0;
        font-family: 'Arial', sans-serif;
        background: linear-gradient(-45deg, #add8e6, #ccffcc, #ffcccb, #ffffcc);
        background-size: 400% 400%;
        animation: gradientBG 15s ease infinite;
    }

    @keyframes gradientBG {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .login-container {
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.8);
        /* Semi-transparent background */
        backdrop-filter: blur(10px);
        padding: 20px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 360px;
        width: 100%;
        animation: fadeIn 1.5s ease;
        box-sizing: border-box;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .login-container .brand-logo {
        width: 80px;
        height: 80px;
        margin-bottom: 0;
        border-radius: 50%;
        background-color: #f0f2f5;
        display: inline-block;
        animation: bounceIn 1s ease;
    }

    @keyframes bounceIn {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-20px);
        }

        60% {
            transform: translateY(-10px);
        }
    }

    .login-container .brand-logo img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: contain;
    }

    .login-container h1 {
        margin-bottom: 15px;
        color: #333;
        font-size: 22px;
        animation: slideInDown 1s ease;
    }

    @keyframes slideInDown {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .input-container {
        position: relative;
        margin-bottom: 15px;
        animation: fadeInUp 1.5s ease;
    }

    @keyframes fadeInUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .input-container input {
        width: 100%;
        padding: 10px 15px;
        padding-left: 35px;
        padding-right: 35px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 14px;
    }

    .input-container .fa {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #aaa;
    }

    .input-container .toggle-password {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #aaa;
    }

    .login-container .error-message {
        color: red;
        font-size: 14px;
        margin-bottom: 15px;
        display: none;
        text-align: left;
        animation: shake 0.5s;
    }

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0);
        }

        20%,
        60% {
            transform: translateX(-10px);
        }

        40%,
        80% {
            transform: translateX(10px);
        }
    }

    .login-container button {
        background-color: #007bff;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        font-size: 14px;
        transition: background-color 0.3s ease;
        animation: slideInUp 1s ease;
    }

    .login-container button:hover {
        background-color: #0056b3;
    }

    @keyframes slideInUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .login-container .footer {
        margin-top: 15px;
        font-size: 12px;
        color: #555;
        animation: fadeIn 2s ease;
    }





    /* From Uiverse.io by mrpumps31232 */
    .loading-wave {
        width: 300px;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: flex-end;
    }

    .loading-bar {
        width: 20px;
        height: 10px;
        margin: 0 5px;
        background-color: #3498db;
        border-radius: 5px;
        animation: loading-wave-animation 1s ease-in-out infinite;
    }

    .loading-bar:nth-child(2) {
        animation-delay: 0.1s;
    }

    .loading-bar:nth-child(3) {
        animation-delay: 0.2s;
    }

    .loading-bar:nth-child(4) {
        animation-delay: 0.3s;
    }

    @keyframes loading-wave-animation {
        0% {
            height: 10px;
        }

        50% {
            height: 50px;
        }

        100% {
            height: 10px;
        }
    }

    main {
        display: none;
    }
    </style>
</head>

<body>
    <main>
        <div class="login-container">
            <!-- Brand Logo -->
            <div class="brand-logo">
                <img src="./img/icon.png" alt="Brand Logo"
                    onerror="this.onerror=null; this.src='fallback-image-url.png'">
            </div>
            <h1>Login</h1>
            <form onsubmit="return validateForm()">
                <div class="input-container">
                    <i class="fa fa-user"></i>
                    <input type="text" id="username" placeholder="Username" value="Admin" required>
                </div>
                <div class="input-container">
                    <i class="fa fa-lock"></i>
                    <input type="password" id="password" placeholder="Password" value="&(&%#($(@^A" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                </div>
                <div class="error-message" id="error-message">Incorrect username or password. Please try again.</div>
                <button type="submit">Login</button>
            </form>
            <div class="footer">
                <p>&copy; 2024 Your Company Name. All rights reserved.</p>
            </div>
        </div>
    </main>



    <div class="loading-wave">
        <div class="loading-bar"></div>
        <div class="loading-bar"></div>
        <div class="loading-bar"></div>
        <div class="loading-bar"></div>
    </div>

    <script>
    // Function to toggle password visibility
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const togglePasswordIcon = document.querySelector('.toggle-password');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePasswordIcon.classList.remove('fa-eye');
            togglePasswordIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            togglePasswordIcon.classList.remove('fa-eye-slash');
            togglePasswordIcon.classList.add('fa-eye');
        }
    }

    // Function to validate the form
    function validateForm() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const errorMessage = document.getElementById('error-message');

        // Dummy validation for illustration purposes (replace with actual validation)
        if (username === 'Admin' && password === '&(&%#($(@^A') {
            window.location.href = './dashboard.php'; // Redirect to home.html
            return false; // Prevent form submission to avoid reloading the page
        } else {
            errorMessage.style.display = 'block'; // Show error message
            return false; // Prevent form submission
        }
    }




    // Hide the loader and show the image once the page has fully loaded
    window.addEventListener('load', function() {
        document.querySelector('.loading-wave').style.display = 'none';
        document.querySelector('main').style.display = 'block';
        document.getElementById('dynamic-image').src = "https://picsum.photos/3840/2160";
    });
    </script>
</body>

</html>