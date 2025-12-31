<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(90deg, #e2e2e2, #c9d6ff);
            padding: 20px;
        }

        .container {
            position: relative;
            width: 850px;
            height: 550px;
            background: #fff;
            border-radius: 30px;
            box-shadow: 0 0 30px rgba(0, 0, 0, .2);
            overflow: hidden;
        }

        .form-box {
            overflow-y: auto;
            position: absolute;
            right: 0;
            width: 50%;
            height: 100%;
            background: #fff;
            display: flex;
            align-items: center;
            color: #333;
            text-align: center;
            padding: 40px;
            z-index: 1;
            transition: .6s ease-in-out 1.2s, visibility 0s 1s;
        }

        .container.active .form-box {
            right: 50%;
        }

        .form-box.register {
            visibility: hidden;
        }

        .container.active .form-box.register {
            visibility: visible;
        }

        form {
            width: 100%;
        }

        .container h1 {
            font-size: 36px;
            margin: -10px 0;
        }

        .input-box {
            position: relative;
            margin: 30px 0;
        }

        .input-box input,
        .input-box select {
            width: 100%;
            padding: 13px 50px 13px 20px;
            background: #eee;
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 16px;
            color: #333;
            font-weight: 500;
        }

        .input-box input::placeholder,
        .input-box select:invalid {
            color: #888;
            font-weight: 400;
        }

        .input-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color: #888;
            pointer-events: none;
        }

        .forgot-link {
            margin: -15px 0 15px;
        }

        .forgot-link a {
            font-size: 14.5px;
            color: #333;
            text-decoration: none;
        }

        .btn {
            width: 100%;
            height: 48px;
            background: #7494ec;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            font-weight: 600;
        }

        .container p {
            font-size: 14.5px;
            margin: 15px 0;
        }

        .social-icons a {
            display: inline-flex;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 24px;
            color: #333;
            text-decoration: none;
            margin: 0 8px;
        }

        .toggle-box {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .toggle-box::before {
            content: '';
            position: absolute;
            left: -250%;
            width: 300%;
            height: 100%;
            background: #7494ec;
            border-radius: 150px;
            z-index: 2;
            transition: 1.8s ease-in-out;
        }

        .container.active .toggle-box::before {
            left: 50%;
        }

        .toggle-panel {
            position: absolute;
            width: 50%;
            height: 100%;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 2;
            transition: .6s ease-in-out;
        }

        .toggle-panel.toggle-left {
            left: 0;
            transition-delay: 1.2s;
        }

        .container.active .toggle-panel.toggle-left {
            left: -50%;
            transition-delay: .6s;
        }

        .toggle-panel.toggle-right {
            right: -50%;
            transition-delay: .6s;
        }

        .container.active .toggle-panel.toggle-right {
            right: 0;
            transition-delay: 1.2s;
        }

        .toggle-panel p {
            margin-bottom: 20px;
        }

        .toggle-panel .btn {
            width: 160px;
            height: 46px;
            background: transparent;
            border: 2px solid #fff;
            box-shadow: none;
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .container {
                width: 100%;
                max-width: 420px;
                height: auto;
                min-height: 700px;
                border-radius: 20px;
                display: flex;
                flex-direction: column;
            }

            .form-box {
                overflow-y: auto;
                position: absolute;
                width: 100%;
                height: 50%;
                right: auto;
                bottom: 0;
                left: 0;
                padding: 30px 25px;
                transition: .6s ease-in-out 1.2s, visibility 0s 1s;
            }

            .container.active .form-box {
                bottom: 50%;
                right: auto;
            }

            .form-box.register {
                visibility: hidden;
            }

            .container.active .form-box.register {
                visibility: visible;
            }

            .container h1 {
                font-size: 28px;
                margin: 10px 0 15px;
            }

            .input-box {
                margin: 18px 0;
            }

            .input-box input,
            .input-box select {
                padding: 12px 45px 12px 15px;
                font-size: 14px;
            }

            .input-box i {
                right: 15px;
                font-size: 18px;
            }

            .forgot-link {
                margin: -10px 0 15px;
                text-align: right;
            }

            .forgot-link a {
                font-size: 13px;
            }

            .btn {
                height: 45px;
                font-size: 15px;
            }

            .container p {
                font-size: 13px;
                margin: 12px 0;
            }

            .social-icons a {
                padding: 8px;
                font-size: 20px;
                margin: 0 5px;
            }

            .toggle-box {
                display: block;
            }

            .toggle-box::before {
                content: '';
                position: absolute;
                top: -250%;
                left: 0;
                width: 100%;
                height: 300%;
                background: #7494ec;
                border-radius: 150px;
                z-index: 2;
                transition: 1.8s ease-in-out;
            }

            .container.active .toggle-box::before {
                top: 50%;
                left: 0;
            }
            .toggle-panel {
                width: 100%;
                height: 50%;
                transition: .6s ease-in-out;
            }

            .toggle-panel.toggle-left {
                top: 0;
                left: 0;
                transition-delay: 1.2s;
            }

            .container.active .toggle-panel.toggle-left {
                top: -50%;
                left: 0;
                transition-delay: .6s;
            }

            .toggle-panel.toggle-right {
                bottom: -50%;
                top: auto;
                right: 0;
                left: 0;
                transition-delay: .6s;
            }

            .container.active .toggle-panel.toggle-right {
                bottom: 0;
                top: auto;
                right: 0;
                transition-delay: 1.2s;
            }

            .toggle-panel h1 {
                font-size: 32px;
            }

            .toggle-panel p {
                margin-bottom: 15px;
                font-size: 15px;
            }

            .toggle-panel .btn {
                width: 160px;
                height: 46px;
            }

            .form-box::-webkit-scrollbar {
                width: 6px;
            }

            .form-box::-webkit-scrollbar-track {
                background: #f1f1f1;
                border-radius: 10px;
            }

            .form-box::-webkit-scrollbar-thumb {
                background: #7494ec;
                border-radius: 10px;
            }
        }

        @media (max-width: 480px) {
            .form-box::-webkit-scrollbar {
                width: 6px;
            }

            .form-box::-webkit-scrollbar-track {
                background: #f1f1f1;
                border-radius: 10px;
            }

            .form-box::-webkit-scrollbar-thumb {
                background: #7494ec;
                border-radius: 10px;
            }

            .container {
                max-width: 100%;
                min-height: 550px;
                border-radius: 15px;
            }

            .form-box {
                overflow-y: auto;
                scrollbar-width: thin;
                scrollbar-color: #7494ec #f1f1f1;
                padding: 25px 20px;
            }

            .container h1 {
                font-size: 24px;
            }

            .input-box {
                margin: 18px 0;
            }

            .input-box input,
            .input-box select {
                padding: 11px 40px 11px 12px;
                font-size: 13px;
            }

            .social-icons a {
                padding: 7px;
                font-size: 18px;
                margin: 0 4px;
            }

            .btn {
                height: 42px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-box login">
            <form action="login.php" method="POST">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password"placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <p>or login with social platforms</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <form action="register.php" method="POST">
                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text"name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password"  name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <select name= "role" required>
                        <option value="" disabled selected>Select Role</option>
                        <option value="patient">Patient</option>
                        <option value="doctor">Doctor</option>
                    </select>
                    <i class='bx bxs-user-detail'></i>
                </div>
                <button type="submit" class="btn">Register</button>
                <p>or register with social platforms</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello, Welcome!</h1>
                <p>Don't have an account</p>
                <button class="btn register-btn">Register</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account</p>
                <button class="btn login-btn">Login</button>
            </div>
        </div>
    </div>

    <script>
        const container = document.querySelector('.container');
        const registerBtn = document.querySelector('.register-btn');
        const loginBtn = document.querySelector('.login-btn');

        registerBtn?.addEventListener('click', () => {
            container.classList.add('active');
        });

        loginBtn?.addEventListener('click', () => {
            container.classList.remove('active');
        });
    </script>
</body>

</html>