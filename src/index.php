<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programs</title>
</head>
<body>
<table width="400px" border="3px solid #000">
<?php
for($row = 1; $row <= 8; $row++) {
    echo "<tr>";

    for($col = 1; $col <= 8; $col++) {
        $total = $row + $col;
        if($total & 1) {
          echo "<td height=30px width=30px bgcolor=#fff></td>";
        } else {
          echo "<td height=30px width=30px bgcolor=#000></td>";
        }
    }
     echo "</tr>";
}
?>
</table>

</body>
</html>