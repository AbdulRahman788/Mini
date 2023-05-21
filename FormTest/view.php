<!DOCTYPE html>
<html>
<head>
    <title>Course Registration</title>
    <style>
        .certificate-img {
            max-width: 500px;
            max-height: 500px;
        }
    </style>
</head>
<body>
    <h2>Course Registration</h2>
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

    // Retrieve registration data from the database
    $sql = "SELECT * FROM course_registration";
    $result = $conn->query($sql);

    // Display the registration data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Name: " . $row["name"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Course: " . $row["course"] . "<br>";
            echo "Start Date: " . $row["startdate"] . "<br>";
            echo "End Date: " . $row["enddate"] . "<br>";
            if (!empty($row["certificate"])) {
                echo '<img class="certificate-img" src="' . $row["certificate"] . '" alt="Certificate"><br>';
            }
            echo "<hr>";
        }
    } else {
        echo "No registrations found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
