<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = $_POST['email'];
    $appointment_date = $_POST['appointment_date'];
    $other_info = isset($_POST['other_info']) ? $_POST['other_info'] : '';

    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';


    // Convert tests array to a comma-separated string
    $tests = isset($_POST['tests']) ? implode(', ', $_POST['tests']) : '';

    // Database connection (replace with your actual credentials)
    $conn = new mysqli('sql110.infinityfree.com', 'if0_37152982', 'rO7wI1Tiz4b','if0_37152982_scpl');

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Insert the data into the database
    $sql = "INSERT INTO scpl (name, age, gender, tests, phone, email, appointment_date, other_info) 
            VALUES ('$name', '$age', '$gender', '$tests', '$phone', '$email', '$appointment_date', '$other_info')";

    if ($conn->query($sql) === TRUE) {
        echo "New appointment booked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

