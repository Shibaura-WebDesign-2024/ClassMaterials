<?
// Custom error handling function
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    // Handle the error based on your application's needs
    // For example, you can log the error, display a user-friendly message, or perform any necessary actions

    // Log the error to a file
    error_log("Error: $errstr in $errfile on line $errline");

    // Display a user-friendly error message
    echo "An error occurred. Please try again later.";

    // Prevent the default PHP error handling
    return true;
}

// Register the custom error handling function
set_error_handler("customErrorHandler");

// Trigger an error
echo $undefinedVariable;

?>