<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Successful</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
        <p><strong>Amount Paid:</strong> $49.99</p>
        <p><strong>Date:</strong> November 6, 2024</p>
      </div>
      <div class="visa-logo">
        <img src="https://www.visa.com.au/dam/VCOM/regional/ve/romania/blogs/hero-image/visa-logo-800x450.jpg" alt="Visa Logo">
      </div>
    </div>
  </div>

  <div class="container-fluid" id="alertBox">
    <div class="row">
      <div class="col-12 text-center">
      <div class="alert alert-success" role="alert">
        Thank you for your payment. Your transaction is complete!
      </div>
      </div>
    </div>
  </div>`
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="script.js"></script>
</body>
</html>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background: linear-gradient(to bottom right, #6a11cb, #2575fc); /* Soft gradient */
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

#alertBox {
  position: absolute;
  width: fit-content;
  bottom: 30px;
  visibility: visible;
  /* display: block; */
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

.visa-logo img {
  width: 120px;
  margin-top: 30px;
  transition: filter 0.3s ease;
}



</style>
<script>

document.addEventListener("DOMContentLoaded", () => {
  const checkmark = document.getElementById("checkmark");

  
  setTimeout(() => {
    checkmark.style.opacity = 1;
    checkmark.style.transform = 'scale(1)';
  }, 500);
});
</script>


<script>

let snackBar = document.getElementById('alertBox')


function showAlert() {
  snackBar.style.visibility = 'hidden';
}


setTimeout(() => {showAlert()}, 2000)





  </script>
</body>
</html>

</body>
</html>
