<?
// Custom exception handler function
function customExceptionHandler($exception) {
    // Log the exception or perform any other custom handling
    // You can access the exception message, code, file, line, and stack trace using the $exception object
    
    // Display a user-friendly error message
    echo "Oops! Something went wrong. Please try again later.";

    // You can also redirect the user to an error page or perform other actions based on your requirements
}

// Register the custom exception handler
set_exception_handler("customExceptionHandler");

// Example code that may throw an exception
try {
    // Code that may throw an exception
    throw new Exception("Custom exception example");
} catch (Exception $e) {
    // The custom exception handler function will be called automatically
}
?>