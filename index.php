<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Database</title>
</head>
<body>
<?php
include 'connection_db.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>
    <div class="container"></div>
</body>
</html>