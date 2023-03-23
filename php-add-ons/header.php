
<body>
<header>
  <div class="logo">Logo</div>
  <nav>
    <ul>
      <li><a href="../index.php">home</a></li>
      <li><a href="contact-action.php">contact</a></li>
      <li>

<a href="../producten.php">producten</a></li>
      <li class="dropdown">
        <a href="#">Dropdown</a>
      
        <ul>
          <li><a href="../index.php">home</a></li>
          <li><a href="../producten.php">producten</a></li>
          <li><a href="../contact-pagina.php">contact</a></li>
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