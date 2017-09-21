<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="form" action="index.php" method="post">naam:
      <input type="text" name="gebruikersnaam" value="">wachtwoord:
      <input type="text" name="wachtwoord" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
session_start();
unset($_SESSION["gebruikersnaam"]);
unset($_SESSION["wachtwoord"]);

$gebruikersnaam = "open";
$wachtwoord = "sesame";
$form = true;

if (isset($_POST["submit"])) {
  echo '<style type="text/css">#form{
display:none;
}</style>';
unset($_POST["submit"]);
  // $_SESSION["gebruikersnaam"] = $_POST["gebruikersnaam"];
  // $_SESSION["wachtwoord"] = $_POST["wachtwoord"];
  if ($_POST["gebruikersnaam"] == $gebruikersnaam && $_POST["wachtwoord"] == $wachtwoord) {
    echo "je bent ingelogt";
    $form = false;
  }

}

?>
