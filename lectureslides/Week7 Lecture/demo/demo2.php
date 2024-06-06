<php?
array
(
    [file1] => array
        (
            [name] => MyFile.txt (comes from the browser, so treat as tainted)
            [type] => text/plain  (not sure where it gets this from - assume the browser, so treat as tainted)
            [tmp_name] => /tmp/php/php1h4j1o (could be anywhere on your system, depending on your config settings, but the user has no control, so this isn't tainted)
            [error] => UPLOAD_ERR_OK  (= 0)
            [size] => 123   (the size in bytes)
        )
   [file2] => array
        (
            [name] => MyFile.jpg
            [type] => image/jpeg
            [tmp_name] => /tmp/php/php6hst32
            [error] => UPLOAD_ERR_OK
            [size] => 98174
        )
)		
?>						
