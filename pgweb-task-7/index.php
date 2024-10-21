<!DOCTYPE html>
<html>
<body>

<?php  
$fruits = array(
  array("Apple", "Banana", "Orange"),
  array("Mango", "Grapes", "Pineapple"),
  array("Strawberry", "Blueberry", "Cherry"),
  array("Peach", "Plum", "Pear"),
  array("Kiwi", "Papaya", "Watermelon")
);
?>

<table border="1">
  <tr>
    <th>Fruit 1</th>
    <th>Fruit 2</th>
    <th>Fruit 3</th>
  </tr>

  <?php
  for ($row = 0; $row < 5; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 3; $col++) {
      echo "<td>" . $fruits[$row][$col] . "</td>";
    }
    echo "</tr>";
  }
  ?>

</table>

</body>
</html>
