<?php

  /*
  *  @author: Gianvito Bono
  *  @date  : 19-05-2017
  */

  include 'functions.php';
?>
<nav>
  <center>
  <ul class="menu">
    <li><a href="index.php?lang=<?php echo test_input($_GET ['lang']); ?>"><?php echo get_string("home", test_input($_GET ['lang'])); ?></a></li>
    <li><a href="login.php?lang=<?php echo test_input($_GET ['lang']); ?>"><?php echo get_string("login", test_input($_GET ['lang'])); ?></a></li>
    <li><a href="register.php?lang=<?php echo test_input($_GET ['lang']); ?>"><?php echo get_string("signup", test_input($_GET ['lang'])); ?></a></li>
    <li><a href="travels.php?lang=<?php echo test_input($_GET ['lang']); ?>"><?php echo get_string("travel", test_input($_GET ['lang'])); ?></a></li>
    <?php echo isset($_COOKIE['uid']) ? "<li class='uname'><img src='./res/icons/user.png' /></li>" . get_string("user_area", test_input($_GET ['lang'])) : ""; ?>
  </ul>
  </center>
</nav>
