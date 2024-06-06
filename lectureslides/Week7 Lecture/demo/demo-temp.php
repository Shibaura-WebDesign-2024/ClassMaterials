<form action="form.php" method="post">
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="cancel" value="Cancel">
</form>

get http://www.bandname.com/mailinglist.php?name=Sally%20Strongarm&email=strongarm%40example.com


<? php
if ($_POST["submit"])
  echo "<h2>You clicked Submit!</h2>";
else if ($_POST["cancel"])
  echo "<h2>You clicked Cancel!</h2>";
?>
