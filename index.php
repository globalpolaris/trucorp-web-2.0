<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-top: 1rem;
        }

        td,
        th {
            border: 1px solid #000;
            text-align: left;
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    $conn = mysqli_connect("192.168.75.129", "root", "asdasd", "trucorp", "6601");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </tr>
        <?php
        while ($user = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $user["id"] ?></td>
                <td><?= $user["nama"] ?></td>
                <td><?= $user["alamat"] ?></td>
                <td><?= $user["jabatan"] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
