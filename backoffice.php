<?php
include './dbh.php';

$sql = "SELECT * from users"; // Inserting data into the database
$result = $db->query($sql);
$message = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBurger</title>

</head>

<body>
    <table class="table">
        <thead>
            <tr>

                <th>Name</th>
                <th>Email</th>
                <th>Restaurant</th>
                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($message as $row) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['restaurant'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "<td><a class='btn btn-danger btn-sm" . $row['id'] . "'>Delete</a></td>";
                echo "<td><a class='btn btn-primary btn-sm" . $row['id'] . "'>Edit</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>