<?php
include 'db.php';

$conn = OpenCon();

$sql = "SELECT * FROM Teachers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Teacher ID</th><th>Name</th><th>Address</th><th>Phone Number</th><th>Annual Salary</th><th>Background Check</th><th>Class ID</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Teacher_id"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["Phone_Number"]. "</td><td>" . $row["Annual_Salary"]. "</td><td>" . $row["Background_Check"]. "</td><td>" . $row["Class_id"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

CloseCon($conn);
?>
