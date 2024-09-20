<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['captcha_input'];

    // Retrieve the stored captcha code from session
    if (isset($_SESSION['captcha_code']) && $userInput === $_SESSION['captcha_code']) {
        echo "Captcha validated successfully!";
        // Process the form submission
    } else {
        echo "Invalid captcha. Please try again.";
        // Redirect or show error message
    }

    // Clear the captcha from session to prevent reuse
    unset($_SESSION['captcha_code']);
}