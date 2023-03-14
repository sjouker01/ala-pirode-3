
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="/js/login.js"></script>

<body>
<header>
  <div class="logo">Logo</div>
  <nav>
    <ul>
      <li><a href="#">Knop 1</a></li>
      <li><a href="#">Knop 2</a></li>
      <li>

<a href="">bier</a></li>
      <li class="dropdown">
        <a href="#">Dropdown</a>
        <ul>
          <li><a href="#">Item 1</a></li>
          <li><a href="#">Item 2</a></li>
          <li><a href="#">Item 3</a></li>
          <li><a href="php-add-ons\inloggen.php" id="dropdown-inloggen">Inloggen</a></li>
        </ul>
      </li>
      <?php session_start(); 
    if(isset($_SESSION["username"])){
       echo $_SESSION["username"];
    }
    ?>
    </ul>

  </nav>
</header>

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