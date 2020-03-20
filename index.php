<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<?php
header("Access-Control-Allow-Origin: *");

$c = new mysqli("localhost", "root", "hunter", "");
if ($c->connect_error) {
  echo "Unable to connect, please try again";
  die();
}
?>

<body>

  <h2>Taxi Online</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>License</th>
    </tr>
    <?php
    $sql = "SELECT * FROM driver ORDER by name ASC";
    $result = $c->query($sql);
    if ($result->num_rows > 0) {

      $drivers = array();
      $i = 0;
      while ($obj = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'.$obj['id'].'</td>';
        echo '<td>'.$obj['name'].'</td>';
        echo '<td>'.$obj['license'].'</td>';
      }
    } else {
      echo "Empty table.";
      die();
    }
    $c->close();
    ?>
  </table>

</body>

</html>