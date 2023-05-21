<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $startdate = $_POST["startdate"];
    $enddate = $_POST["enddate"];

    // Validate form inputs
    // Add your own validation logic here

    // Upload certificate file
    $certificate = "";
    if ($_FILES["certificate"]["size"] > 0) {
        $targetDir = "../certificates/"; // Update the target directory path
        $targetFile = $targetDir . basename($_FILES["certificate"]["name"]);
        $fileTmpPath = $_FILES["certificate"]["tmp_name"];

        // Check if the target directory exists and is writable
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        if (!is_writable($targetDir)) {
            echo "Target directory is not writable.";
            exit;
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($fileTmpPath, $targetFile)) {
            $certificate = $targetFile;
        } else {
            echo "Failed to move the uploaded file.";
            exit;
        }
    }

    // Insert registration data into the database
    $sql = "INSERT INTO course_registration (name, email, course, startdate, enddate, certificate) VALUES ('$name', '$email', '$course', '$startdate', '$enddate', '$certificate')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
