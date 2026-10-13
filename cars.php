<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Used car dealership listing">
    <title>Cars</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 6px 12px; }
        th { background-color: #ddd; }
    </style>
</head>
<body>
    <h1>Used Cars for Sale</h1>
<?php
require_once "settings.php";

// Step 1: Connect to the database
$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);

if ($dbconn) {
    // Step 2: Create the SQL query
    $query = "SELECT * FROM cars";

    // Step 3: Execute the query
    $result = mysqli_query($dbconn, $query);

    // Step 4: Did it work?
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Car ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>There are no cars to display.</p>";
    }

    // Step 5: Close the connection
    mysqli_close($dbconn);
} else {
    echo "<p>Unable to connect to the db.</p>";
}
?>
</body>
</html>