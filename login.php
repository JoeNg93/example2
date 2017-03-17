<?php
include "menu.php";
?>

<form action="login.php" method="POST">
  <div class="form-group">
    <label for="user">Username</label>
    <input type="text" name="user" value="" placeholder="Your name" required class="form-control">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" value="" placeholder="Your password" required class="form-control">
  </div>
  <div class="form-group">
    <button type="submit" name="btnLogin" value="Submit" class="btn btn-success">Submit</button>
  </div>
</form>

<?php
  session_start(); // Start the session, in order to use $_SESSION[key] in every other pages1
  $btn = $_POST['btnLogin'];
  if (isset($btn)) {
    $_SESSION['username'] = $_POST['user'];
    echo 'Hello: '.$_POST['user'];
  }
?>

<?php include "footer.php" ?>


