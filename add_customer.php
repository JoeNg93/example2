<?php include "menu.php"; ?>

  <h2>Add Customer</h2>

  <form action="insert_customer.php" method="POST">
    <div class="form-group">
      <label for="fn">Firstname</label>
      <input type="text" id="fn" name="fn" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="ln">Lastname</label>
      <input type="text" id="ln" name="ln" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="ad">Street Address</label>
      <input type="text" name="ad" id="ad" class="form-control">
    </div>
    <div class="form-group">
      <button type="submit" name="btnAdd" class="btn btn-success">Add</button>
    </div>
  </form>

<?php
//include "connection.php";
//$btn = $_POST['btnAdd'];
//if (isset($btn)) {
//    $fn = $_POST['fn'];
//    $ln = $_POST['ln'];
//    $ad = $_POST['ad'];
//    $add = $db->prepare("INSERT INTO customers(firstname, lastname, streetaddress) VALUES (:fn, :ln, :ad)");
//    $add->bindParam(':fn', $fn);
//    $add->bindParam(':ln', $ln);
//    $add->bindParam(':ad', $ad);
//    $add->execute();
//}
?>

<?php include "footer.php"; ?>