<?php
include_once('config.php');

try {
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            echo "Fill all the fields";
        } else {
            $sql = "SELECT * FROM admin WHERE email = :email";
            $prep = $conn->prepare($sql);
            $prep->bindParam(':email', $email);
            $prep->execute();

            $data = $prep->fetch();
            if ($data == false) {
                echo "User doesn't exist";
            } else {
                if($password == $data['password']){
                    $_SESSION['id'] = $data['id'];  
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['lastname'] = $data['lastname'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['phonenumber'] = $data['phonenumber'];
                    $_SESSION['is_admin'] = $data['is_admin']; 

                    header('Location: dashboard.php');
                } else {
                    echo "Incorrect password";
                }
            }
        }
    }
} catch (Exception $e) {
    echo "Something went wrong.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Background Animation */
        body {
            background: linear-gradient(135deg, #0062E6, #33AEFF);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: gradientAnimation 6s ease infinite;
        }

        /* Create animated gradient */
        @keyframes gradientAnimation {
            0% {
                background: linear-gradient(135deg, #0062E6, #33AEFF);
            }
            50% {
                background: linear-gradient(135deg, #33AEFF, #0062E6);
            }
            100% {
                background: linear-gradient(135deg, #0062E6, #33AEFF);
            }
        }

        /* Form Container (Glassmorphism Effect) */
        .form-signin {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        /* Beautiful Animated Title */
        h1 {
            font-family: 'Arial', sans-serif;
            color: #fff;
            margin-bottom: 20px;
            font-size: 40px;
            text-align: center;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            animation: fadeInTitle 2s ease-out;
        }

        /* Title Animation */
        @keyframes fadeInTitle {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Input Fields Styling */
        .form-control {
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding-left: 40px;
            font-size: 16px;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 10px rgba(51, 174, 255, 0.7);
            border-color: #33AEFF;
        }

        /* Icon inside input */
        .form-control::placeholder {
            color: #fff;
        }

        .form-control:focus::placeholder {
            color: #33AEFF;
        }

        /* Button Styling with Hover Effect */
        .btn-dark {
            background-color: #0062E6;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .btn-dark:hover {
            background-color: #33AEFF;
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        /* Register link */
        span {
            color: #fff;
        }

        a {
            color: #33AEFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Add Icons */
        .input-icon {
            position: absolute;
            top: 15px;
            left: 15px;
            color: #ccc;
            font-size: 20px;
        }

        /* Beautiful Glowing Effect on Login Text */
        .login-text {
            font-family: 'Arial', sans-serif;
            font-size: 40px;
            color: #fff;
            font-weight: bold;
            letter-spacing: 3px;
            text-align: center;
            text-shadow: 0 0 15px rgba(51, 174, 255, 0.8), 0 0 30px rgba(51, 174, 255, 0.7);
            animation: glowText 1.5s ease-in-out infinite alternate;
        }

        /* Text Glowing Animation */
        @keyframes glowText {
            0% {
                text-shadow: 0 0 15px rgba(51, 174, 255, 0.8), 0 0 30px rgba(51, 174, 255, 0.7);
            }
            100% {
                text-shadow: 0 0 25px rgba(51, 174, 255, 1), 0 0 50px rgba(51, 174, 255, 0.9);
            }
        }

    </style>
</head>
<body>
    <main class="form-signin card w-25">
        <form action="" method="post">
            <h1 class="login-text">Admin Only</h1>

            <!-- Email Field with Icon -->
            <div class="position-relative">
                <input type="email" name="email" placeholder="Email" class="form-control mb-3" required>
                <i class="input-icon fas fa-envelope"></i>
            </div>

            <!-- Password Field with Icon -->
            <div class="position-relative">
                <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
                <i class="input-icon fas fa-lock"></i>
            </div>

            <!-- Submit Button -->
            <button type="submit" name="submit" class="btn btn-dark">Login</button><br>
            <span>Don't have an account? <a href="registerAdmin.php">Register here!</a></span>
        </form>
    </main>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
