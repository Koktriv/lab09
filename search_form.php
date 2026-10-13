<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Search cars by model">
    <title>Search Cars</title>
</head>
<body>
    <h1>Search Cars</h1>
    <form action="search_result.php" method="get">
        <label for="model">Car model:</label>
        <input type="text" id="model" name="model" required>
        <input type="submit" value="Search">
    </form>
</body>
</html>