<?php
// Set timezone (modify as per your location)
date_default_timezone_set('Asia/Kolkata'); // Example: India timezone

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = $_POST['email'];
    $other_info = isset($_POST['other_info']) ? $_POST['other_info'] : '';

    // Convert tests array to a comma-separated string
    $tests = isset($_POST['tests']) ? implode(', ', $_POST['tests']) : '';

    // Database connection
    $conn = new mysqli('', '', '', '');

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Use Prepared Statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO scpl (name, age, gender, tests, phone, email, appointment_date, other_info) 
                            VALUES (?, ?, ?, ?, ?, ?, NOW(), ?)");
    $stmt->bind_param("sisssss", $name, $age, $gender, $tests, $phone, $email, $other_info);

    if ($stmt->execute()) {
        echo "<script>
                alert('New appointment booked successfully!');
                window.location.href='index.php'; 
              </script>";
    } else {
        echo "<script>
                alert('Error: " . addslashes($stmt->error) . "');
                window.location.href='index.php';
              </script>";
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>
