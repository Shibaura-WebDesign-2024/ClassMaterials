<?
try {
    // Code that may throw an exception
    $file = fopen("nonexistent_file.txt", "r");
    
    if (!$file) {
        throw new Exception("File not found!");
    }
    
    // Other code to be executed if the file is successfully opened
    // ...
    
    // Close the file
    fclose($file);
} catch (Exception $e) {
    // Exception handling
    echo "Exception: " . $e->getMessage();
}

?>