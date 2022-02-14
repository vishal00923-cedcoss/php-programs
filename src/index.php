<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programs</title>
</head>
<body>
<?php
$marks = 50;

if ($marks >= 60) {
    echo "For Marks " .$marks. "% First Division";
} else if ($marks >= 45 && $marks <= 59) {
    echo "For Marks " .$marks. "% Second Division";
} else if ($marks >= 33 && $marks <= 44) {
    echo "For Marks " .$marks. "% Third Division";
} else {
    echo "Fail";
}
?>
</body>
</html>