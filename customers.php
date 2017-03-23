<?php
include "connection.php";
//if (isset($_POST['btnAdd'])) {
//    $fn = $_POST['fn'];
//    $ln = $_POST['ln'];
//    $ad = $_POST['ad'];
//
//    $add = $db->prepare("INSERT INTO customers (firstname,lastname,streetaddress) VALUES(:fn,:ln,:ad)");
//    $add->bindParam(':fn', $fn);
//    $add->bindParam(':ln', $ln);
//    $add->bindParam(':ad', $ad);
//    $add->execute();
//}
if (isset($_POST['btnEdit'])) {
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $ad = $_POST['ad'];
    $id = $_POST['id'];

    $add = $db->prepare("UPDATE customers SET firstname=:fn,lastname=:ln,streetaddress=:ad WHERE id_customers=:id");
    $add->bindParam(':fn', $fn);
    $add->bindParam(':ln', $ln);
    $add->bindParam(':ad', $ad);
    $add->bindParam(':id', $id);
    $add->execute();
}
if (isset($_POST['btnDelete'])) {
    $id = $_POST['id'];

    $delete = $db->prepare("DELETE FROM customers WHERE id_customers = :id");
    $delete->bindParam(':id', $id);
    $delete->execute();
}
?>

<?php include "menu.php" ?>

<h2>Customers</h2>
<table class="table table-hover table-bordered">
  <thead>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Street Address</th>
  </tr>
  </thead>
  <tbody>

  <?php
  include "connection.php";
  $myquery = "SELECT firstname, lastname, streetaddress, id_customers FROM customers";
  $customers_data = $db->query($myquery);

  foreach ($customers_data as $row) {
      echo '<tr>';
      echo '<td>' . $row['firstname'] . '</td>';
      echo '<td>' . $row['lastname'] . '</td>';
      echo '<td>' . $row['streetaddress'] . '</td>';
      echo '<td><a href="update_customer.php?id=' . $row['id_customers'] . '">Update</a></td>';
      echo '<td><a href="delete_customer.php?id=' . $row['id_customers'] . '">Delete</a></td>';
      echo '</tr>';
  }
  ?>

  </tbody>
</table>

<?php include "footer.php"; ?>
