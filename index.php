<?php
// Creating Cookie 
$CookieName = "Ramirez";
$CookieValue = "Fortnite Game Character";
setCookie($CookieName, $CookieValue, time()+ (86400 * 30));

//reading Cookie

if (!isset($_COOKIE[$CookieName]))
{
  echo "Cookie is not available";
} else {
  echo "CookieValue: " . $_COOKIE[$CookieValue];
}

?>
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
  <header>
    <div class="principale"> 
      <div class="logo">
        <a href="https://www.epicgames.com/site/fr/home">Epic Game</a>
      </div>
      <ul>
        <li class="active">
          <a href="#">Accueil</a>
        </li>
        <li>
          <a href="#">Service</a>
        </li>
        <li>
          <a href="#">Blog</a>
        </li>
        <li>
          <a href="#">A propos de nous</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
      </ul>
    </div>
    <div class="titre">
      <h1>Fortnite</h1>
    </div>
    <div class="bouton">
      <a href="carte.html" class="btn">Carte</a>
      <a href="arme.html" class="btn">Arme</a>
    </div>

  </header>

</body>
</html>