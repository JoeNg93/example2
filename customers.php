<?php include "menu.php" ?>

<h2>Customers</h2>
<table class="table table-hover table-bordered">
  <thead>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
  </thead>
  <tbody>

  <?php
  include "connection.php";
  $myquery = "SELECT firstname, lastname FROM customers";
  $customers_data = $db->query($myquery);

  foreach ($customers_data as $row) {
      echo '<tr><td>' . $row['firstname'] . '</td><td>' . $row['lastname'] . '</td></tr>';
  }
  ?>

  </tbody>
</table>

<?php include "footer.php"; ?>
