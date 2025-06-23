<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Methods</title>
    <style>
        /* Basic styling and centering of the container */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px; /* Max width to prevent it from growing too large */
        }

        /* Title styling */
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Style for the label and input fields */
        label {
            font-size: 16px;
            margin: 10px 0;
            display: block;
            text-align: left;
        }

        input[type="checkbox"] {
            margin-right: 10px;
            transform: scale(1.2);
        }

        /* Button styling */
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Adding some space between checkbox items */
        .checkbox-group {
            margin-bottom: 20px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin: 10px 0;
            cursor: pointer;
        }

        /* Styling for the container for better spacing */
        .container p {
            font-size: 14px;
            color: #666;
            margin-top: 20px;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
                width: 90%;
            }

            h1 {
                font-size: 20px;
            }

            label {
                font-size: 14px;
            }

            button {
                width: 100%;
            }
        }

      a{
        color: #333;
        text-decoration: none;
      }
        
    </style>
</head>
<body>

    <div class="container">
        <h1>Select Payment Methods</h1>

        <div class="checkbox-group">
            <div class="checkbox-label">
                <input type="checkbox" id="Visa">
                <label for="Visa"><a href="visalogin.php">Visa</a></label>
            </div>

            <div class="checkbox-label">
                <input type="checkbox" id="MasterCard">
                <label for="MasterCard"><a href="mastercardlogin.php">MasterCard</a></label>
            </div>

            <div class="checkbox-label">
                <input type="checkbox" id="Paypal">
                <label for="Paypal"><a href="paypalogin.php">Paypal</a></label>
            </div>
        </div>

  
        <button id="MyBtn">Submit</button>

        <p>Choose your preferred payment method(s).</p>
    </div>

  


    <script>
        document.getElementById("MyBtn").onclick = function() {
            const Visa = document.getElementById("Visa");
            const MasterCard = document.getElementById("MasterCard");
            const Paypal = document.getElementById("Paypal");

            try {
                if (Visa.checked) {
                    console.log("You are paying with Visa Card");
                }
                else if (MasterCard.checked) {
                    console.log("You are paying with MasterCard");
                }
                else if (Paypal.checked) {
                    console.log("You are paying with Paypal");
                }
                else {
                    console.log("Please, choose one to continue");
                }
            } catch (error) {
                console.log("Error, please try again later!");
            }
        };
    </script>


</body>
</html>
