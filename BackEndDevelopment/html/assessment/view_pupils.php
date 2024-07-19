<?php
include 'db.php';

$conn = OpenCon();

$sql = "SELECT * FROM Pupils";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Pupil ID</th><th>Pupil Name</th><th>Address</th><th>Medical Information</th><th>Email</th><th>Class ID</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Pupil_id"]. "</td><td>" . $row["Pupil_Name"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["Medical_Information"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Class_id"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

CloseCon($conn);
?>
