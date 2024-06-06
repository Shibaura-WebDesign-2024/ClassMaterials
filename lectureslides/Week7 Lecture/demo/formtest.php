<?php // formtest.php
if (isset($_POST['name']))
  $name = $_POST['name'];
else
  $name = "(Not entered)";
echo <<<_END
<html>
  <head>
    <title>Form Test</title>
  </head>
  <body>
    Your name is: $name<br>
    <form method="post" action="formtest.php">
      What is your name?
      <input type="text" name="name">
      <input type="submit">
    </form>


    <form action="formtest2.php" method="get">
      <label><input type="radio" name="cc"> Visa</label>
      <label><input type="radio" name="cc"> MasterCard</label> <br>
      Favorite Star Trek captain:
      <select name="startrek">
        <option>James T. Kirk</option>
        <option>Jean-Luc Picard</option>
      </select> <br>
      <input type="submit">
      </form>						

      

  </body>
</html>
_END;
?>
