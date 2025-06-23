<?php
include_once('config.php');

try {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phonenumber = $_POST['phonenumber'];

        if (empty($username) || empty($password) || empty($phonenumber)) {
            echo "<div class='alert alert-danger'>Fill all the fields required.</div>";
        } else {
            $sql = "INSERT INTO users(username, password, phonenumber) VALUES (:username, :password, :phonenumber)";
            $prep = $conn->prepare($sql);
            $prep->bindParam(':username', $username);
            $prep->bindParam(':password', $password);
            $prep->bindParam(':phonenumber', $phonenumber);

            $prep->execute();
            header('Location: choose.php'); 
            exit(); 
        }
    }
}
catch(Exception $e) {
    echo "<div class='alert alert-danger'>Something went wrong: " . $e->getMessage() . "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill the fields, to choose a payment method.</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin-top: 100px;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }
        .form-control {
            margin-bottom: 15px;
        }
        button {
            width: 100%;
        }
        .alert {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Fill the fields, to choose a payment method.</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username/Email" name="username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Continue</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
