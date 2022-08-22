<?php 
// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemNumber = "PN12345"; 
$itemPrice = 25; 
$currency = "USD"; 
 
// Stripe API configuration  
define('STRIPE_API_KEY', 'sk_test_51L6AYWSDXkTZVsFZhBMCwShni5dkStiC61V3XZdLLqZDJjMzKnnBpzE0mDDnT9UWRvpT4VWqH1LGHQStysl7oiCH00Kw6W7Dwv'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51L6AYWSDXkTZVsFZx1VRWyNr4QoG1JqHFqKNLUVoJaeIA1mH3X7PFd9UxPjX72GBXsdTqm9uiWekQok9rM6YIvSc00hLC682HK'); 
  
// Database configuration  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', 'Creole@123'); 
define('DB_NAME', 'stripe_demo');