<!DOCTYPE html>
<html>
<head>
<title>Hello DevOps Class</title>
</head>
<body>
<?php
// Connect to the database
$host = 'database-1.cx248m4we6k7.us-east-1.rds.amazonaws.com';
$user = 'admin';
$password = '12345678';
$dbname = 'yair';
$conn = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// Select all rows from the breached table
$sql = "SELECT id, email, pass, add_date FROM breached";
$result = mysqli_query($conn, $sql);
echo "<h1>Breached</h1>";
echo "<table>";
echo "<tr><th>ID</th><th>Email</th><th>Password</th><th>Date
Added</th></tr>";
// Output the data from each row
while ($row = mysqli_fetch_array($result)) {
echo "<tr><td>" . $row['id'] . "</td><td>" . $row['email'] . "</td><td>" .
$row['pass'] . "</td><td>" . $row['add_date'] . "</td></tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>
