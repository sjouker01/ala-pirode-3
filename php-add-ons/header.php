
<body>
<header>
  <img src="/images/image (1).png" alt="logo" class="logo">
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="producten.php">Producten </a></li>
      <li>

<a href="informatie-pagina.php">Informatie</a></li>
<a href="Artiesten.php">Artiesten  </a></li>
      <li class="dropdown">
        <a href="#">Dropdown ﹀</a>
      
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../contact-pagina.php">Contact</a></li>
          <li><a href="../overons.php">Over Ons</a></li>
          <li><a href="php-add-ons\inloggen.php" id="dropdown-inloggen">Inloggen</a></li>
        </ul>
      </li>
      <?php session_start(); 
    if(isset($_SESSION["username"])){
      ?><a  href="/ala-pirode-3/admincheck.php"> <?php echo $_SESSION["username"];?></a><?php
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