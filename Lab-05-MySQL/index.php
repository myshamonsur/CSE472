<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Workshop Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h1>Student Workshop Registration</h1>

    <form action="save_registration.php" method="POST">

        <label for="student_name">Student Name</label>
        <input type="text" id="student_name" name="student_name" required>

        <label for="student_id">Student ID</label>
        <input type="text" id="student_id" name="student_id" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="workshop">Workshop</label>
        <select id="workshop" name="workshop" required>
            <option value="">Select a workshop</option>
            <option value="Web Development">Web Development</option>
            <option value="Database Management">Database Management</option>
            <option value="Artificial Intelligence">Artificial Intelligence</option>
        </select>

        <button type="submit">Register</button>
    </form>

    <a class="view-link" href="registrations.php">
        View Registrations
    </a>
</div>

</body>
</html>