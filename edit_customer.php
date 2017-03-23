<?php include "menu.php"; ?>
  <h2>Edit Customer</h2>
  <form action="update_all_customers.php" method="post">
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
          echo '<td><input type="text" name="fn[]" value="' . $row['firstname'] . '"/></td>';
          echo '<td><input type="text" name="ln[]" value="' . $row['lastname'] . '"/></td>';
          echo '<td><input type="text" name="ad[]" value="' . $row['streetaddress'] . '"/></td>';
          echo '<input type="hidden" name="id[]" value="' . $row['id_customers'] . '"/>';
          echo '</tr>';
      }
      ?>

      </tbody>
    </table>
    <input type="submit" name="btnUpdateAll" class="btn btn-primary" value="Update">
  </form>
<?php include "footer.php"; ?>