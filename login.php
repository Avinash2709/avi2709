<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the username and password from the POST request
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Dummy credentials for demonstration (replace with actual authentication logic)
  $validUsername = 'ram';
  $validPassword = '123';

  // Check if username and password match
  if ($username === $validUsername && $password === $validPassword) {
    echo 'Login successful'; // You can redirect or display a success message here
  } else {
    echo 'Invalid username or password'; // Display error message
  }
}
?>
