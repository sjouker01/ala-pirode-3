<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\css\style.css">
    <script src="/js/login.js"></script>
</head>
<body>
<header>
  <div class="logo">Logo</div>
  <nav>
    <ul>
      <li><a href="#">Knop 1</a></li>
      <li><a href="#">Knop 2</a></li>
      <li><a href="#">Knop 3</a></li>
      <li class="dropdown">
        <a href="#">Dropdown</a>
        <ul>
          <li><a href="#">Item 1</a></li>
          <li><a href="#">Item 2</a></li>
          <li><a href="#">Item 3</a></li>
          <li><a href="#" id="dropdown-inloggen">Inloggen</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
<form action="php-add-ons\inloggen.php" method="post" id="mijnForm">
  <input type="hidden" name="naam" value="John">
  <button type="submit" id="mijnKnop">Inloggen</button>
</form>
<section id="overlay">
  <p>Even geduld a.u.b...</p>
</section>
<?php 


?>
</li>
        </ul>
      </li>
    </ul>
  </nav>
</header>

</body>
</html>