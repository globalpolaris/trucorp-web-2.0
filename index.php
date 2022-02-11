<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("192.168.75.129", "root", "asdasd", "trucorp", "6601");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT count(*) FROM users";
    $result = $conn->query($sql);
    if ($result) {
        while ($row = $result->fetch_row()) {
            echo "Total users: " . $row[0];
        }
    }


    ?>
</body>

</html>
