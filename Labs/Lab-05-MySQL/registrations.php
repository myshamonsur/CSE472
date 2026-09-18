<?php

require_once "db.php";

$result = $conn->query(
    "SELECT id, student_name, student_id, email, workshop, registered_at
     FROM registrations
     ORDER BY id DESC"
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Registrations</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container wide">

    <h1>Saved Registrations</h1>

    <a class="view-link" href="index.php">
        Back to Registration Form
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Student ID</th>
                <th>Email</th>
                <th>Workshop</th>
                <th>Registered At</th>
            </tr>
        </thead>

        <tbody>

        <?php while ($row = $result->fetch_assoc()): ?>

            <tr>
                <td><?= htmlspecialchars($row["id"]) ?></td>
                <td><?= htmlspecialchars($row["student_name"]) ?></td>
                <td><?= htmlspecialchars($row["student_id"]) ?></td>
                <td><?= htmlspecialchars($row["email"]) ?></td>
                <td><?= htmlspecialchars($row["workshop"]) ?></td>
                <td><?= htmlspecialchars($row["registered_at"]) ?></td>
            </tr>

        <?php endwhile; ?>

        </tbody>
    </table>

</div>

</body>
</html>

<?php
$conn->close();
?>