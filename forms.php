<?php include "menu.php"; ?>

<h2>Forms</h2>
<form action="forms.php" class="" method="POST">
  <label for="country">Choose the country</label>
  <select name="country" id="country">
    <option value="fin">Finland</option>
    <option value="rus">Russian</option>
    <option value="nep">Nepai</option>
    <option value="vie">Vietnam</option>
    <option value="lat">Latvia</option>
    <option value="ger">German</option>
  </select>
  <br>

  <label for="gender">Choose your gender</label><br>
  <input type="radio" name="gender" value="female" id="gender">Female<br>
  <input type="radio" name="gender" value="male" id="gender">Male<br>

  <br>
  <label for="status">Choose your status</label><br>
  <input type="radio" name="status" value="student">Student<br>
  <input type="radio" name="status" value="teacher">Teacher<br>

  <input type="submit" name="btnSend" value="Send">
</form>

<?php
$btn = $_POST['btnSend'];
if (isset($btn)) {
  $country = $_POST['country'];
  $gender = $_POST['gender'];
  $status = $_POST['status'];
  echo 'Hello '.$gender.' '.$status.' from '.$country;
}
?>

<?php include "footer.php"; ?>
