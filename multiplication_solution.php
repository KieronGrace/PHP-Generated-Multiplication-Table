<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
        <?php
        //create table header row
          echo "<tr>";
          echo "<th>&nbsp;</th>";
          for($k = 1;$k <= 12; $k++){
            echo "<th>$k</th>";
          }
          echo "</tr>";

          //create remaining rows
          for($j = 1; $j <= 12; $j++){
              echo"<tr><th>".$j."</th>";
              for($i = 0; $i <= 11; $i++) {
                //display cell data j(row) * i(column)
                echo"<td>".($i+1)*$j."</td>";
              }
              echo"</tr>";
            }
        ?>
</table>
</body>
</html>
