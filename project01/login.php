<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="assets/img/favicon.ico" rel="icon">
    <style>
        /* CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("assets/img/hero-bg.jpg");
            background-size: cover;
        }

        .login-container {
            width: 300px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Responsiveness */
        @media (max-width: 400px) {
            .login-container {
                width: 90%;
            }
        }

        /* Form Validation Styling */
        input:invalid {
            border-color: #dc3545;
        }

        input:focus:invalid {
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }

        input:valid {
            border-color: #28a745;
        }

        input:focus:valid {
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-brand">
            <img src="assets/img/puskesmas sukabumi.png" alt="logo" width="50" class="shadow-light rounded-circle">
        </div>
        <h2>Login</h2>
        <form id="login-form" action="proses.php" method="POST" novalidate>
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <div class="invalid-feedback">Please enter a valid username.</div>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <div class="invalid-feedback">Please enter a valid password.</div>
            </div>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>

    <script>
        // JavaScript for Form Validation
        const form = document.getElementById('login-form');

        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    </script>
</body>
</html>
