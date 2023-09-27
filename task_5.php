<?php
function generatePassword($length) {
    // Define character sets for different types of characters
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numericChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine all character sets
    $allChars = $lowercaseChars . $uppercaseChars . $numericChars . $specialChars;

    // Initialize an empty password string
    $password = '';

    // Generate random characters until the password reaches the desired length
    for ($i = 0; $i < $length; $i++) {
        // Get a random index within the combined character set
        $randomIndex = mt_rand(0, strlen($allChars) - 1);

        // Append the randomly selected character to the password
        $password .= $allChars[$randomIndex];
    }

    return $password;
}

// Generate a random password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: $password";
?>
