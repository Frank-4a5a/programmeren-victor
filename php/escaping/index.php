<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <input type="text" name="waarde" value="">
      <input type="submit" name="" value="go">
    </form>
    <?php
    if (isset($_POST["waarde"])) {
      $waarde = $_POST["waarde"];
      echo htmlspecialchars($waarde);
    }

    ?>
  </body>
</html>
