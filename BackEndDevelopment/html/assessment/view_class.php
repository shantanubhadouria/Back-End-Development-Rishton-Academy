<?php
include 'db.php';

$conn = OpenCon();

$sql = "SELECT * FROM Classes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Class ID</th><th>Class Name</th><th>Capacity</th><th>Number of Students</th><th>Number of Teachers</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Class_id"]. "</td><td>" . $row["Class_Name"]. "</td><td>" . $row["Capacity"]. "</td><td>" . $row["Number_of_Students"]. "</td><td>" . $row["Number_of_Teachers"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

CloseCon($conn);
?>
