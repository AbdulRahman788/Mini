<!DOCTYPE html>
<html>
<head>
    <title>Course Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <h1>Course Registration</h1>
                <form action="search.php" method="GET">
                    <input type="text" name="search" placeholder="Search by name or email">
                    <input type="submit" value="Search">
                </form>
            </div>
        </nav>
    </header>


    <div class="container">
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
                echo "<h3>Name: " . $row["name"] . "</h3>";
                echo "<p>Email: " . $row["email"] . "</p>";
                echo "<p>Course: " . $row["course"] . "</p>";
                echo "<p>Start Date: " . $row["startdate"] . "</p>";
                echo "<p>End Date: " . $row["enddate"] . "</p>";
                if (!empty($row["certificate"])) {
                    echo '<img class="certificate-img" src="' . $row["certificate"] . '" alt="Certificate">';
                }
                echo "<hr>";
            }
        } else {
            echo "<p>No registrations found.</p>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</body>
</html>
