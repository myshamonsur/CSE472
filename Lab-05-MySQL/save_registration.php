<?php

require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$student_name = trim($_POST["student_name"] ?? "");
$student_id = trim($_POST["student_id"] ?? "");
$email = trim($_POST["email"] ?? "");
$workshop = trim($_POST["workshop"] ?? "");

if ($student_name === "" || $student_id === "" || $email === "" || $workshop === "") {
    die("Please fill in all required fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}

$stmt = $conn->prepare(
    "INSERT INTO registrations (student_name, student_id, email, workshop)
     VALUES (?, ?, ?, ?)"
);

$stmt->bind_param(
    "ssss",
    $student_name,
    $student_id,
    $email,
    $workshop
);

if ($stmt->execute()) {
    echo "<h2>Registration saved successfully.</h2>";
    echo "<p><a href='index.php'>Back to Registration Form</a></p>";
    echo "<p><a href='registrations.php'>View All Registrations</a></p>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>