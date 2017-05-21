<!--
  @author: Gianvito Bono
  @date  : 19-05-2017
--------------------------->

<?php include 'functions.php'; ?>
<nav>
  <center>
  <ul class="menu">
    <li><a href="index.php?lang=<?php echo test_input($_GET ['lang']); ?>"><?php echo getString("home", test_input($_GET ['lang'])); ?></a></li>
    <li><a href="login.php?lang=<?php echo test_input($_GET ['lang']); ?>"><?php echo getString("login", test_input($_GET ['lang'])); ?></a></li>
    <li><a href="register.php?lang=<?php echo test_input($_GET ['lang']); ?>"><?php echo getString("signup", test_input($_GET ['lang'])); ?></a></li>
    <li><a href="viaggi.php?lang=<?php echo test_input($_GET ['lang']); ?>"><?php echo getString("travel", test_input($_GET ['lang'])); ?></a></li>
  </ul>
  </center>
</nav>
