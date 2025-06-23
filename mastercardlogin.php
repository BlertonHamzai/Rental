<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="title">MasterCard Payment Form</title>

    <style>
        /* Resetting some default styles */
        body, h2, form {
            margin: 0;
            padding: 0;
        }

        .submit-btn a {
            width: 100%;
            padding: 12px;
            background-color: #ff5f00; /* MasterCard primary orange color */
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .submit-btn a:hover {
            background-color: #e74c3c; /* Darker red-orange for hover effect */
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff5f00, #f07f00); /* Orange gradient background */
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
            border-color: #ff5f00;
            outline: none;
        }

        .card-logo {
            text-align: center;
            margin: 10px 0;
        }

        .card-logo img {
            width: 60px;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #ff5f00;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #e74c3c;
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
    <h2>MasterCard Payment</h2>
    <form action="SuccessMastercard.php" method="POST" id="paymentForm">
        
        <!-- Card Number -->
        <div class="input-group">
            <label for="cardNumber">Card Number</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9876 5432" maxlength="19" required>
            <span class="error-message" id="cardNumberError">Please enter a valid card number.</span>
        </div>
        
        <!-- Expiry Date -->
        <div class="input-group">
            <label for="expiryDate">Expiry Date</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" maxlength="5" required>
            <span class="error-message" id="expiryDateError">Please enter a valid expiry date.</span>
        </div>

        <!-- CVV -->
        <div class="input-group">
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="123" maxlength="3" required>
            <span class="error-message" id="cvvError">Please enter a valid CVV.</span>
        </div>

        <!-- MasterCard Logo -->
        <div class="card-logo">
            <img src="https://banner2.cleanpng.com/20180806/lao/-5b73b114eb2265.79323650153430862896317106.jpg" alt="MasterCard Logo">
        </div>

        <!-- Submit Button -->
        <input type="submit" class="submit-btn" id="submit-btn"><a href="successfulpayment.php"></a></input>
    </form>
</div>

<script>
document.getElementById("submit-btn").addEventListener("click", e => {
    const cardnum = document.getElementById("cardNumber").value;
    try {
        if (typeof cardnum === 'string' && !isNaN(cardnum) && Number.isInteger(Number(cardnum))) {
            console.log("Success: Valid card number.");
        } else {
            console.log("Error: Invalid card number. Ensure it's a number.");
        }
    } catch (e) {
        console.error("An error occurred: ", e);
    }

    const expiryDate = document.getElementById("expiryDate").value;

    try {
        if (typeof expiryDate === 'string' && !isNaN(expiryDate) && Number.isInteger(Number(expiryDate))) {
            console.log("Success: expiryDate number.");
        } else {
            console.log("Error: Invalid expiryDate.");
        }
    } catch (e) {
        console.error("An error occurred: ", e);
    }

    const cvv = document.getElementById("cvv").value;

    try {
        if (typeof cvv === 'string' && !isNaN(cvv) && Number.isInteger(Number(cvv)) && cvv.length === 3) {
            console.log("Success: cvv number.");
        } else {
            console.log("Error: Invalid cvv.");
        }
    } catch (e) {
        console.error("An error occurred: ", e);
    }
});
</script>

</body>
</html>
