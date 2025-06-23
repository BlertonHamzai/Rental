<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Successful</title>
  <link rel="stylesheet" href="styles.css">
</head>

<?php header("Refresh: 8; url=index.html");?>

<body>

 
  <div class="container">
    <div class="payment-box">
      <div class="status">
        <div class="checkmark" id="checkmark">&#10003;</div>
        <h1>Payment Successful</h1>
        <p>Thank you for your payment. Your transaction is complete!</p>
      </div>
      <div class="transaction-details">
        <p><strong>Amount Paid:</strong> $99.99</p>
        <p><strong>Date:</strong> November 6, 2024</p>
      </div>
      <div class="paypal-logo">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/PayPal.svg/2560px-PayPal.svg.png" alt="PayPal Logo">
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
<style>
/* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background: linear-gradient(to bottom right, #003087, #009CDE); /* PayPal blue gradient */
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}

.payment-box {
  background-color: rgba(255, 255, 255, 0.1);
  padding: 40px;
  border-radius: 15px;
  text-align: center;
  max-width: 400px;
  width: 100%;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.status h1 {
  font-size: 2rem;
  margin-top: 20px;
}

.status p {
  font-size: 1.1rem;
  margin-top: 10px;
}

.checkmark {
  font-size: 3rem;
  color: #4CAF50;
  margin-bottom: 20px;
  opacity: 0;
  transform: scale(0);
  animation: checkmark-animation 1.5s forwards;
}

@keyframes checkmark-animation {
  0% {
    opacity: 0;
    transform: scale(0);
  }
  50% {
    opacity: 0.5;
    transform: scale(1.2);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

.transaction-details {
  margin-top: 20px;
  font-size: 1.1rem;
}

.transaction-details p {
  margin: 5px 0;
}

.paypal-logo img {
  width: 120px;
  margin-top: 30px;
  transition: filter 0.3s ease;
}

.paypal-logo img:hover {
  filter: brightness(1.2);
}
</style>


<script>
document.addEventListener("DOMContentLoaded", () => {
  const checkmark = document.getElementById("checkmark");

  // Simulate a delay before animating the checkmark
  setTimeout(() => {
    checkmark.style.opacity = 1;
    checkmark.style.transform = 'scale(1)';
  }, 500);
});
</script> 