<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Stripe Payment</title>

    <!-- stripe js library  -->
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <div class="container">
        <h1>Stripe Payment Gateway Integration</h1>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Charge <?php echo '$'.$itemprice; ?> with stripe</h3>
                <!-- product info  -->
                <p><b>Item name:</b><?php echo $itemName; ?></p>
                <p><b>Price:</b><?php echo '$'.$itemPrice.' '.$currency; ?></p>
            </div>
            <div class="panel-body">
                <!-- Display status message  -->
                <div id="paymentResponse" class="hidden"></div>

                <!-- Display payment form  -->
                <form id="paymentFrm">
                    <div class="form-group">
                        <label>NAME</label>
                        <input type="text" id="name" class="field" placeholder="Enter name" required="" autofocus="">
                    </div>
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" id="email" class="field" placeholder="Enter email" required="">
                    </div>
                    
                    <div id="paymentElement">
                        <!--Stripe.js injects the Payment Element-->
                    </div>
                    
                    <!-- Form submit button -->
                    <button id="submitBtn" class="btn btn-success">
                        <div class="spinner hidden" id="spinner"></div>
                        <span id="buttonText">Pay Now</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
