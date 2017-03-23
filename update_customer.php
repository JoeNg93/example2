<?php include "menu.php"; ?>
<h2>Edit Customer</h2>
<?php
include "connection.php";
$sql = "SELECT * FROM customers WHERE id_customers = " . $_GET['id'] . ";";
$result = $db->query($sql);
$theArray = $result->fetch(PDO::FETCH_ASSOC);
$fn = $theArray['firstname'];
$ln = $theArray['lastname'];
$st = $theArray['streetaddress'];
?>
<form action="customers.php" method="POST">
  <div class="form-group">
    <label for="fn">Firstname</label>
    <input type="text" name="fn" id="fn" value="<?php echo $fn; ?>" required class="form-control">
  </div>
  <div class="form-group">
    <label for="ln">Lastname</label>
    <input type="text" name="ln" id="ln" value="<?php echo $ln; ?>" required class="form-control">
  </div>
  <div class="form-group">
    <label for="st">Street Address</label>
    <input type="text" name="ad" id="ad" value="<?php echo $st; ?>" class="form-control">
  </div>
  <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" class="form-control">
  </div>
  <div class="form-group">
    <input type="submit" name="btnEdit" value="Submit" class="btn btn-primary">
  </div>
</form>

<?php include "footer.php"; ?>
