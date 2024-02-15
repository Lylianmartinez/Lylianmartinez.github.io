<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Fortnite</title>
  <link rel="icon" type="image/jpg" href="assets/F.jpg">
</head>
<body>
<?php

$this->Name = "Nom";
$this->Picture = "chemin/vers/image.jpg";
$this->Description = "Description";

function generateHTML ()
{
  global $this;
  echo "<h2>" . $this->Name . "</h2>";
  echo "<div>";
  echo "<img src='" . $this->Picture . "' alt='" . $this->Name . "' />";
  echo "<p>" . $this->Description . "</p>";
  echo "</div>";
}

generateHTML();
?>

<?php
// Creating Cookie 
$CookieName = "Ramirez";
$Cookievalue = "Fortnite Game Character";
setcookie($CookieName, $CookieValue, time()+ (86400 * 30));

//reading Cookie

if (!isset($_COOKIE[$CookieName]))
{
  echo "Cookie Value:" .$_COOKIE[$CookieValue];
}

?>

 
</body>
</html>
