<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Setting up the connection with MySQL
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "my";

        $conn = mysqli_connect(hostname: $host,
        username: $user,
        password: $pass,
        database: $db);

        // Checking the connection and returning an error if so
        if(mysqli_connect_errno()) {
            die("Connection Error: " . mysqli_connect_errno());
        }

        else {
            echo "Connection Successful." , "<br>";
        }

        $sql = "select * from assignment1";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "id: ".$row["id"] . " ". "Name: " .$row["Name"] .  "<br>";

                echo "<table>";
            }
        }
    ?>
</body>
</html>