<?php
$str = "<h1>Hello World!</h1><br>";
echo $str;
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo <<<_END

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
_END;

foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
echo "</table>";
// function sanitizeString($var)
// {
//     if (get_magic_quotes_gpc())
//         $var = stripslashes($var);
//     $var = strip_tags($var);
//     $var = htmlentities($var);
//     return $var;
// }
// function sanitizeMySQL($connection, $var)
// {
//     $var = $connection->real_escape_string($var);
//     $var = sanitizeString($var);
//     return $var;
// }

?>

