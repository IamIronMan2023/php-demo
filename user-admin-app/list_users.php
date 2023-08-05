<?php
require_once "database/db.include.php";

$sql = "SELECT *,  CASE WHEN active THEN 'true' ELSE 'false' END as status FROM user";
$users = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<body>
    <h1>User Management System</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User Name</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
        <?php while ($rows = $users->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $rows['first_name'] ?></td>
                <td><?php echo $rows['last_name'] ?></td>
                <td><?php echo $rows['user_name'] ?></td>
                <td><?php echo $rows['status'] ?></td>
                <td>View</td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>