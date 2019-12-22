<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>All News</title>
</head>
<body>
    <h1>All News</h1>
    <form method="get" action="search.php">
        Search : <input name="input">
        <input type="submit">
    </form>
<?php
$servername = "localhost";
$username = "root";
$password = "sew1550";
$dbname = "mainpage";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("set session character_set_connection=utf8;");
$conn->query("set session character_set_results=utf8;");
$conn->query("set session character_set_client=utf8;");
$result = $conn->query("select * from home");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<a href=" . $row['href'] . ">";
        echo "<img src=" . $row['imgurl'] . "><br>";
        echo $row['headline'];
        echo "</a>";
    }
}
$conn->close();
?>
</body>
</html>
